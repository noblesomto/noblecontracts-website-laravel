@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>About <span class="text-accent-cyan">Us</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">About</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">About Noble IT Services</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">We Build Software That Moves Businesses Forward.</h2>
                <p class="text-ink/70">Noble IT Services is a software development and technology company focused on building custom software, SaaS platforms and AI-powered solutions for businesses, startups and organisations.</p>
                <p class="mt-4 text-ink/70">We work with businesses, entrepreneurs and organisations to transform ideas, business processes and complex requirements into reliable digital products &mdash; from the first concept through design, development, integration, deployment and ongoing improvement. We also operate our own SaaS products, including BotWave, VerifyMe+, ScanOriginal, CleanPilot and Marketplace Group, giving us first-hand experience with everything we build for clients.</p>
                <div class="flex flex-wrap gap-6 mt-8">
                    <div class="flex gap-3">
                        <div class="contact-info-badge-v2 shrink-0"><i class="fas fa-check text-white"></i></div>
                        <div>
                            <h5 class="font-bold">Products &amp; Client Work</h5>
                            <p class="mt-1 text-ink/70 text-sm">We build for clients and operate our own SaaS products, side by side.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <div class="contact-info-badge-v2 shrink-0"><i class="fas fa-check text-white"></i></div>
                        <div>
                            <h5 class="font-bold">Idea to Launch</h5>
                            <p class="mt-1 text-ink/70 text-sm">From early concept through development, launch and continuous improvement.</p>
                        </div>
                    </div>
                </div>
                <a href="/contact-us" class="theme-btn mt-8">Contact Us <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)] relative" data-reveal>
                <div class="flex gap-4">
                    <img src="{{ asset('frontend/images/about/ww-do-two1.jpg') }}" loading="lazy" decoding="async" alt="Noble IT Services" class="w-2/3 rounded-lg object-cover h-[420px]">
                    <div class="w-1/3 flex flex-col gap-4">
                        <img src="{{ asset('frontend/images/about/ww-do-two2.jpg') }}" loading="lazy" decoding="async" alt="Noble IT Services" class="rounded-lg object-cover h-[200px] w-full">
                        <img src="{{ asset('frontend/images/about/ww-do-two3.jpg') }}" loading="lazy" decoding="async" alt="Noble IT Services" class="rounded-lg object-cover h-[200px] w-full">
                    </div>
                </div>
                <div class="absolute -bottom-6 -left-6 bg-accent text-white rounded-lg px-6 py-4 text-center shadow-lg">
                    <span class="block text-3xl font-bold">11+</span>
                    <span class="text-sm">Years Of Experience</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credibility Bar -->
