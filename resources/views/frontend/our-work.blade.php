@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Our <span class="text-accent-cyan">Work</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Our Work</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Products &amp; Client Work</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Software We've Built and Operated</h2>
            <p class="mt-5 text-ink/70">The clearest proof of what we can build for you is what we've already built for ourselves and for our clients &mdash; real products, in real use, solving real problems.</p>
        </div>
    </div>
</section>

<!-- Products We Build & Maintain (primary) -->
<section class="pb-12 bg-ink py-16">
    <div class="container-nb">
        <div class="mb-10" data-reveal>
            <span class="text-accent-cyan uppercase text-sm font-semibold">Products We Build &amp; Maintain</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3 text-white">Software We've Built, Launched and Continue to Support</h3>
        </div>

        <div class="flex flex-col gap-6">
            {{-- BotWave --}}
            <div id="botwave" class="case-study-item on-dark" data-reveal>
                <div class="max-w-3xl">
                    <span class="status-pill is-live">Live &mdash; Free Trial</span>
                    <h4 class="text-xl font-bold mt-2">BotWave</h4>
                    <p class="mb-4 text-white/70">AI-powered customer support bots for WhatsApp, Telegram and websites</p>
                    <dl class="case-study-facts">
                        <dt>Product type</dt>
                        <dd>SaaS &mdash; AI customer support platform</dd>
                        <dt>Challenge</dt>
                        <dd>Businesses field customer questions across WhatsApp, Telegram and their website with no unified, affordable way to automate first-line responses.</dd>
                        <dt>Solution</dt>
                        <dd>A Nigerian SaaS platform that deploys AI-powered support bots across all three channels from one dashboard, priced in Naira and positioned against tools like Wati, Intercom, Chatbase and Respond.io.</dd>
                        <dt>Key features</dt>
                        <dd>
                            <ul class="list-style-four">
                                <li>Multi-channel bot deployment (WhatsApp, Telegram, website)</li>
                                <li>Naira-priced, three-tier subscription plans</li>
                                <li>Free trial for new customers</li>
                                <li>Conversation handoff to human agents</li>
                            </ul>
                        </dd>
                        <dt>Technology &amp; AI</dt>
                        <dd>AI/LLM-powered conversation engine, WhatsApp Business &amp; Telegram integrations</dd>
                        <dt>Integrations</dt>
                        <dd>WhatsApp Business API, Telegram, website chat widget</dd>
                        <dt>Status / outcome</dt>
                        <dd>Live at <a href="https://botwave.ng" target="_blank" rel="noopener" class="text-accent-cyan hover:underline">botwave.ng</a> &mdash; onboarding new customers into the free trial.</dd>
                    </dl>
                    <a href="https://botwave.ng" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:var(--color-accent-cyan);">Visit BotWave.ng <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            {{-- VerifyMe+ --}}
            <div id="verifyme-plus" class="case-study-item on-dark" data-reveal>
                <div class="max-w-3xl">
                    <span class="status-pill is-live">Live / Evolving</span>
                    <h4 class="text-xl font-bold mt-2">VerifyMe+</h4>
                    <p class="mb-4 text-white/70">AI-assisted scam-reporting platform for Nigeria</p>
                    <dl class="case-study-facts">
                        <dt>Product type</dt>
                        <dd>SaaS &mdash; AI-assisted trust &amp; safety platform</dd>
                        <dt>Challenge</dt>
                        <dd>Nigerians need a fast, credible way to report and check scams, with reports that get analysed rather than sitting unread.</dd>
                        <dt>Solution</dt>
                        <dd>A scam-reporting platform where an AI microservice analyses submitted reports, currently being explored as an extension into a verified artisan/vocational marketplace.</dd>
                        <dt>Key features</dt>
                        <dd>
                            <ul class="list-style-four">
                                <li>AI-assisted report analysis</li>
                                <li>Scam lookup/reporting workflow</li>
                                <li>Roadmap: verified artisan/vocational marketplace</li>
                            </ul>
                        </dd>
                        <dt>Technology &amp; AI</dt>
                        <dd>Laravel front end, FastAPI AI microservice for report analysis</dd>
                        <dt>Integrations</dt>
                        <dd>FastAPI AI microservice</dd>
                        <dt>Status / outcome</dt>
                        <dd>Live, with real users using the service &mdash; the artisan/vocational marketplace extension is in exploration.</dd>
                    </dl>
                    <a href="https://verifymeplus.ng" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:var(--color-accent-cyan);">Visit VerifyMePlus.ng <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            {{-- ScanOriginal --}}
            <div id="scanoriginal" class="case-study-item on-dark" data-reveal>
                <div class="max-w-3xl">
                    <span class="status-pill is-active">Active MVP Development</span>
                    <h4 class="text-xl font-bold mt-2">ScanOriginal</h4>
                    <p class="mb-4 text-white/70">Anti-counterfeit product verification PWA</p>
                    <dl class="case-study-facts">
                        <dt>Product type</dt>
                        <dd>Progressive Web App &mdash; product verification &amp; anti-counterfeit</dd>
                        <dt>Challenge</dt>
                        <dd>Buyers need a fast way to verify a product is genuine, including in low-connectivity conditions and without a smartphone app install.</dd>
                        <dt>Solution</dt>
                        <dd>A PWA that lets users verify products, launching lean with manually seeded NAFDAC product records and USSD access for feature-phone users.</dd>
                        <dt>Key features</dt>
                        <dd>
                            <ul class="list-style-four">
                                <li>Product verification via PWA and USSD</li>
                                <li>Filament-powered admin for product records</li>
                                <li>KYC-verified sellers/reporters</li>
                                <li>Manually seeded NAFDAC product data at launch</li>
                            </ul>
                        </dd>
                        <dt>Technology &amp; AI</dt>
                        <dd>Laravel 12, Alpine.js front end, FastAPI AI microservice, Filament admin</dd>
                        <dt>Integrations</dt>
                        <dd>Africa's Talking USSD, Dojah KYC, Paystack</dd>
                        <dt>Status / outcome</dt>
                        <dd>Active MVP development &mdash; live at <a href="https://scanoriginal.ng" target="_blank" rel="noopener" class="text-accent-cyan hover:underline">scanoriginal.ng</a>.</dd>
                    </dl>
                    <a href="https://scanoriginal.ng" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:var(--color-accent-cyan);">Visit ScanOriginal.ng <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            {{-- CleanPilot --}}
            <div id="cleanpilot" class="case-study-item on-dark" data-reveal>
                <div class="max-w-3xl">
                    <span class="status-pill is-live">Live</span>
                    <h4 class="text-xl font-bold mt-2">CleanPilot</h4>
                    <p class="mb-4 text-white/70">The operating system for running a UK cleaning business</p>
                    <dl class="case-study-facts">
                        <dt>Product type</dt>
                        <dd>SaaS &mdash; vertical operations platform for UK cleaning businesses</dd>
                        <dt>Challenge</dt>
                        <dd>UK cleaning businesses juggle payments, accounting sync, Airbnb turnover scheduling and compliance across disconnected tools.</dd>
                        <dt>Solution</dt>
                        <dd>A single SaaS operating system covering payments, accounting sync, Airbnb turnover automation and UK compliance, priced for businesses of different sizes.</dd>
                        <dt>Key features</dt>
                        <dd>
                            <ul class="list-style-four">
                                <li>GoCardless Direct Debit billing</li>
                                <li>Xero / Sage accounting sync</li>
                                <li>Airbnb turnover automation</li>
                                <li>UK compliance features</li>
                            </ul>
                        </dd>
                        <dt>Technology &amp; AI</dt>
                        <dd>SaaS platform with GoCardless, Xero/Sage integrations</dd>
                        <dt>Integrations</dt>
                        <dd>GoCardless, Xero, Sage, Airbnb</dd>
                        <dt>Status / outcome</dt>
                        <dd>Live at <a href="https://cleanpilot.uk" target="_blank" rel="noopener" class="text-accent-cyan hover:underline">cleanpilot.uk</a> &mdash; tiered pricing from &pound;19&ndash;&pound;149/month.</dd>
                    </dl>
                    <a href="https://cleanpilot.uk" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:var(--color-accent-cyan);">Visit CleanPilot.uk <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            {{-- Marketplace Group --}}
            <div id="marketplace-group" class="case-study-item on-dark" data-reveal>
                <div class="flex flex-wrap gap-8 items-center">
                    <div class="max-w-3xl flex-1 min-w-[280px]">
                        <span class="status-pill is-live">Live in Nigeria &amp; Ghana &mdash; Expanding</span>
                        <h4 class="text-xl font-bold mt-2">Marketplace Group</h4>
                        <p class="mb-4 text-white/70">Network of country-specific classifieds platforms</p>
                        <dl class="case-study-facts">
                            <dt>Product type</dt>
                            <dd>SaaS &mdash; multi-tenant classifieds network</dd>
                            <dt>Challenge</dt>
                            <dd>Launching a classifieds platform in a new country usually means rebuilding infrastructure from scratch for each market.</dd>
                            <dt>Solution</dt>
                            <dd>A shared multi-tenant codebase with per-country databases, letting each country platform run independently while sharing one engineering base.</dd>
                            <dt>Key features</dt>
                            <dd>
                                <ul class="list-style-four">
                                    <li>Multi-tenant, per-country database architecture</li>
                                    <li>Live in Nigeria (marketplace.ng) and Ghana (marketplace.com.gh)</li>
                                    <li>Ethiopia and Uganda in development</li>
                                </ul>
                            </dd>
                            <dt>Technology</dt>
                            <dd>Shared multi-tenant Laravel codebase, per-country databases</dd>
                            <dt>Outcome</dt>
                            <dd>&ldquo;The team delivered a website that perfectly reflects our brand and makes it easy for clients to connect with us. From start to finish, the process was smooth and professional.&rdquo; &mdash; Jerry, Director, Marketplace Naija</dd>
                        </dl>
                        <a href="https://www.marketplace.ng/" target="_blank" rel="noopener" class="theme-btn mt-6" style="background:var(--color-accent-cyan);">Visit Marketplace.ng <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <img src="{{ asset('frontend/images/portfolio/marketplace.jpg') }}" loading="lazy" decoding="async" alt="Marketplace Group" class="rounded-lg w-full sm:w-64">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Work (secondary) -->
