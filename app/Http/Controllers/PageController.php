<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\View;
use App\Services\SendinblueMailer;
use Mail;

class PageController extends Controller
{
    public function index()
    {
        $title = "Noble IT Services - Software, SaaS & AI Company in Nigeria";
        $description = "Noble IT Services builds custom software, SaaS platforms and AI-powered solutions for businesses — creators of BotWave, VerifyMe+, ScanOriginal and CleanPilot.";
        return view('frontend.index', compact('title', 'description'));
    }


    public function about()
    {
        $title = "About Us | Noble IT Services";
        $description = "Noble IT Services is a software development company building custom software, SaaS platforms and AI-powered solutions — and operating its own products, from early idea through launch.";
        return view('frontend.about', compact('title', 'description'));
    }

    public function services()
    {
        $title = "Our Services | Noble IT Services";
        $description = "Custom software, SaaS development, AI integration, web & mobile apps, API integration, UI/UX, cloud deployment and digital growth — explore Noble IT Services' full service range.";
        return view('frontend.services', compact('title', 'description'));
    }

    public function custom_software()
    {
        $title = "Custom Software Development Company Nigeria | Noble IT";
        $description = "Bespoke software built around how your business actually works — planning, architecture, backend/frontend development and deployment from Noble IT Services.";
        return view('frontend.custom-software', compact('title', 'description'));
    }

    public function saas_development()
    {
        $title = "SaaS Development Company Nigeria | Noble IT Services";
        $description = "Multi-tenant SaaS platforms built from idea to production — subscription billing, admin dashboards, APIs and third-party integrations. See CleanPilot, BotWave and Marketplace Group.";
        return view('frontend.saas-development', compact('title', 'description'));
    }

    public function ai_integration()
    {
        $title = "AI Integration Company Nigeria | Noble IT Services";
        $description = "AI chatbots, agents, search, document intelligence and LLM integrations built into real products — as shipped in BotWave, VerifyMe+ and ScanOriginal.";
        return view('frontend.ai-integration', compact('title', 'description'));
    }

    public function api_integration()
    {
        $title = "API & System Integration | Noble IT Services";
        $description = "Connecting your product to payments, KYC, messaging and other third-party systems — Paystack, GoCardless, Dojah KYC, Africa's Talking and more.";
        return view('frontend.api-integration', compact('title', 'description'));
    }

    public function ui_ux_design()
    {
        $title = "UI/UX & Product Design | Noble IT Services";
        $description = "Interfaces designed for how a product will actually be used — from first wireframe to a production-ready design system.";
        return view('frontend.ui-ux-design', compact('title', 'description'));
    }

    public function cloud_deployment()
    {
        $title = "Cloud & Deployment | Noble IT Services";
        $description = "Reliable hosting, deployment and infrastructure for production software — Contabo VPS, Hetzner Cloud, Nginx and modern deployment practices.";
        return view('frontend.cloud-deployment', compact('title', 'description'));
    }

    public function products()
    {
        $title = "Our Products | Software, SaaS & AI Products | Noble IT Services";
        $description = "Explore software products built and operated by Noble IT Services, including SaaS platforms, AI-powered applications, business automation tools and digital marketplaces.";
        return view('frontend.products', compact('title', 'description'));
    }

    public function our_work()
    {
        $title = "Our Work: Case Studies & Products | Noble IT Services";
        $description = "Case studies from Noble IT Services' owned products and client projects, including JJ Homes London, Oraclefilms TV, QuickErrands and Marketplace Naija/Ghana.";
        return view('frontend.our-work', compact('title', 'description'));
    }

    public function ecommerce()
    {
        $title = "Ecommerce Development Nigeria | Noble IT Services";
        $description = "Ecommerce website development for Nigerian businesses — online stores, secure checkout and payment integration, built by Noble IT Services.";
        return view('frontend.ecommerce', compact('title', 'description'));
    }

    public function sms_marketing()
    {
        $title = "SMS Marketing Services Nigeria | Noble IT Services";
        $description = "Bulk SMS marketing campaigns to reach customers directly — promotions, alerts and reminders for Nigerian businesses from Noble IT Services.";
        return view('frontend.sms-marketing', compact('title', 'description'));
    }

    public function email_marketing()
    {
        $title = "Email Marketing Services | Noble IT Services";
        $description = "Email marketing campaigns that convert — newsletters, promotions and automated sequences for Nigerian businesses, from Noble IT Services.";
        return view('frontend.email-marketing', compact('title', 'description'));
    }

    public function digital_marketing()
    {
        $title = "Digital Marketing Services Nigeria | Noble IT Services";
        $description = "Digital marketing for Nigerian businesses — SEO, social media, email and SMS marketing under Noble IT Services' Digital Growth offering.";
        return view('frontend.digital-marketing', compact('title', 'description'));
    }

    public function mobile_apps()
    {
        $title = "Mobile App Development Nigeria | Noble IT Services";
        $description = "Custom mobile app development for iOS and Android — from concept to launch, built by Noble IT Services.";
        return view('frontend.mobile-apps', compact('title', 'description'));
    }

    public function web_development()
    {
        $title = "Web Design & Development Nigeria | Noble IT Services";
        $description = "Web design and development for Nigerian businesses — responsive, fast-loading websites built by Noble IT Services.";
        return view('frontend.web-development', compact('title', 'description'));
    }

    public function social_media()
    {
        $title = "Social Media Marketing Nigeria | Noble IT Services";
        $description = "Social media marketing and management services to grow your brand's reach and engagement, from Noble IT Services.";
        return view('frontend.social-media', compact('title', 'description'));
    }

    public function seo()
    {
        $title = "SEO Services Nigeria | Noble IT Services";
        $description = "Search engine optimization services to help Nigerian businesses rank higher on Google, from Noble IT Services' Digital Growth team.";
        return view('frontend.seo', compact('title', 'description'));
    }

    public function sales_lead()
    {
        $title = "Nigerian Email & GSM Database | Noble IT Services";
        $description = "Nigerian email and GSM phone number database for targeted marketing campaigns, from Noble IT Services.";
        return view('frontend.sales-lead', compact('title', 'description'));
    }

    public function contact(Request $request, SendinblueMailer $mailer)
    {
        $title = "Contact Us | Noble IT Services";
        $description = "Get in touch with Noble IT Services — tell us about your software, SaaS or AI project, or ask about our Digital Growth services.";

        if ($request->isMethod('GET')) {
            return view('frontend.contact', compact('title', 'description'));
        }

         if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'email' => 'required|email',
                'message' => 'required',
                'g-recaptcha-response' => ['required', new ReCaptcha],
            ]);


            $html = View::make('email.contactMail', [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'subject' =>  $request->input('subject'),
                'message' => $request->input('message'),
            ])->render();

            // Send the email via Sendinblue API
            $mailer->send(
                config('global.site_email'), // recipient email
                'Noble IT Services',             // recipient name
                'New Contact Message from Website',
                $html,
            );

             return redirect("contact-us")->with('status', ['text'=>'Great! Your message was successfully sent, We will get back to you ASAP ','type'=>'success']);
                  

        }
    }

    public function pay($id)
    {
        $title = "Make Payment | Noble IT Services";
        $amount = $id;
        $noindex = true;
        return view('frontend.make-payment', compact('title', 'amount', 'noindex'));
    }
}
