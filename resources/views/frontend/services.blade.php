@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Our <span class="text-accent-cyan">Services</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Our Services</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Service Categories start -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What We Offer</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Our Service Categories</h2>
        </div>
        <div class="flex flex-wrap gap-6">
            @foreach ([
                ['id' => 'custom-software', 'icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Bespoke software built around how your business actually works.', 'links' => [['href' => '/custom-software', 'label' => 'Learn More']]],
                ['id' => 'saas-development', 'icon' => 'flaticon-online', 'title' => 'SaaS Development', 'href' => '/saas-development', 'text' => 'Multi-tenant SaaS platforms, from idea to production.', 'links' => [['href' => '/saas-development', 'label' => 'Learn More']]],
                ['id' => 'ai-integration', 'icon' => 'flaticon-idea', 'title' => 'AI Integration', 'href' => '/ai-integration', 'text' => 'AI chatbots, agents, search and automation built into real products.', 'links' => [['href' => '/ai-integration', 'label' => 'Learn More']]],
                ['id' => 'web-mobile-applications', 'icon' => 'flaticon-app-development', 'title' => 'Web & Mobile Applications', 'href' => null, 'text' => 'Responsive web platforms and native/cross-platform mobile apps.', 'links' => [['href' => '/web-development', 'label' => 'Web Development'], ['href' => '/mobile-apps', 'label' => 'Mobile Apps']]],
                ['id' => 'api-integration', 'icon' => 'flaticon-web-programming', 'title' => 'API & System Integration', 'href' => '/api-integration', 'text' => 'Connecting your product to payments, KYC, messaging and third-party systems.', 'links' => [['href' => '/api-integration', 'label' => 'Learn More']]],
                ['id' => 'ui-ux-design', 'icon' => 'flaticon-user-experience', 'title' => 'UI/UX & Product Design', 'href' => '/ui-ux-design', 'text' => 'Interfaces designed for how a product will actually be used.', 'links' => [['href' => '/ui-ux-design', 'label' => 'Learn More']]],
                ['id' => 'cloud-deployment', 'icon' => 'flaticon-technical-support', 'title' => 'Cloud & Deployment', 'href' => '/cloud-deployment', 'text' => 'Reliable hosting, deployment and infrastructure for production software.', 'links' => [['href' => '/cloud-deployment', 'label' => 'Learn More']]],
                ['id' => 'digital-growth', 'icon' => 'flaticon-seo', 'title' => 'Digital Growth', 'href' => null, 'text' => 'SEO, social and email/SMS marketing for businesses that need it.', 'links' => [['href' => '/seo', 'label' => 'SEO'], ['href' => '/social-media', 'label' => 'Social Media'], ['href' => '/email-marketing', 'label' => 'Email Marketing'], ['href' => '/sms-marketing', 'label' => 'SMS Marketing'], ['href' => '/digital-marketing', 'label' => 'Digital Marketing']]],
            ] as $svc)
            <div id="{{ $svc['id'] }}" class="w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] border border-border-soft rounded-lg p-6" data-reveal>
                <div class="text-3xl text-accent mb-4"><i class="{{ $svc['icon'] }}"></i></div>
                <h5 class="font-bold">@if($svc['href'])<a href="{{ $svc['href'] }}" class="hover:text-accent">{{ $svc['title'] }}</a>@else{{ $svc['title'] }}@endif</h5>
                <p class="mt-2 text-ink/70">{{ $svc['text'] }}</p>
                @foreach ($svc['links'] as $link)
                <a href="{{ $link['href'] }}" class="block mt-2 text-signal-text hover:underline text-sm">{{ $link['label'] }} <i class="fal fa-long-arrow-right"></i></a>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Service Categories end -->

<!-- What We Offer Area start -->
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap justify-between items-center gap-12">
            <div class="w-full lg:w-5/12" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What We Offer</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Software, SaaS &amp; AI Solutions for Modern Businesses</h2>
                <p class="text-ink/70">Over 11 years of experience building custom software, SaaS platforms and AI-powered solutions.</p>
                <a href="/about-us" class="theme-btn mt-6">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="w-full lg:w-5/12" data-reveal>
                <p class="text-ink/70 mb-4">From custom software to SaaS platforms and AI integration, with web/mobile apps, UI/UX and Digital Growth to support the full product lifecycle.</p>
                <ul class="space-y-1 text-ink/70">
                    <li>Custom Software</li>
                    <li>SaaS Development</li>
                    <li>AI Integration</li>
                    <li>Web &amp; Mobile Applications</li>
                    <li>API &amp; System Integration</li>
                    <li>UI/UX &amp; Product Design</li>
                    <li>Cloud &amp; Deployment</li>
                    <li>Digital Growth (SEO, Social, Email/SMS Marketing)</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- What We Offer Area end -->

<!-- Features Area start -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap gap-6 justify-center">
            @foreach ([
                ['icon' => 'flaticon-idea', 'title' => 'Make Strategy', 'text' => 'Define objective brand Plans, keyword research & positioning strategy.'],
                ['icon' => 'flaticon-graphic-design', 'title' => 'Website Design', 'text' => 'We settle on some initial design drafts for website & choose one concept.'],
                ['icon' => 'flaticon-coding-2', 'title' => 'Development', 'text' => 'To make the content, information architecture, visual design all work'],
                ['icon' => 'flaticon-checklist', 'title' => 'Project Testing', 'text' => 'Our team of experts are always available for any updates you may need.'],
                ['icon' => 'flaticon-goal', 'title' => 'Project Lunch', 'text' => 'Sit amet conse adipies elitec eiusmod tempors sncidide sesy labore'],
            ] as $item)
            <div class="w-full sm:w-1/2 md:w-1/5" data-reveal>
                <div class="text-3xl text-accent mb-4"><i class="{{ $item['icon'] }}"></i></div>
                <h5 class="font-bold">{{ $item['title'] }}</h5>
                <p class="mt-2 text-ink/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Features Area end -->

