@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Thank <span class="text-accent-cyan">You</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Thank You</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<section class="py-20">
    <div class="container-nb">
        <div class="max-w-2xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Request Received</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">We've Got Your Project Details</h2>
            <p class="mt-5 text-ink/70">Thanks for telling us what you want to build. We'll review your request and get back to you within 24 hours with a tailored response.</p>

            <div class="bg-surface-alt rounded-lg p-6 text-left inline-block mt-8">
                <strong>What happens next?</strong>
                <ul class="list-style-four mt-3">
                    <li>We'll review your requirements within a few hours</li>
                    <li>You'll receive a tailored response within 24 hours</li>
                    <li>We'll schedule a call to discuss the details</li>
                </ul>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mt-8">
                <a href="/our-work" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">See Our Work</a>
                <a href="https://wa.me/2349073729787" target="_blank" rel="noopener" class="theme-btn"><i class="fab fa-whatsapp"></i> Chat With Us Now</a>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.footer-v2')
