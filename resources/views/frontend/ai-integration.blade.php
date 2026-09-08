@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>AI <span class="text-accent-cyan">Integration</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">AI Integration</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">AI Integration</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Make Your Software Smarter</h2>
            <p class="mt-5 text-ink/70">AI should be a practical business capability, not simply a buzzword. We integrate AI into products, workflows and customer experiences the same way we've built it into BotWave, VerifyMe+ and ScanOriginal &mdash; as a working feature, not a demo.</p>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="pb-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What's Included</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Where AI Actually Helps</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['icon' => 'flaticon-technical-support', 'title' => 'AI Chatbots', 'text' => 'Multi-channel support bots that actually resolve queries.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-settings', 'title' => 'AI Agents', 'text' => 'Automated workflows that take action, not just respond.', 'color' => '#06b6d4'],
                ['icon' => 'flaticon-search-location', 'title' => 'AI Search', 'text' => 'Search that understands intent, not just keywords.', 'color' => '#f59e0b'],
                ['icon' => 'flaticon-checklist', 'title' => 'Document Intelligence', 'text' => 'Extracting and analysing information from documents automatically.', 'color' => '#8b5cf6'],
                ['icon' => 'flaticon-optimization', 'title' => 'AI Automation', 'text' => 'Removing manual steps from repetitive business processes.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-web-programming', 'title' => 'LLM Integrations', 'text' => 'Wiring large language models into your existing product and data.', 'color' => '#06b6d4'],
            ] as $item)
            <div class="what-we-do-card w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1.4rem)] rounded-2xl p-8" style="background: color-mix(in srgb, {{ $item['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-5">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $item['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-16 h-16 rounded-2xl flex items-center justify-center" style="background: {{ $item['color'] }};">
                        <i class="{{ $item['icon'] }} text-3xl text-white"></i>
                    </div>
                </div>
                <h5 class="font-bold text-lg">{{ $item['title'] }}</h5>
                <p class="mt-2 text-ink/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Proof -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Built By Us</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">AI in Production, Not Just a Pitch Deck</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#botwave" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live &mdash; Free Trial</span>
                <h5 class="mt-2 font-bold">BotWave</h5>
                <p class="mt-2 text-ink/70">AI/LLM-powered conversation engine across WhatsApp, Telegram and website chat.</p>
            </a>
            <a href="/products#verifyme-plus" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live / Evolving</span>
                <h5 class="mt-2 font-bold">VerifyMe+</h5>
                <p class="mt-2 text-ink/70">A FastAPI AI microservice that analyses submitted scam reports.</p>
            </a>
            <a href="/products#scanoriginal" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-active">Active MVP Development</span>
                <h5 class="mt-2 font-bold">ScanOriginal</h5>
                <p class="mt-2 text-ink/70">An AI microservice behind product verification, alongside Dojah KYC checks.</p>
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
            <a href="/api-integration" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">API &amp; System Integration</a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Want AI That Actually Does Something?</h2>
            <p class="mt-3 text-white/70">Tell us the workflow or product you want AI built into &mdash; we'll help you scope something real.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