<section class="py-16 bg-surface-alt bg-cover bg-center" style="background-image: url({{ asset('frontend/images/background/counter-bg.png') }});">
    <div class="container-nb">
        <div class="flex flex-wrap justify-center gap-8 text-center">
            @foreach ([
                ['icon' => 'flaticon-startup', 'text' => '11+ Years<br>Software Development Experience'],
                ['icon' => 'flaticon-online', 'text' => 'Products Built<br>From Concept to Production'],
                ['icon' => 'flaticon-global', 'text' => 'Multiple Markets<br>Nigeria &middot; UK &middot; International'],
                ['icon' => 'flaticon-trophy', 'text' => 'End-to-End<br>Product Development'],
            ] as $stat)
            <div class="w-full sm:w-[calc(50%-1rem)] md:w-[calc(25%-1.5rem)]" data-reveal>
                <div class="trust-stat-card">
                    <i class="{{ $stat['icon'] }}"></i>
                    <h5>{!! $stat['text'] !!}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- What We Build -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Capabilities</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">What We Build</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Purpose-built applications designed around your business processes and requirements.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-online', 'title' => 'SaaS Platforms', 'href' => '/saas-development', 'text' => 'Scalable software products designed for subscription-based businesses and recurring revenue models.', 'color' => '#06b6d4'],
                ['icon' => 'flaticon-idea', 'title' => 'AI-Powered Applications', 'href' => '/ai-integration', 'text' => 'Intelligent products using AI to automate processes, analyse information and improve customer experiences.', 'color' => '#f59e0b'],
                ['icon' => 'flaticon-app-development', 'title' => 'Web &amp; Mobile Applications', 'href' => '/web-development', 'text' => 'Modern, responsive applications designed for real users across web and mobile devices.', 'color' => '#8b5cf6'],
                ['icon' => 'flaticon-optimization', 'title' => 'Business Automation', 'href' => null, 'text' => 'Digital workflows that reduce repetitive work and improve operational efficiency.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-web-programming', 'title' => 'API &amp; System Integration', 'href' => '/api-integration', 'text' => 'Connecting your application with payments, communication platforms, CRMs, accounting systems and other third-party services.', 'color' => '#06b6d4'],
            ] as $item)
            <div class="what-we-do-card w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1.4rem)] rounded-2xl p-8" style="background: color-mix(in srgb, {{ $item['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-5">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $item['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-16 h-16 rounded-2xl flex items-center justify-center" style="background: {{ $item['color'] }};">
                        <i class="{{ $item['icon'] }} text-3xl text-white"></i>
                    </div>
                </div>
                <h5 class="font-bold text-lg">@if($item['href'])<a href="{{ $item['href'] }}" class="hover:opacity-70">{!! $item['title'] !!}</a>@else{!! $item['title'] !!}@endif</h5>
                <p class="mt-2 text-ink/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Story</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">From Web Development to Software Engineering</h2>
            <p class="mt-5 text-ink/70">Noble IT Services has evolved alongside the technology landscape. What began with web design and digital development has grown into a broader software engineering practice focused on building complete digital products and business platforms.</p>
            <p class="mt-4 text-ink/70">Today, our work extends beyond websites. We design and develop SaaS products, business applications, marketplaces, AI-powered systems, APIs and integrated digital solutions.</p>
            <p class="mt-4 text-ink/70">This evolution has been driven by one simple principle: <strong>technology should solve a business problem, not simply exist as a feature.</strong> That principle guides how we approach every project &mdash; from the first conversation to production and beyond.</p>
            <p class="mt-5 text-ink/50 text-sm">Noble IT Services is operated by Noble IT and Global Services, registered in Nigeria with the Corporate Affairs Commission (CAC).</p>
        </div>
    </div>
</section>

<!-- Products We've Built -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">We Build Products, Not Just Projects</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Products We've Built</h2>
            <p class="mt-5 text-ink/70">Our experience goes beyond delivering individual client projects. We've designed, developed and operated software products across areas including AI, SaaS, marketplaces, business automation and trust &amp; safety.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#botwave" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live</span>
                <h5 class="mt-2 font-bold">BotWave</h5>
                <p class="mt-1 text-ink/70">AI Customer Support</p>
            </a>
            <a href="/products#verifyme-plus" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live / Evolving</span>
                <h5 class="mt-2 font-bold">VerifyMe+</h5>
                <p class="mt-1 text-ink/70">Trust &amp; Safety</p>
            </a>
            <a href="/products#cleanpilot" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live</span>
                <h5 class="mt-2 font-bold">CleanPilot</h5>
                <p class="mt-1 text-ink/70">Business SaaS</p>
            </a>
            <a href="/our-work#marketplace-group" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <span class="status-pill is-live">Live &amp; Expanding</span>
                <h5 class="mt-2 font-bold">Marketplace Group</h5>
                <p class="mt-1 text-ink/70">Multi-Country Marketplace</p>
            </a>
        </div>
        <div class="text-center mt-10">
            <a href="/products" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Explore Our Products <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>

<!-- Why Noble IT Services -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Why Businesses Choose Noble IT Services</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">What Makes Us Different</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['icon' => 'flaticon-target', 'title' => 'We Think Beyond the Build', 'text' => 'We first understand the business problem, then determine the technology required to solve it.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-trophy', 'title' => 'We Build Real Products', 'text' => 'Building and operating our own software gives us practical insight into deployment, users and continuous improvement.', 'color' => '#06b6d4'],
                ['icon' => 'flaticon-data', 'title' => 'We Design for Growth', 'text' => 'We build with the future in mind &mdash; systems that evolve as your users, data and requirements grow.', 'color' => '#f59e0b'],
                ['icon' => 'flaticon-idea', 'title' => 'We Make AI Practical', 'text' => "We don't add AI because it's trending. We identify where it genuinely improves a product or experience.", 'color' => '#8b5cf6'],
                ['icon' => 'flaticon-checklist', 'title' => 'We Work Across the Full Lifecycle', 'text' => 'From discovery and planning to design, development, deployment and ongoing improvement.', 'color' => '#22c55e'],
            ] as $item)
            <div class="what-we-do-card w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(20%-1.2rem)] rounded-2xl p-6" style="background: color-mix(in srgb, {{ $item['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-4">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $item['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-14 h-14 rounded-2xl flex items-center justify-center" style="background: {{ $item['color'] }};">
                        <i class="{{ $item['icon'] }} text-2xl text-white"></i>
                    </div>
                </div>
                <h5 class="font-bold">{{ $item['title'] }}</h5>
                <p class="mt-2 text-ink/70 text-sm">{!! $item['text'] !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How We Think -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Development Philosophy</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">How We Think About Technology</h2>
        </div>
        <div class="flex flex-wrap gap-x-12 gap-y-8 justify-center max-w-3xl mx-auto">
            @foreach ([
                ['title' => 'Business First', 'text' => 'Technology decisions should support clear business objectives.'],
                ['title' => 'User Focused', 'text' => 'Software should be intuitive, accessible and built around the people using it.'],
                ['title' => 'Built to Scale', 'text' => 'Architecture should allow the product to grow without unnecessary complexity.'],
                ['title' => 'Security &amp; Reliability', 'text' => 'Production software must be dependable and responsibly engineered.'],
                ['title' => 'Continuous Improvement', 'text' => 'A product is never truly finished. It should evolve with its users and business.'],
            ] as $item)
            <div class="flex gap-3 w-full sm:w-[calc(50%-1.5rem)]" data-reveal>
                <div class="contact-info-badge-v2 shrink-0"><i class="fas fa-check text-white"></i></div>
                <div>
                    <h5 class="font-bold">{!! $item['title'] !!}</h5>
                    <p class="mt-1 text-ink/70">{{ $item['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How We Work -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Process</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">How We Work</h2>
        </div>
        <div class="flex flex-wrap gap-6 justify-center">
            @foreach ([
                ['icon' => 'fa-search', 'number' => '01', 'title' => 'Understand', 'text' => 'We learn about your business, users and objectives.', 'color' => '#3b82f6'],
                ['icon' => 'fa-clipboard-list', 'number' => '02', 'title' => 'Define', 'text' => 'We turn requirements into a clear product and technical direction.', 'color' => '#06b6d4'],
                ['icon' => 'fa-pencil-ruler', 'number' => '03', 'title' => 'Design', 'text' => 'We create the user experience and product structure.', 'color' => '#f59e0b'],
                ['icon' => 'fa-code', 'number' => '04', 'title' => 'Develop', 'text' => 'We build the software using appropriate technologies and architecture.', 'color' => '#8b5cf6'],
                ['icon' => 'fa-rocket', 'number' => '05', 'title' => 'Launch', 'text' => 'We test, deploy and integrate the product into your operations.', 'color' => '#3b82f6'],
                ['icon' => 'fa-chart-line', 'number' => '06', 'title' => 'Improve', 'text' => 'We continue to optimise and expand the product as requirements evolve.', 'color' => '#06b6d4'],
            ] as $step)
            <div class="what-we-do-card text-center w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] rounded-2xl p-8" style="background: color-mix(in srgb, {{ $step['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-5">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $step['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-16 h-16 rounded-2xl flex items-center justify-center" style="background: {{ $step['color'] }};">
                        <i class="fas {{ $step['icon'] }} text-2xl text-white"></i>
                    </div>
                </div>
                <span class="text-ink/30 font-bold text-sm">{{ $step['number'] }}</span>
                <h5 class="font-bold text-lg mt-1">{{ $step['title'] }}</h5>
                <p class="mt-2 text-ink/70">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Video Area -->
<section class="bg-ink text-white py-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <img src="{{ asset('frontend/images/background/video-bg.jpg') }}" loading="lazy" decoding="async" alt="Noble IT Services" class="rounded-lg w-full">
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <h2 class="text-2xl md:text-3xl font-bold">Engineering Digital Products for the Real World</h2>
                <p class="mt-4 text-white/70">Modern businesses need more than a website. They need systems that connect customers, teams, data and business processes. That's where we come in &mdash; combining product thinking, software engineering and emerging technologies to build digital solutions that are practical, scalable and designed for real-world use.</p>
                <ul class="list-style-four text-white/80 mt-6">
                    <li>Reliable, scalable software delivery.</li>
                    <li>High customer retention rate.</li>
                    <li>We always deliver on time.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Our Principles -->
<section class="bg-accent text-white py-20 relative overflow-hidden">
    <div class="contact-v2-dots" style="top: -20px; right: -20px;" aria-hidden="true"></div>
    <div class="container-nb relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <h2 class="text-3xl md:text-4xl font-bold">Our Principles</h2>
        </div>
        <div class="flex flex-wrap gap-x-12 gap-y-8 justify-center">
            @foreach ([
                ['icon' => 'flaticon-technical-support', 'title' => 'Quality Engineering', 'text' => 'We care about the quality of the software we put into production.'],
                ['icon' => 'flaticon-app-development', 'title' => 'Clear Communication', 'text' => 'Good products come from clear expectations, feedback and collaboration.'],
                ['icon' => 'flaticon-settings', 'title' => 'Practical Innovation', 'text' => 'We use new technology when it creates genuine value.'],
                ['icon' => 'flaticon-optimization', 'title' => 'Ownership', 'text' => 'We take responsibility for the solutions we build and the outcomes they are intended to achieve.'],
                ['icon' => 'flaticon-startup', 'title' => 'Long-Term Thinking', 'text' => 'We build systems that can evolve with the businesses behind them.'],
            ] as $item)
            <div class="flex gap-4 w-full sm:w-[calc(50%-1.5rem)]" data-reveal>
                <div class="w-12 h-12 rounded-full bg-white/15 flex items-center justify-center shrink-0">
                    <i class="{{ $item['icon'] }} text-xl text-white"></i>
                </div>
                <div>
                    <h4 class="font-bold text-lg">{{ $item['title'] }}</h4>
                    <p class="mt-1 text-white/80">{{ $item['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have an Idea Worth Building?</h2>
            <p class="mt-3 text-white/70">Whether you're launching a SaaS product, developing custom business software, modernising an existing platform or exploring how AI can transform your business, we're ready to help. Let's turn your idea into working software.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
