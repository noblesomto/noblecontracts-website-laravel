@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Cloud &amp; <span class="text-accent-cyan">Deployment</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">Cloud &amp; Deployment</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Cloud &amp; Deployment</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Infrastructure That Doesn't Fall Over</h2>
            <p class="mt-5 text-ink/70">Software is only as good as the infrastructure it runs on. We handle hosting, deployment and ongoing infrastructure so your product stays fast and available &mdash; and so launch day isn't the riskiest day of the project.</p>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What's Included</span>
                <h3 class="text-2xl md:text-3xl font-bold mt-3 mb-5">From Server to Production</h3>
                <p class="text-ink/70">We set up and manage the infrastructure layer so your team doesn't have to &mdash; provisioning, deployment pipelines and monitoring included.</p>
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <ul class="list-style-four text-ink/70">
                    <li>Server provisioning &amp; configuration</li>
                    <li>Contabo VPS &amp; Hetzner Cloud hosting</li>
                    <li>Nginx setup &amp; reverse proxying</li>
                    <li>Deployment pipelines</li>
                    <li>SSL, domains &amp; DNS</li>
                    <li>Database backups &amp; recovery</li>
                    <li>Uptime &amp; performance monitoring</li>
                    <li>Scaling as traffic grows</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Proof -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Running On This</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">What This Powers Today</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#marketplace-group" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live in Nigeria &amp; Ghana &mdash; Expanding</span>
                <h5 class="mt-2 font-bold">Marketplace Group</h5>
                <p class="mt-2 text-ink/70">Per-country databases on a shared multi-tenant codebase, deployed independently per market.</p>
            </a>
            <a href="/products#scanoriginal" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-active">Active MVP Development</span>
                <h5 class="mt-2 font-bold">ScanOriginal</h5>
                <p class="mt-2 text-ink/70">A Laravel 12 app and FastAPI microservice deployed and monitored side by side.</p>
            </a>
            <a href="/our-work" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <h5 class="font-bold">Client Platforms</h5>
                <p class="mt-2 text-ink/70">JJ Homes London, Oraclefilms TV and more, kept live and monitored in production.</p>
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
            <a href="/custom-software" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Custom Software</a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Need Somewhere Reliable to Run Your Software?</h2>
            <p class="mt-3 text-white/70">Whether you're launching new or migrating off something fragile, tell us what you're running.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
