@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>SaaS <span class="text-accent-cyan">Development</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">SaaS Development</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">SaaS Development</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Have a SaaS Idea? We Can Build It.</h2>
            <p class="mt-5 text-ink/70">From your first concept to a production-ready, multi-tenant SaaS platform &mdash; subscriptions, admin dashboards and all. CleanPilot, BotWave and Marketplace Group are proof this isn't aspirational; we build and operate our own SaaS products the same way we build yours.</p>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What's Included</span>
                <h3 class="text-2xl md:text-3xl font-bold mt-3 mb-5">Everything a SaaS Product Needs to Launch</h3>
                <p class="text-ink/70">A SaaS platform is more than a web app &mdash; it needs to onboard, bill and support customers on its own. We build that whole layer, not just the core feature set.</p>
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <div class="flex gap-x-8">
                    <ul class="list-style-four text-ink/70">
                        <li>Product planning</li>
                        <li>UI/UX</li>
                        <li>Multi-tenant architecture</li>
                        <li>Backend/frontend development</li>
                        <li>Authentication</li>
                    </ul>
                    <ul class="list-style-four text-ink/70">
                        <li>Subscription billing</li>
                        <li>Admin dashboards</li>
                        <li>APIs</li>
                        <li>Third-party integrations</li>
                        <li>Deployment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proof -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Proof, Not Promises</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">SaaS Products We Build &amp; Operate</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#cleanpilot" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live</span>
                <h5 class="mt-2 font-bold">CleanPilot</h5>
                <p class="mt-2 text-ink/70">Tiered SaaS pricing, Direct Debit billing and accounting sync for UK cleaning businesses.</p>
            </a>
            <a href="/products#botwave" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live &mdash; Free Trial</span>
                <h5 class="mt-2 font-bold">BotWave</h5>
                <p class="mt-2 text-ink/70">Naira-priced, three-tier subscription SaaS for AI customer support bots.</p>
            </a>
            <a href="/products#marketplace-group" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live in Nigeria &amp; Ghana &mdash; Expanding</span>
                <h5 class="mt-2 font-bold">Marketplace Group</h5>
                <p class="mt-2 text-ink/70">A multi-tenant SaaS platform running independent classifieds sites per country.</p>
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
            <a href="/ai-integration" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">AI Integration</a>
            <a href="/api-integration" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">API &amp; System Integration</a>
            <a href="/cloud-deployment" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Cloud &amp; Deployment</a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have a SaaS Idea? Let's Turn It Into a Product.</h2>
            <p class="mt-3 text-white/70">Tell us what you're trying to build &mdash; from your first concept to a production-ready platform.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
