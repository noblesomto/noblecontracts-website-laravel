@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Pro<span class="text-accent-cyan">ducts</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Products</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Hero / Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Products</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Software We Build, Launch &amp; Operate</h2>
            <p class="mt-5 text-ink/70">Beyond client work, Noble IT Services develops and operates its own software products. We build products around real business problems &mdash; from AI-powered customer support and trust &amp; safety to business automation and multi-country marketplaces.</p>
            <p class="mt-4 text-ink/70">Building our own products gives us first-hand experience with the realities of software development: product strategy, user experience, engineering, integrations, deployment, operations and continuous improvement.</p>
            <p class="mt-4 font-bold">These aren't just concepts. They're products we build and take into the real world.</p>
            <a href="#featured-products" class="theme-btn mt-6">Explore Our Products <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>

<!-- Product Category Nav -->
<section class="pb-12">
    <div class="container-nb">
        <nav class="products-filter" aria-label="Filter products by category">
            <button type="button" class="is-active" data-filter="all">All</button>
            <button type="button" data-filter="saas">SaaS</button>
            <button type="button" data-filter="ai">AI</button>
            <button type="button" data-filter="business-software">Business Software</button>
            <button type="button" data-filter="marketplaces">Marketplaces</button>
            <button type="button" data-filter="platforms">Platforms</button>
        </nav>
    </div>
</section>