<!-- What We Offer Two Area start -->
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-1/2" data-reveal>
                <img src="{{ asset('frontend/images/about/what-we-offer.png') }}" alt="What We Offer" class="rounded-lg w-full">
            </div>
            <div class="w-full lg:w-[calc(50%-3rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What We Offer</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Web Design & Development</h2>
                <p class="text-ink/70">The easy-to-use, search engine friendly, flexible development platform is currently used on over 35% of all websites. WordPress provides a user friendly content mana gement system (CMS), that allows you to easily make changes on the fly</p>
                <ul class="space-y-1 text-ink/70 mt-4 mb-6">
                    <li>Easy to edit & Search engine friendly</li>
                    <li>Highly customizable</li>
                    <li>Most popular CMS in the world</li>
                </ul>
                <a href="/web-development" class="theme-btn">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- What We Offer Two Area end -->

<!-- Responsive Design Area start -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-3rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">Responsive Design</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Design For Any Device Responsive Web Design</h2>
                <p class="text-ink/70">Responsive web design allows your website to adapt to and provide an optimal experience on any device it's being viewed from. This means that your website will look great and function flawlessly for a user on a desktop computer, laptop, tablet, or smartphone</p>
                <ul class="space-y-1 text-ink/70 mt-4 mb-6">
                    <li>Mobile-friendly</li>
                    <li>Design for every device</li>
                    <li>Positive UX & Helps SEO</li>
                </ul>
                <a href="/web-development" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Learn More <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="w-full lg:w-1/2" data-reveal>
                <img src="{{ asset('frontend/images/about/statistics-five.png') }}" alt="Responsive Design" class="rounded-lg w-full">
            </div>
        </div>
    </div>
</section>
<!-- Responsive Design Area end -->

<!-- CTA Two Area start -->
<section class="bg-accent bg-cover text-white py-16 relative" style="background-image: url({{ asset('frontend/images/background/cta-two.png') }})">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-5/12" data-reveal>
                <img src="{{ asset('frontend/images/about/cta.png') }}" alt="CTA" class="rounded-lg w-full">
            </div>
            <div class="w-full lg:w-[calc(50%-2rem)]" data-reveal>
                <h2 class="text-2xl md:text-3xl font-bold mb-5">Very Much 91.50% Increase in Organic Traffic</h2>
                <p class="text-white/80">Boya Apartment shortlet services started with wanting a new website. After working with our team, they've now expanded their strategy with us into several facets of digital marketing and have seen optimal growth.</p>
                <a href="/contact-us" class="theme-btn mt-6" style="background:#fff;color:var(--color-accent);">Create Your Website <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Two Area end -->

<!-- Support & Marketing Area start -->
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap justify-between items-center gap-12">
            <div class="w-full lg:w-1/2" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">Support &amp; Marketing</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Marketing to Support Your Web Design</h2>
                <p class="text-ink/70 mb-8">Fortunately, we aren't just designers and developers here&mdash;we are writers, strategists, techs and creatives, all working towards the same end goal: our client's success. As a full-service digital marketing agency</p>
                <div class="flex flex-wrap gap-8">
                    <div class="text-center">
                        <div class="circle-progress-v2" data-percent="89" data-color="#3180fc" data-empty-color="#eaf2ff">
                            <div class="circle-progress-v2__value">0%</div>
                        </div>
                        <h5 class="mt-3 font-semibold">SEO Service</h5>
                    </div>
                    <div class="text-center">
                        <div class="circle-progress-v2" data-percent="76" data-color="#f1b000" data-empty-color="#fdf3d9">
                            <div class="circle-progress-v2__value">0%</div>
                        </div>
                        <h5 class="mt-3 font-semibold">Copywriting</h5>
                    </div>
                    <div class="text-center">
                        <div class="circle-progress-v2" data-percent="63" data-color="#16b4f2" data-empty-color="#e7f7fe">
                            <div class="circle-progress-v2__value">0%</div>
                        </div>
                        <h5 class="mt-3 font-semibold">PPC</h5>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2" data-reveal>
                <ul class="space-y-6">
                    <li>
                        <h5 class="font-bold">SEO Services</h5>
                        <p class="text-ink/70">If you're looking to command market your online you need comprehensive SEO strategy</p>
                    </li>
                    <li>
                        <h5 class="font-bold">Copywriting</h5>
                        <p class="text-ink/70">Amplify your brand and control the conversation with a strategic content marketing strategy</p>
                    </li>
                    <li>
                        <h5 class="font-bold">Pay per click</h5>
                        <p class="text-ink/70">PPC management is all about delivering the right ad to your future customers at the exact</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Support & Marketing Area end -->

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Let's Design Your New Website</h2>
            <p class="mt-3 text-white/70">Do you want to have a website that stands out and impresses your clients? Then we are ready to help! Click the button below to contact us and discuss your ideas.</p>
        </div>
        <a href="/contact-us" class="theme-btn" style="background:transparent;border:1px solid #fff;">Let's Get Started <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
