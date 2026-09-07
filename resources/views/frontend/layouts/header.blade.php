<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VZDB4GQ6WW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VZDB4GQ6WW');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $description ?? 'Noble IT Services designs and builds custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs.' }}">
    <meta name="robots" content="{{ ($noindex ?? false) ? 'noindex, nofollow' : 'index, follow' }}">

    <meta name="keywords" content="software development Nigeria, SaaS development, AI integration, custom software, web and mobile applications, API integration, UI/UX product design, cloud deployment, digital marketing, SEO, web design companies in Nigeria, top software companies Nigeria">

    <meta name="author" content="Noble IT Services">
    <meta name="contact" content="info@nobleitservices.ng">
    <meta name="generator" content="devn">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:url" content="{{ url()->current() }}">
     <meta property="og:type"          content="website" />
     <meta property="og:site_name"     content="Noble IT Services" />
     <meta property="og:locale"        content="en_NG" />
     <meta property="og:title"         content="{{ $title }}" />

    <meta property="og:description" content="{{ $description ?? 'Noble IT Services designs and builds custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs.' }}">
    <meta property="og:image" content="{{ asset('frontend/images/banner/social-share-og.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter / X Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description ?? 'Noble IT Services designs and builds custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs.' }}">
    <meta name="twitter:image" content="{{ asset('frontend/images/banner/social-share-og.png') }}">

    <!-- Title -->
    <title>{{ $title }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    @if(request()->is('/'))
    <!-- Preload LCP hero image -->
    <link rel="preload" as="image" href="{{ asset('frontend/images/slider/slide1.jpg') }}">
    @endif
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;600&amp;family=Kumbh+Sans:wght@400;500;700&amp;family=Shadows+Into+Light&amp;display=swap" rel="stylesheet">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Magnific Popup (not needed until the video popup is opened) -->
    <link rel="preload" href="{{ asset('frontend/css/magnific-popup.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}"></noscript>
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.min.css') }}">
    <!-- Type Writer -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.animatedheadline.css') }}">
    <!-- Animate (only affects scroll-in animations, safe to load async) -->
    <link rel="preload" href="{{ asset('frontend/css/animate.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}"></noscript>
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}?v={{ @filemtime(public_path('frontend/css/style.css')) }}">
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <!--Floating WhatsApp css-->
     <link rel="stylesheet" href="{{ asset('frontend/css/floating-wpp.min.css') }}">

 <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '593374810813420');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=593374810813420&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- Organization Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Noble IT Services",
  "url": "https://nobleitservices.ng",
  "logo": "{{ asset('frontend/images/logos/logo.png') }}",
  "image": "{{ asset('frontend/images/banner/social-share-og.png') }}",
  "description": "Noble IT Services is a software development company building custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs, and operating its own products: BotWave, VerifyMe+, ScanOriginal, CleanPilot and Marketplace Group.",
  "telephone": "+2349073729787",
  "email": "info@nobleitservices.ng",
  "areaServed": {
    "@type": "Country",
    "name": "Nigeria"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Plot 3 Hon Rufus Oyedepo, Sangotedo",
    "addressLocality": "Lagos",
    "addressCountry": "NG"
  },
  "sameAs": [
    "https://facebook.com/noblecontracts",
    "https://twitter.com/noble_somto",
    "https://instagram.com/noblesomto",
    "https://linkedin.com/in/somtochukwu-noble-ifejika"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Software, SaaS & AI Services",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Custom Software Development", "url": "https://nobleitservices.ng/custom-software" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SaaS Development", "url": "https://nobleitservices.ng/saas-development" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "AI Integration", "url": "https://nobleitservices.ng/ai-integration" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Web & Mobile Applications", "url": "https://nobleitservices.ng/web-development" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "API & System Integration", "url": "https://nobleitservices.ng/api-integration" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "UI/UX & Product Design", "url": "https://nobleitservices.ng/ui-ux-design" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Cloud & Deployment", "url": "https://nobleitservices.ng/cloud-deployment" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Digital Growth (SEO, Social, Email/SMS Marketing)", "url": "https://nobleitservices.ng/services#digital-growth" } }
    ]
  }
}
</script>

<!-- WebSite Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Noble IT Services",
  "url": "https://nobleitservices.ng"
}
</script>
</head>