<!-- Featured Products -->
<section id="featured-products" class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap gap-6">

            {{-- BotWave --}}
            <div id="botwave" class="product-card w-full lg:w-[calc(50%-0.75rem)]" data-category="saas ai" data-reveal>
                <div class="product-visual"><span class="product-mark"><i class="flaticon-technical-support"></i>BotWave</span></div>
                <span class="status-pill is-live">Live</span>
                <h3 class="text-xl font-bold mt-2">BotWave</h3>
                <p class="mt-2"><strong>AI-Powered Customer Support</strong></p>
                <p class="mt-2 text-ink/70">BotWave helps businesses automate customer conversations across WhatsApp, Telegram and their websites from one intelligent platform. Businesses can deploy AI-powered support assistants, automate common enquiries and hand conversations over to human agents when needed.</p>
                <div class="product-tags mt-4">
                    <span>SaaS</span><span>AI</span><span>Customer Support</span>
                </div>
                <h4 class="font-bold text-sm uppercase tracking-wide mt-2">Key capabilities</h4>
                <ul class="list-style-four text-ink/70 mt-2">
                    <li>AI-powered customer conversations</li>
                    <li>WhatsApp &amp; Telegram integration</li>
                    <li>Website chat</li>
                    <li>Human-agent handoff</li>
                    <li>Automated customer support</li>
                </ul>
                <a href="https://botwave.ng" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Visit BotWave <i class="fas fa-angle-double-right"></i></a>
            </div>

            {{-- VerifyMe+ --}}
            <div id="verifyme-plus" class="product-card w-full lg:w-[calc(50%-0.75rem)]" data-category="saas ai" data-reveal>
                <div class="product-visual"><span class="product-mark"><i class="flaticon-checklist"></i>VerifyMe+</span></div>
                <span class="status-pill is-live">Live</span>
                <h3 class="text-xl font-bold mt-2">VerifyMe+</h3>
                <p class="mt-2"><strong>AI-Powered Trust &amp; Safety Platform</strong></p>
                <p class="mt-2 text-ink/70">VerifyMe+ helps users report, investigate and identify potential scams through structured reporting and AI-assisted analysis. The platform transforms submitted reports into useful information that can help people make more informed decisions.</p>
                <div class="product-tags mt-4">
                    <span>AI</span><span>Trust &amp; Safety</span><span>SaaS</span>
                </div>
                <h4 class="font-bold text-sm uppercase tracking-wide mt-2">Key capabilities</h4>
                <ul class="list-style-four text-ink/70 mt-2">
                    <li>Scam reporting</li>
                    <li>Scam lookup</li>
                    <li>AI-assisted report analysis</li>
                    <li>Intelligent risk assessment</li>
                    <li>Structured reporting workflows</li>
                </ul>
                <a href="https://verifymeplus.ng" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Visit VerifyMe+ <i class="fas fa-angle-double-right"></i></a>
            </div>

            {{-- CleanPilot (priority visual treatment per spec) --}}
            <div id="cleanpilot" class="product-card w-full" data-category="saas business-software" data-reveal>
                <div class="product-visual" style="height:240px;"><span class="product-mark"><i class="flaticon-settings"></i>CleanPilot</span></div>
                <span class="status-pill is-live">Live</span>
                <h3 class="text-xl font-bold mt-2">CleanPilot</h3>
                <p class="mt-2"><strong>The Operating Platform for Cleaning Businesses</strong></p>
                <p class="mt-2 text-ink/70">CleanPilot brings the essential operations of a cleaning business into one platform. From payments and accounting to property turnovers and compliance, CleanPilot helps cleaning companies replace disconnected tools with a unified business system.</p>
                <div class="product-tags mt-4">
                    <span>SaaS</span><span>Business Automation</span><span>UK</span>
                </div>
                <h4 class="font-bold text-sm uppercase tracking-wide mt-2">Key capabilities</h4>
                <ul class="list-style-four text-ink/70 mt-2">
                    <li>Business management</li>
                    <li>Payment automation</li>
                    <li>Accounting integrations</li>
                    <li>Property turnover management</li>
                    <li>Compliance management</li>
                </ul>
                <a href="https://cleanpilot.uk" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Visit CleanPilot <i class="fas fa-angle-double-right"></i></a>
            </div>

            {{-- ScanOriginal --}}
            <div id="scanoriginal" class="product-card w-full lg:w-[calc(50%-0.75rem)]" data-category="platforms" data-reveal>
                <div class="product-visual"><span class="product-mark"><i class="flaticon-smartphone"></i>ScanOriginal</span></div>
                <span class="status-pill is-progress">In Development</span>
                <h3 class="text-xl font-bold mt-2">ScanOriginal</h3>
                <p class="mt-2"><strong>Product Verification &amp; Anti-Counterfeit Platform</strong></p>
                <p class="mt-2 text-ink/70">ScanOriginal makes it easier for consumers and businesses to verify products and identify potentially counterfeit goods through a simple digital verification experience. The platform is designed to work across modern web applications and low-connectivity channels, making verification accessible to a wider range of users.</p>
                <div class="product-tags mt-4">
                    <span>Product Verification</span><span>PWA</span><span>USSD</span>
                </div>
                <h4 class="font-bold text-sm uppercase tracking-wide mt-2">Key capabilities</h4>
                <ul class="list-style-four text-ink/70 mt-2">
                    <li>Product verification</li>
                    <li>PWA-based experience</li>
                    <li>USSD verification</li>
                    <li>Verified user accounts</li>
                    <li>Product management</li>
                </ul>
                <a href="https://scanoriginal.ng" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Explore ScanOriginal <i class="fas fa-angle-double-right"></i></a>
            </div>

            {{-- Marketplace Group --}}
            <div id="marketplace-group" class="product-card w-full lg:w-[calc(50%-0.75rem)]" data-category="marketplaces saas" data-reveal>
                <div class="product-visual"><img src="{{ asset('frontend/images/portfolio/marketplace.jpg') }}" loading="lazy" decoding="async" width="600" height="180" alt="Marketplace Group platform"></div>
                <span class="status-pill is-active">Expanding</span>
                <h3 class="text-xl font-bold mt-2">Marketplace Group</h3>
                <p class="mt-2"><strong>A Multi-Country Marketplace Platform</strong></p>
                <p class="mt-2 text-ink/70">Marketplace Group provides the technology foundation for launching and operating classifieds marketplaces across different countries. A shared software platform allows each market to operate independently while benefiting from a common product and engineering foundation.</p>
                <div class="product-tags mt-4">
                    <span>Marketplace</span><span>SaaS</span><span>Multi-Tenancy</span>
                </div>
                <h4 class="font-bold text-sm uppercase tracking-wide mt-2">Key capabilities</h4>
                <ul class="list-style-four text-ink/70 mt-2">
                    <li>Multi-country marketplaces</li>
                    <li>Independent market environments</li>
                    <li>Localised configurations</li>
                    <li>Scalable marketplace architecture</li>
                    <li>Shared product infrastructure</li>
                </ul>
                <p class="mt-4"><strong>Markets:</strong> Nigeria &middot; Ghana &middot; Ethiopia &middot; Uganda</p>
                <a href="https://www.marketplace.ng/" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Visit Marketplace <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.products-filter button');
    var cards = document.querySelectorAll('#featured-products .product-card[data-category]');
    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            buttons.forEach(function (b) { b.classList.remove('is-active'); });
            btn.classList.add('is-active');
            var filter = btn.getAttribute('data-filter');
            cards.forEach(function (card) {
                var matches = filter === 'all' || (card.getAttribute('data-category') || '').split(' ').indexOf(filter) !== -1;
                card.classList.toggle('is-hidden', !matches);
            });
        });
    });
});
</script>