<section class="py-20">
    <div class="container-nb">
        <div class="mb-10" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Client Work</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Platforms We've Delivered for Clients</h3>
        </div>

        <div class="flex flex-col gap-6">
            {{-- JJ Homes London --}}
            <div id="jj-homes-london" class="case-study-item" data-reveal>
                <div class="flex flex-wrap gap-8 items-center">
                    <div class="max-w-3xl flex-1 min-w-[280px]">
                        <h4 class="text-xl font-bold">JJ Homes London</h4>
                        <p class="mb-4 text-ink/70">Property / real estate web platform &mdash; Client: JJ Homes Management</p>
                        <dl class="case-study-facts">
                            <dt>Challenge</dt>
                            <dd>JJ Homes needed a digital presence that made it easy for clients to learn about their property services and get in touch.</dd>
                            <dt>Solution</dt>
                            <dd>A property/real estate web platform built and supported end-to-end for JJ Homes Management.</dd>
                            <dt>Technology</dt>
                            <dd>Web Software</dd>
                            <dt>Outcome</dt>
                            <dd>&ldquo;Professional, creative, and highly responsive. Our new site has made it much easier for clients to learn about our services and get in touch. Highly recommended.&rdquo; &mdash; Joel Hong, CEO, JJ Homes Management</dd>
                        </dl>
                        <a href="/start-a-project" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Build Something Similar <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <img src="{{ asset('frontend/images/portfolio/jjhomes.jpg') }}" loading="lazy" decoding="async" alt="JJ Homes London" class="rounded-lg w-full sm:w-64">
                </div>
            </div>

            {{-- Oraclefilms TV --}}
            <div id="oraclefilms-tv" class="case-study-item" data-reveal>
                <div class="flex flex-wrap gap-8 items-center">
                    <div class="max-w-3xl flex-1 min-w-[280px]">
                        <h4 class="text-xl font-bold">Oraclefilms TV</h4>
                        <p class="mb-4 text-ink/70">Media / entertainment platform &mdash; Client: Oraclefilms TV</p>
                        <dl class="case-study-facts">
                            <dt>Challenge</dt>
                            <dd>Oraclefilms needed a media platform that could be understood and turned into a working product quickly.</dd>
                            <dt>Solution</dt>
                            <dd>A media/entertainment web platform built for Oraclefilms TV.</dd>
                            <dt>Technology</dt>
                            <dd>Web Software</dd>
                            <dt>Outcome</dt>
                            <dd>&ldquo;I was impressed by how quickly they understood our needs and turned them into a beautiful, functional website. We've already seen an increase in inquiries from new customers.&rdquo; &mdash; Mr Okey, Founder, Oraclefilms TV</dd>
                        </dl>
                        <a href="/start-a-project" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Build Something Similar <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <img src="{{ asset('frontend/images/portfolio/oracletv.jpg') }}" loading="lazy" decoding="async" alt="Oraclefilms TV" class="rounded-lg w-full sm:w-64">
                </div>
            </div>

            {{-- QuickErrands --}}
            <div id="quickerrands" class="case-study-item" data-reveal>
                <div class="max-w-3xl">
                    <h4 class="text-xl font-bold">QuickErrands</h4>
                    <p class="mb-4 text-ink/70">On-demand services booking platform (Laravel) &mdash; Client: Quick Errands</p>
                    <dl class="case-study-facts">
                        <dt>Challenge</dt>
                        <dd>Quick Errands needed a booking platform that could take on-demand service requests and present a modern, client-friendly brand.</dd>
                        <dt>Solution</dt>
                        <dd>An on-demand services booking platform built on Laravel.</dd>
                        <dt>Technology</dt>
                        <dd>Laravel</dd>
                        <dt>Outcome</dt>
                        <dd>&ldquo;Their expertise transformed our outdated website into a modern, client-friendly platform. We've received so many compliments from partners and customers alike.&rdquo; &mdash; Collins, Director, Quick Errands</dd>
                    </dl>
                    <a href="/start-a-project" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Build Something Similar <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            {{-- Furnished Apartments --}}
            <div id="furnished-apartments" class="case-study-item" data-reveal>
                <div class="flex flex-wrap gap-8 items-center">
                    <div class="max-w-3xl flex-1 min-w-[280px]">
                        <h4 class="text-xl font-bold">Furnished Apartments</h4>
                        <p class="mb-4 text-ink/70">Website design &mdash; Client: Furnished Apartments (Washgate)</p>
                        <dl class="case-study-facts">
                            <dt>Challenge</dt>
                            <dd>The client needed a digital platform, not just a brochure website, to support ongoing growth.</dd>
                            <dt>Solution</dt>
                            <dd>A website design and build with ongoing support.</dd>
                            <dt>Technology</dt>
                            <dd>Website Design</dd>
                            <dt>Outcome</dt>
                            <dd>&ldquo;They didn't just design a website&mdash;they built a digital platform that supports our growth. The attention to detail and ongoing support have been outstanding.&rdquo; &mdash; Miriam, Manager, Furnished Apartments</dd>
                        </dl>
                        <a href="/start-a-project" class="theme-btn mt-6" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Build Something Similar <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <img src="{{ asset('frontend/images/portfolio/washgate.jpg') }}" loading="lazy" decoding="async" alt="Furnished Apartments" class="rounded-lg w-full sm:w-64">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Build -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What We Build</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">From Business Idea to Working Product</h2>
            <p class="mt-5 text-ink/70">Every project is different. Our role is to understand the problem, design the right solution and build technology that can grow with the business.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Purpose-built applications designed around your unique business processes, workflows and requirements.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-online', 'title' => 'SaaS Platforms', 'href' => '/saas-development', 'text' => 'Scalable subscription-based software products designed for businesses, startups and entrepreneurs.', 'color' => '#06b6d4'],
                ['icon' => 'flaticon-idea', 'title' => 'AI-Powered Solutions', 'href' => '/ai-integration', 'text' => 'Practical AI integrations that automate tasks, improve customer experiences and make business software more intelligent.', 'color' => '#f59e0b'],
                ['icon' => 'flaticon-app-development', 'title' => 'Web &amp; Mobile Applications', 'href' => '/web-development', 'text' => 'Modern, responsive applications designed around usability, performance and real-world users.', 'color' => '#8b5cf6'],
                ['icon' => 'flaticon-web-programming', 'title' => 'API &amp; System Integration', 'href' => '/api-integration', 'text' => 'Connect your software with payment providers, communication platforms, accounting systems, CRMs and other third-party services.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-settings', 'title' => 'Business Automation', 'href' => '/services', 'text' => 'Replace repetitive manual processes with intelligent workflows that save time and improve operational efficiency.', 'color' => '#06b6d4'],
            ] as $item)
            <div class="what-we-do-card w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1.4rem)] rounded-2xl p-8" style="background: color-mix(in srgb, {{ $item['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-5">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $item['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-16 h-16 rounded-2xl flex items-center justify-center" style="background: {{ $item['color'] }};">
                        <i class="{{ $item['icon'] }} text-3xl text-white"></i>
                    </div>
                </div>
                <h5 class="font-bold text-lg"><a href="{{ $item['href'] }}" class="hover:opacity-70">{!! $item['title'] !!}</a></h5>
                <p class="mt-2 text-ink/70">{!! $item['text'] !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Our Approach</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">We Build for the Long Term</h2>
            <p class="mt-5 text-ink/70">A successful software product is more than a launch. We work with our clients through the entire product lifecycle &mdash; from understanding the initial idea and designing the solution to development, deployment, integration and continuous improvement.</p>
        </div>
        <div class="flex flex-wrap gap-6 justify-center">
            @foreach ([
                ['icon' => 'fa-search', 'number' => '01', 'title' => 'Discover', 'text' => "We understand your business, users, objectives and the problem you're trying to solve.", 'color' => '#3b82f6'],
                ['icon' => 'fa-pencil-ruler', 'number' => '02', 'title' => 'Design', 'text' => 'We translate the requirements into a clear product structure and user experience.', 'color' => '#06b6d4'],
                ['icon' => 'fa-code', 'number' => '03', 'title' => 'Build', 'text' => 'Our development team turns the solution into reliable, scalable software.', 'color' => '#f59e0b'],
                ['icon' => 'fa-rocket', 'number' => '04', 'title' => 'Launch', 'text' => 'We deploy, integrate and prepare the product for real-world use.', 'color' => '#8b5cf6'],
                ['icon' => 'fa-chart-line', 'number' => '05', 'title' => 'Improve', 'text' => 'We continue to refine the product as your business, users and requirements evolve.', 'color' => '#3b82f6'],
            ] as $step)
            <div class="what-we-do-card text-center w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(20%-1.2rem)] rounded-2xl p-6" style="background: color-mix(in srgb, {{ $step['color'] }} 8%, white);" data-reveal>
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

<!-- Why Our Work Matters -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Why Our Work Matters</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">We Don't Just Deliver Software. We Build Products.</h2>
            <p class="mt-5 text-ink/70">Our experience spans different industries, business models and markets. This gives us a practical understanding of what it takes to move from an idea to a functioning digital product.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['icon' => 'flaticon-trophy', 'title' => 'Real Products', 'text' => 'We build and operate our own software products, giving us first-hand experience beyond client projects.', 'color' => '#3b82f6'],
                ['icon' => 'flaticon-target', 'title' => 'Business-Focused', 'text' => 'We focus on solving the underlying business problem, not simply delivering a list of technical features.', 'color' => '#06b6d4'],
                ['icon' => 'flaticon-global', 'title' => 'Built to Scale', 'text' => 'Our platforms are designed with future growth, integrations and changing requirements in mind.', 'color' => '#f59e0b'],
                ['icon' => 'flaticon-idea', 'title' => 'AI-Ready', 'text' => 'We integrate AI where it creates meaningful value &mdash; from automation and intelligent analysis to customer interaction.', 'color' => '#8b5cf6'],
                ['icon' => 'flaticon-checklist', 'title' => 'End-to-End', 'text' => 'From product strategy and UI/UX to development, deployment and ongoing improvements, we can support the complete lifecycle.', 'color' => '#22c55e'],
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

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have a Software Idea? Let's Turn It Into a Product.</h2>
            <p class="mt-3 text-white/70">Whether you're launching a SaaS startup, replacing manual business processes, modernising an existing platform or exploring how AI can improve your business, we're ready to help.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
            <a href="/services" class="theme-btn">Explore Our Services <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
