@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Custom <span class="text-accent-cyan">Software</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">Custom Software</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Custom Software Development</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Software Built Around How Your Business Actually Works</h2>
            <p class="mt-5 text-ink/70">Off-the-shelf tools force your business to bend around their workflow. Custom software does the opposite &mdash; it's built around your process, your data and your team, so it fits from day one instead of requiring a workaround.</p>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What's Included</span>
                <h3 class="text-2xl md:text-3xl font-bold mt-3 mb-5">From Requirements to a Working System</h3>
                <p class="text-ink/70">We start by understanding the actual business problem &mdash; not just the feature list &mdash; then design and build a system that holds up as your business grows.</p>
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <ul class="list-style-four text-ink/70">
                    <li>Requirements discovery &amp; process mapping</li>
                    <li>System architecture &amp; database design</li>
                    <li>Backend &amp; frontend development</li>
                    <li>Authentication &amp; role-based access</li>
                    <li>Admin dashboards &amp; internal tools</li>
                    <li>Third-party &amp; legacy system integration</li>
                    <li>Testing, deployment &amp; handover</li>
                    <li>Ongoing support &amp; iteration</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Proof -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Built By Us</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Custom Software We've Shipped</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#scanoriginal" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-active">Active MVP Development</span>
                <h5 class="mt-2 font-bold">ScanOriginal</h5>
                <p class="mt-2 text-ink/70">A custom verification system spanning a PWA, USSD access and a Filament admin.</p>
            </a>
            <a href="/products#verifyme-plus" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live / Evolving</span>
                <h5 class="mt-2 font-bold">VerifyMe+</h5>
                <p class="mt-2 text-ink/70">A purpose-built reporting workflow backed by a custom AI analysis microservice.</p>
            </a>
            <a href="/our-work#quickerrands" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <h5 class="mt-2 font-bold">QuickErrands</h5>
                <p class="mt-2 text-ink/70">A custom on-demand booking platform built on Laravel for a client.</p>
            </a>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Related</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Often Paired With</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-4 text-center">
            <a href="/saas-development" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">SaaS Development</a>
            <a href="/api-integration" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">API &amp; System Integration</a>
            <a href="/ui-ux-design" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">UI/UX &amp; Product Design</a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have a Custom Software Idea?</h2>
            <p class="mt-3 text-white/70">Tell us about the process you want to build, automate or replace &mdash; we'll help you shape it into a working system.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
