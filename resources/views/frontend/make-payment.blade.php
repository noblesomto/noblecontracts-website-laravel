@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Make Payment of N{{ $amount }}</h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Make Payment</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<section class="py-20">
    <div class="container-nb max-w-2xl mx-auto text-center" data-reveal>
        <h4 class="text-2xl font-bold mb-8">Make Payment of N{{ $amount }}</h4>

        <div class="bg-surface-alt rounded-lg p-8 text-left inline-block">
            <p class="text-lg"><strong>Bank:</strong> FCMB</p>
            <p class="text-lg mt-2"><strong>Account Number:</strong> 1007762905</p>
            <p class="text-lg mt-2"><strong>Account Name:</strong> Noble IT &amp; Global Services</p>

            <div class="mt-6 pt-6 border-t border-border-soft">
                <h5 class="font-bold mb-2">Send Proof of Payment to</h5>
                <p><a href="mailto:info@nobleitservices.ng" class="text-accent hover:underline">info@nobleitservices.ng</a></p>
                <p class="mt-1">Call: <a href="tel:09073729787" class="text-accent hover:underline">0907 372 9787</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Let's Design Your New Website</h2>
            <p class="mt-3 text-white/70">Do you want a website that stands out and impresses your clients? Tell us about your project and we'll help you shape it into something real.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