<!-- Why We Build Our Own Products -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="max-w-2xl mx-auto text-center mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Why We Build Our Own Products</span>
            <p class="mt-5 text-ink/70">Building our own software gives us a different perspective. We experience the same challenges our clients face &mdash; validating ideas, designing products, acquiring users, integrating third-party services, managing infrastructure and continuously improving the software. That experience makes us better technology partners.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['icon' => 'flaticon-idea', 'title' => 'Product Thinking', 'text' => 'We understand that successful software is about more than code. It needs a clear problem, useful experience and sustainable business model.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-coding-2', 'title' => 'Real-World Engineering', 'text' => 'Our products are built for actual users, production environments and changing requirements.', 'color' => '#06b6d4'],
                ['icon' => 'flaticon-optimization', 'title' => 'Continuous Improvement', 'text' => "We don't consider a product finished at launch. We learn from usage and continuously improve it.", 'color' => '#f59e0b'],
                ['icon' => 'flaticon-technical-support', 'title' => 'Practical AI', 'text' => 'We experiment with AI where it can create genuine value, rather than adding AI simply because it is fashionable.', 'color' => '#8b5cf6'],
            ] as $item)
            <div class="what-we-do-card w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] rounded-2xl p-6" style="background: color-mix(in srgb, {{ $item['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-4">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $item['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-14 h-14 rounded-2xl flex items-center justify-center" style="background: {{ $item['color'] }};">
                        <i class="{{ $item['icon'] }} text-2xl text-white"></i>
                    </div>
                </div>
                <h5 class="font-bold">{{ $item['title'] }}</h5>
                <p class="mt-2 text-ink/70 text-sm">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Why We Build Our Own Products end -->

<!-- Product Development Lifecycle -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Product Process</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">From Idea to Product</h2>
        </div>
        <div class="flex flex-wrap gap-6 justify-center">
            @foreach ([
                ['icon' => 'fa-search', 'number' => '01', 'title' => 'Identify', 'text' => 'Find a meaningful problem worth solving.', 'color' => '#3b82f6'],
                ['icon' => 'fa-clipboard-list', 'number' => '02', 'title' => 'Validate', 'text' => 'Research the opportunity and define the product.', 'color' => '#06b6d4'],
                ['icon' => 'fa-pencil-ruler', 'number' => '03', 'title' => 'Design', 'text' => 'Create the product experience and architecture.', 'color' => '#f59e0b'],
                ['icon' => 'fa-code', 'number' => '04', 'title' => 'Build', 'text' => 'Develop the platform and core functionality.', 'color' => '#8b5cf6'],
                ['icon' => 'fa-rocket', 'number' => '05', 'title' => 'Launch', 'text' => 'Deploy the product and bring it to real users.', 'color' => '#3b82f6'],
                ['icon' => 'fa-chart-line', 'number' => '06', 'title' => 'Learn', 'text' => 'Use feedback and data to identify opportunities.', 'color' => '#06b6d4'],
                ['icon' => 'fa-sync-alt', 'number' => '07', 'title' => 'Evolve', 'text' => 'Continuously improve and scale the product.', 'color' => '#f59e0b'],
            ] as $step)
            <div class="what-we-do-card text-center w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] lg:w-[calc(25%-1.125rem)] rounded-2xl p-6" style="background: color-mix(in srgb, {{ $step['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-4">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $step['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-14 h-14 rounded-2xl flex items-center justify-center mx-auto" style="background: {{ $step['color'] }};">
                        <i class="fas {{ $step['icon'] }} text-2xl text-white"></i>
                    </div>
                </div>
                <span class="text-ink/30 font-bold text-sm">{{ $step['number'] }}</span>
                <h4 class="font-bold mt-1">{{ $step['title'] }}</h4>
                <p class="mt-2 text-ink/70 text-sm">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Development Lifecycle end -->

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have an Idea Worth Building?</h2>
            <p class="mt-3 text-white/70">Our products are proof that we understand what it takes to turn an idea into working software. If you're building a SaaS platform, business application, marketplace or AI-powered product, let's talk about how we can bring it to life.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
            <a href="/services" class="theme-btn">Explore Our Services <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
