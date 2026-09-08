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
                ['id' => 'custom-software', 'icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Bespoke software built around how your business actually works.', 'color' => '#3b82f6', 'links' => [['href' => '/custom-software', 'label' => 'Learn More']]],
                ['id' => 'saas-development', 'icon' => 'flaticon-online', 'title' => 'SaaS Development', 'href' => '/saas-development', 'text' => 'Multi-tenant SaaS platforms, from idea to production.', 'color' => '#06b6d4', 'links' => [['href' => '/saas-development', 'label' => 'Learn More']]],
                ['id' => 'ai-integration', 'icon' => 'flaticon-idea', 'title' => 'AI Integration', 'href' => '/ai-integration', 'text' => 'AI chatbots, agents, search and automation built into real products.', 'color' => '#f59e0b', 'links' => [['href' => '/ai-integration', 'label' => 'Learn More']]],
                ['id' => 'web-mobile-applications', 'icon' => 'flaticon-app-development', 'title' => 'Web & Mobile Applications', 'href' => null, 'text' => 'Responsive web platforms and native/cross-platform mobile apps.', 'color' => '#8b5cf6', 'links' => [['href' => '/web-development', 'label' => 'Web Development'], ['href' => '/mobile-apps', 'label' => 'Mobile Apps']]],
                ['id' => 'api-integration', 'icon' => 'flaticon-web-programming', 'title' => 'API & System Integration', 'href' => '/api-integration', 'text' => 'Connecting your product to payments, KYC, messaging and third-party systems.', 'color' => '#3b82f6', 'links' => [['href' => '/api-integration', 'label' => 'Learn More']]],
                ['id' => 'ui-ux-design', 'icon' => 'flaticon-user-experience', 'title' => 'UI/UX & Product Design', 'href' => '/ui-ux-design', 'text' => 'Interfaces designed for how a product will actually be used.', 'color' => '#ec4899', 'links' => [['href' => '/ui-ux-design', 'label' => 'Learn More']]],
                ['id' => 'cloud-deployment', 'icon' => 'flaticon-technical-support', 'title' => 'Cloud & Deployment', 'href' => '/cloud-deployment', 'text' => 'Reliable hosting, deployment and infrastructure for production software.', 'color' => '#06b6d4', 'links' => [['href' => '/cloud-deployment', 'label' => 'Learn More']]],
                ['id' => 'digital-growth', 'icon' => 'flaticon-seo', 'title' => 'Digital Growth', 'href' => null, 'text' => 'SEO, social and email/SMS marketing for businesses that need it.', 'color' => '#22c55e', 'links' => [['href' => '/seo', 'label' => 'SEO'], ['href' => '/social-media', 'label' => 'Social Media'], ['href' => '/email-marketing', 'label' => 'Email Marketing'], ['href' => '/sms-marketing', 'label' => 'SMS Marketing'], ['href' => '/digital-marketing', 'label' => 'Digital Marketing']]],
            ] as $svc)
            <div id="{{ $svc['id'] }}" class="what-we-do-card w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(25%-1.125rem)] rounded-2xl p-6" style="background: color-mix(in srgb, {{ $svc['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-4">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $svc['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-14 h-14 rounded-2xl flex items-center justify-center" style="background: {{ $svc['color'] }};">
                        <i class="{{ $svc['icon'] }} text-2xl text-white"></i>
                    </div>
                </div>
                <h5 class="font-bold">@if($svc['href'])<a href="{{ $svc['href'] }}" class="hover:opacity-70">{{ $svc['title'] }}</a>@else{{ $svc['title'] }}@endif</h5>
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
                <ul class="list-style-four text-ink/70">
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
                ['icon' => 'flaticon-idea', 'title' => 'Make Strategy', 'text' => 'Define clear objectives, research your market and shape a strategy for the build ahead.', 'color' => '#3180fc'],
                ['icon' => 'flaticon-graphic-design', 'title' => 'Website Design', 'text' => 'We settle on some initial design drafts for website & choose one concept.', 'color' => '#16b4f2'],
                ['icon' => 'flaticon-coding-2', 'title' => 'Development', 'text' => 'We bring the content, information architecture and visual design together into a working product.', 'color' => '#f1b000'],
                ['icon' => 'flaticon-checklist', 'title' => 'Project Testing', 'text' => 'Our team of experts are always available for any updates you may need.', 'color' => '#8400ff'],
                ['icon' => 'flaticon-goal', 'title' => 'Project Launch', 'text' => 'We launch, monitor and stay on hand for the improvements that follow.', 'color' => '#ff7506'],
            ] as $item)
            <div class="what-we-do-card text-center w-full sm:w-1/2 md:w-1/5 rounded-2xl p-6" style="background: color-mix(in srgb, {{ $item['color'] }} 8%, white);" data-reveal>
                <div class="relative inline-flex mb-4">
                    <div class="absolute -inset-3 rounded-full blur-xl opacity-50" style="background: {{ $item['color'] }};" aria-hidden="true"></div>
                    <div class="relative w-14 h-14 rounded-2xl flex items-center justify-center mx-auto" style="background: {{ $item['color'] }};">
                        <i class="{{ $item['icon'] }} text-2xl text-white"></i>
                    </div>
                </div>
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
                <p class="text-ink/70">We design and build fast, secure websites and web platforms tailored to how your business actually works &mdash; from marketing sites to full web applications &mdash; rather than squeezing you into a one-size-fits-all template.</p>
                <ul class="list-style-four text-ink/70 mt-4 mb-6">
                    <li>Built around your workflow, not a template</li>
                    <li>SEO-friendly from the ground up</li>
                    <li>Easy for your team to manage and update</li>
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
                <ul class="list-style-four text-ink/70 mt-4 mb-6">
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
                <h2 class="text-2xl md:text-3xl font-bold mb-5">Ready to Bring Your Project to Life?</h2>
                <p class="text-white/80">With over 11 years building custom software, SaaS platforms and AI-powered solutions, we help you move from idea to a real, working product &mdash; with a scope and timeline you can trust.</p>
                <a href="/start-a-project" class="theme-btn mt-6" style="background:#fff;color:var(--color-accent);">Start a Project <i class="fas fa-angle-double-right"></i></a>
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
                <span class="text-accent uppercase text-sm font-semibold">Digital Growth</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Marketing to Support Your Software</h2>
                <p class="text-ink/70 mb-8">Alongside software and product development, our Digital Growth service helps you get in front of the right audience &mdash; SEO, social media and email/SMS marketing built to support the products we build for you.</p>
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
            <h2 class="text-2xl md:text-3xl font-bold">Have a Project in Mind?</h2>
            <p class="mt-3 text-white/70">Whether it's a new website, a custom platform or a full product build, we're ready to help. Tell us about your project and get a tailored response within 24 hours.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
