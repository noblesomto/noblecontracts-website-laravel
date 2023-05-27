<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Mail;

class PageController extends Controller
{
    public function index()
    {   
        $title =  config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.index', compact('title'));
    }


    public function about()
    {   
        $title = "About Us - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.about', compact('title'));
    }

    public function services()
    {   
        $title = "Our Services - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.services', compact('title'));
    }

    public function ecommerce()
    {   
        $title = "Ecommerce - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.ecommerce', compact('title'));
    }

    public function sms_marketing()
    {   
        $title = "SMS Marketing - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.sms-marketing', compact('title'));
    }

    public function email_marketing()
    {   
        $title = "Email Marketing - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.email-marketing', compact('title'));
    }

    public function digital_marketing()
    {   
        $title = "Digital Marketing - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.digital-marketing', compact('title'));
    }

    public function mobile_apps()
    {   
        $title = "Mobile Application - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.mobile-apps', compact('title'));
    }

    public function web_development()
    {   
        $title = "Web Design & Development - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.web-development', compact('title'));
    }

    public function social_media()
    {   
        $title = "Social Media - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.social-media', compact('title'));
    }

    public function seo()
    {   
        $title = "SEO - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.seo', compact('title'));
    }

    public function sales_lead()
    {   
        $title = "Nigerian Email & GSM Database - ". config('global.site_name') ." | " .config('global.site_title');
        return view('frontend.sales-lead', compact('title'));
    }

    public function contact(Request $request)
    {   
        $title = "Contact Us | " . config('global.site_name');

        if ($request->isMethod('GET')) {
            return view('frontend.contact', compact('title'));
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


            $details = [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'subject' =>  $request->input('subject'),
                'message' => $request->input('message'),
            ];

            $admin_email = config('global.site_email');
            try {
                Mail::to($admin_email)->send(new ContactMail($details));
                return redirect("contact-us")->with('status', ['text'=>'Great! Your message was successfully sent, We will get back to you ASAP ','type'=>'success']);
            } catch (Throwable $e) {
                
                return redirect("contact-us")->with('status', ['text'=>'Error!, Email could not be sent now ','type'=>'danger']);
            }
                  

        }
    }

    public function pay($id)
    {   
        $title = "Make Payment - ". config('global.site_name') ." | " .config('global.site_title');
        $amount = $id;
        return view('frontend.make-payment', compact('title','amount'));
    }
}
