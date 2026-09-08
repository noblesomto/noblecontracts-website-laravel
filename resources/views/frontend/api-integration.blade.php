@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>API &amp; System <span class="text-accent-cyan">Integration</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">API &amp; System Integration</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">API &amp; System Integration</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Connecting Your Product to the Systems It Needs</h2>
            <p class="mt-5 text-ink/70">A product rarely stands alone &mdash; it needs to take payments, verify identities, send messages and talk to other systems. We connect it to the third-party and internal APIs that make it actually usable in the real world.</p>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What's Included</span>
                <h3 class="text-2xl md:text-3xl font-bold mt-3 mb-5">Integrations We Build &amp; Maintain</h3>
                <p class="text-ink/70">From payment rails to KYC and messaging, we've already integrated the providers most Nigerian and UK products need.</p>
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <ul class="list-style-four text-ink/70">
                    <li>Payments &mdash; Paystack, GoCardless Direct Debit</li>
                    <li>KYC &amp; verification &mdash; Dojah KYC</li>
                    <li>Messaging &mdash; WhatsApp Business API, Telegram</li>
                    <li>USSD &mdash; Africa's Talking</li>
                    <li>Accounting sync &mdash; Xero, Sage</li>
                    <li>REST &amp; third-party API development</li>
                    <li>Legacy system &amp; data migration</li>
                    <li>Webhooks &amp; event-driven integrations</li>
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
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Integrations Already Running in Production</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#scanoriginal" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-active">Active MVP Development</span>
                <h5 class="mt-2 font-bold">ScanOriginal</h5>
                <p class="mt-2 text-ink/70">Africa's Talking USSD, Dojah KYC and Paystack, wired into one verification flow.</p>
            </a>
            <a href="/products#cleanpilot" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live</span>
                <h5 class="mt-2 font-bold">CleanPilot</h5>
                <p class="mt-2 text-ink/70">GoCardless Direct Debit billing plus Xero/Sage accounting sync.</p>
            </a>
            <a href="/products#botwave" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live &mdash; Free Trial</span>
                <h5 class="mt-2 font-bold">BotWave</h5>
                <p class="mt-2 text-ink/70">WhatsApp Business API and Telegram integrations behind one bot dashboard.</p>
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
            <a href="/custom-software" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Custom Software</a>
            <a href="/saas-development" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">SaaS Development</a>
            <a href="/cloud-deployment" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Cloud &amp; Deployment</a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Need Two Systems Talking to Each Other?</h2>
            <p class="mt-3 text-white/70">Tell us what needs to connect &mdash; payments, KYC, messaging or something in-house &mdash; and we'll scope the integration.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
