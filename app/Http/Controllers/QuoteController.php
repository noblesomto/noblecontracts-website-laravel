<?php

namespace App\Http\Controllers;

use App\Models\QuoteDraft;
use App\Services\SendinblueMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class QuoteController extends Controller
{
    public function index()
    {
        $title = "Start a Project | Noble IT Services";
        $description = "Tell us what you want to build — custom software, a SaaS platform or AI integration. Get a free project scope from Noble IT Services within 24 hours.";
        return view('frontend.start-a-project', compact('title', 'description'));
    }

    public function saveStep(Request $request)
    {
        // Honeypot — silently accept without persisting anything
        if ($request->filled('company_website')) {
            return response()->json(['success' => true, 'session_token' => $request->input('session_token') ?: (string) Str::uuid()]);
        }

        $token = $request->input('session_token');
        if (!$token) {
            $token = (string) Str::uuid();
        }

        $draft = QuoteDraft::updateOrCreate(
            ['session_token' => $token],
            array_merge(
                $request->except(['company_website', 'session_token', 'step_number']),
                [
                    'session_token' => $token,
                    'status' => 'draft',
                    'step_number' => $request->input('step_number', 1),
                    'ip_address' => $request->ip(),
                ]
            )
        );

        return response()->json([
            'success' => true,
            'session_token' => $token,
            'quote' => $draft,
        ]);
    }

    public function getDraft($token)
    {
        $draft = QuoteDraft::where('session_token', $token)->first();

        if (!$draft) {
            return response()->json(['draft' => null], 404);
        }

        return response()->json(['draft' => $draft->toArray()]);
    }

    public function submit(Request $request, SendinblueMailer $mailer)
    {
        // Honeypot
        if ($request->filled('company_website')) {
            return response()->json(['success' => true]);
        }

        // Rate limit: 3 submissions per IP per hour
        $key = 'quote-submit:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return response()->json([
                'success' => false,
                'message' => "Too many submission attempts. Please try again in {$seconds} seconds.",
            ], 429);
        }

        // Normalize before validating so "+234 803 123 4567" and "+2348031234567"
        // are treated the same as a standard international (E.164-style) number.
        if ($request->filled('phone')) {
            $request->merge(['phone' => preg_replace('/[\s().-]/', '', $request->input('phone'))]);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'string', 'max:20', 'regex:/^\+[1-9]\d{6,14}$/'],
            'contact_method' => 'nullable|in:email,phone,whatsapp',
            'service_type' => 'required|in:custom_software,saas_development,ai_integration,web_mobile,api_integration,ui_ux_design,cloud_deployment,digital_growth',
            'description' => 'required|string|max:2000',
            'goal' => 'nullable|string|max:2000',
            'budget' => 'nullable|in:under_1m,1m_5m,5m_15m,15m_above,not_sure',
            'timeline' => 'nullable|in:urgent,1_month,2_3_months,flexible',
            'additional_notes' => 'nullable|string|max:2000',
            // Not required: if the draft-saving round trip never completed (network hiccup,
            // slow connection, etc.) the client may reach final submit with no token yet.
            // The final submit itself carries every required field, so it must still succeed.
            'session_token' => 'nullable|string',
        ]);

        // Fall back to a fresh token so submission never fails for a reason the visitor
        // never sees or caused themselves.
        $token = $request->input('session_token') ?: (string) Str::uuid();

        $draft = QuoteDraft::updateOrCreate(
            ['session_token' => $token],
            array_merge(
                $request->except(['company_website', 'session_token']),
                [
                    'session_token' => $token,
                    'status' => 'submitted',
                    'submitted_at' => now(),
                    'ip_address' => $request->ip(),
                ]
            )
        );

        RateLimiter::hit($key, 3600);

        // The lead is already saved at this point regardless of what happens below —
        // a transient email failure must never make the visitor think their request was lost.
        try {
            $html = View::make('email.quoteRequestMail', compact('draft'))->render();

            $mailer->send(
                config('global.site_email'),
                'Noble IT Services',
                'New Project Quote Request',
                $html
            );
        } catch (\Throwable $e) {
            Log::error('Failed to send quote request notification email: ' . $e->getMessage(), [
                'quote_draft_id' => $draft->id,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Quote submitted successfully.',
            'redirect' => route('quote.thankyou'),
        ]);
    }

    public function thankYou()
    {
        $title = "Thank You | Noble IT Services";
        return view('frontend.thank-you', compact('title'));
    }
}
