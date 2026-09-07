@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')
@include('frontend.layouts.slider-v2')

<!-- Trust & Credibility Bar start -->
<section class="py-16 bg-surface-alt">
    <div class="container-nb">
        <div class="flex flex-wrap justify-center gap-8 text-center">
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-startup text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">11+ Years in Software Development</h5>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-online text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">Products Built &amp; Operated</h5>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-target text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">Business-Focused Engineering</h5>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4" data-reveal>
                <i class="flaticon-global text-3xl text-accent"></i>
                <h5 class="mt-4 font-semibold">Nigeria &middot; UK &middot; International</h5>
            </div>
        </div>
    </div>
</section>
<!-- Trust & Credibility Bar end -->

<!-- What We Do start -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What We Do</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Technology Built Around Your Business</h2>
            <p class="mt-5 text-ink/70">We help businesses, entrepreneurs and organisations design, build and evolve digital products. Whether you are starting from an idea, replacing an outdated system or adding AI to an existing platform, we provide the technology and engineering expertise to take it from concept to production.</p>
        </div>
        <div class="flex flex-wrap gap-8 justify-center">
            @foreach ([
                ['icon' => 'flaticon-coding-2', 'title' => 'Custom Software', 'href' => '/custom-software', 'text' => 'Purpose-built applications around business processes and workflows.'],
                ['icon' => 'flaticon-online', 'title' => 'SaaS Platforms', 'href' => '/saas-development', 'text' => 'Scalable subscription products designed to launch, grow and evolve.'],
                ['icon' => 'flaticon-idea', 'title' => 'AI Integration', 'href' => '/ai-integration', 'text' => 'Practical AI that improves products, automates workflows and enhances customer experiences.'],
                ['icon' => 'flaticon-app-development', 'title' => 'Web & Mobile Applications', 'href' => '/web-development', 'text' => 'Modern applications designed for performance and usability.'],
                ['icon' => 'flaticon-web-programming', 'title' => 'API & System Integration', 'href' => '/api-integration', 'text' => 'Connect payments, communication platforms, CRMs, accounting systems and other services.'],
                ['icon' => 'flaticon-technical-support', 'title' => 'Cloud & Deployment', 'href' => '/cloud-deployment', 'text' => 'Reliable production infrastructure and deployment.'],
            ] as $item)
            <div class="w-full sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.4rem)] border border-border-soft rounded-lg p-8" data-reveal>
                <div class="text-3xl text-accent mb-4"><i class="{{ $item['icon'] }}"></i></div>
                <h5 class="font-bold text-lg"><a href="{{ $item['href'] }}" class="hover:text-accent">{{ $item['title'] }}</a></h5>
                <p class="mt-2 text-ink/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- What We Do end -->

<!-- SaaS Pitch Block start -->
<section class="py-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center justify-between gap-12">
            <div class="w-full lg:w-5/12" data-reveal>
                <img src="{{ asset('frontend/images/about/about-us.jpg') }}" width="450" height="666" loading="lazy" decoding="async" class="rounded-lg w-full" alt="Have a SaaS idea? We can build it">
            </div>
            <div class="w-full lg:w-1/2" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">SaaS Development</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3">Have a SaaS Idea? Let's Build It.</h2>
                <p class="mt-5 text-ink/70">From an early concept to a production-ready SaaS platform, we handle the technology required to turn your idea into a real product. We can help with product architecture, user experience, development, payments, integrations, AI capabilities, deployment and ongoing improvement.</p>
                <div class="flex flex-wrap gap-x-12 gap-y-2 mt-6">
                    <ul class="space-y-1 text-ink/70">
                        <li>Product planning</li>
                        <li>UI/UX</li>
                        <li>Architecture</li>
                        <li>Backend/frontend development</li>
                        <li>Authentication</li>
                    </ul>
                    <ul class="space-y-1 text-ink/70">
                        <li>Subscription billing</li>
                        <li>Admin dashboards</li>
                        <li>APIs</li>
                        <li>Third-party integrations</li>
                        <li>Deployment</li>
                    </ul>
                </div>
                <p class="font-bold mt-6 mb-2">Recent SaaS Products</p>
                <ul class="space-y-1 text-ink/70 mb-6">
                    <li><a href="/products#botwave" class="text-signal-text hover:underline">BotWave</a> &mdash; AI-powered customer support</li>
                    <li><a href="/products#cleanpilot" class="text-signal-text hover:underline">CleanPilot</a> &mdash; Business operating platform for cleaning companies</li>
                    <li><a href="/our-work#marketplace-group" class="text-signal-text hover:underline">Marketplace Group</a> &mdash; Multi-country marketplace infrastructure</li>
                </ul>
                <div class="flex flex-wrap gap-4">
                    <a href="/start-a-project" class="theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>
                    <a href="/saas-development" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Explore Our SaaS Work <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SaaS Pitch Block end -->

<!-- AI Pitch Block start -->
<section class="pt-130 pb-100 text-white bgc-black-with-lighting rel z-1">
    <div class="container">
        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-10">AI Solutions</span>
            <h2>AI That Solves Real Problems</h2>
            <p class="mt-20">AI is most valuable when it improves the way a business operates. We integrate AI into software products, workflows and customer experiences &mdash; from intelligent assistants and automated processes to document analysis, AI search and LLM-powered applications, as built into BotWave, VerifyMe+ and ScanOriginal.</p>
            <a href="/ai-integration" class="theme-btn style-two mt-15">Explore AI Solutions <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 justify-content-center">
            <div class="col">
                <div class="feature-item-seven mt-30 wow fadeInUp delay-0-2s">
                    <div class="icon"><i class="flaticon-technical-support"></i></div>
                    <h5>AI Assistants</h5>
                    <p>Intelligent conversational experiences for websites, applications and messaging platforms.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-two mt-30 wow fadeInUp delay-0-3s">
                    <div class="icon"><i class="flaticon-settings"></i></div>
                    <h5>AI Agents</h5>
                    <p>Automated systems capable of handling defined business tasks and workflows.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-three mt-30 wow fadeInUp delay-0-4s">
                    <div class="icon"><i class="flaticon-search-location"></i></div>
                    <h5>AI Search</h5>
                    <p>Smarter search and information retrieval powered by AI.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-four mt-30 wow fadeInUp delay-0-2s">
                    <div class="icon"><i class="flaticon-checklist"></i></div>
                    <h5>Document Intelligence</h5>
                    <p>Extract, analyse and understand information from business documents.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven mt-30 wow fadeInUp delay-0-3s">
                    <div class="icon"><i class="flaticon-optimization"></i></div>
                    <h5>AI Automation</h5>
                    <p>Reduce repetitive work by connecting AI to business processes.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-two mt-30 wow fadeInUp delay-0-4s">
                    <div class="icon"><i class="flaticon-web-programming"></i></div>
                    <h5>LLM Integration</h5>
                    <p>Integrate modern language models where they create genuine business value.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AI Pitch Block end -->

<!-- Products We've Built start -->
<hr class="scan-divider" aria-hidden="true">
<section class="pt-130 pb-60 rel z-1">
    <div class="container">
        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-10">Proof, Not Promises</span>
            <h2>Products We've Built</h2>
            <p class="mt-20">We build and operate our own digital products, giving us first-hand experience taking software from concept through development, deployment and continuous improvement.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <a href="/products#botwave" class="product-card d-block text-decoration-none wow fadeInUp delay-0-2s">
                    <span class="status-pill is-live">Live &mdash; Free Trial</span>
                    <h5 class="mt-10">BotWave</h5>
                    <p class="mb-0">AI-powered customer support bots (WhatsApp/Telegram/website).</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="/products#verifyme-plus" class="product-card d-block text-decoration-none wow fadeInUp delay-0-3s">
                    <span class="status-pill is-live">Live / Evolving</span>
                    <h5 class="mt-10">VerifyMe+</h5>
                    <p class="mb-0">AI-assisted scam-reporting platform for Nigeria.</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="/products#scanoriginal" class="product-card d-block text-decoration-none wow fadeInUp delay-0-4s">
                    <span class="status-pill is-active">Active MVP Development</span>
                    <h5 class="mt-10">ScanOriginal</h5>
                    <p class="mb-0">Anti-counterfeit verification PWA.</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="/products#cleanpilot" class="product-card d-block text-decoration-none wow fadeInUp delay-0-5s">
                    <span class="status-pill is-live">Live</span>
                    <h5 class="mt-10">CleanPilot</h5>
                    <p class="mb-0">SaaS operating system for UK cleaning businesses.</p>
                </a>
            </div>
        </div>
        <div class="text-center mt-40">
            <a href="/products" class="theme-btn style-two">See All Products <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>

<!-- Client Work (secondary) -->
<section class="project-area-three pt-60 pb-130 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg10">
                <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Client Work</span>
                    <h3>Platforms We've Delivered for Clients</h3>
                    <p class="mt-20">We've helped businesses turn ideas, services and existing processes into modern digital experiences and software platforms. From property and media platforms to marketplaces and service-booking systems, our work is designed around how each business operates.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="project-three-active">
        <div class="project-item style-two wow fadeInUp delay-0-2s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/oracletv.jpg') }}" width="900" height="471" loading="lazy" decoding="async" alt="Oraclefilms TV">
                <div class="project-over">
                    <a class="details-btn" href="/our-work#oraclefilms-tv"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="/our-work#oraclefilms-tv">Oraclefilms TV</a></h4>
                <span class="category">Media / Entertainment Platform</span>
            </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-4s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/jjhomes.jpg') }}" width="900" height="433" loading="lazy" decoding="async" alt="JJ Homes London">
                <div class="project-over">
                    <a class="details-btn" href="/our-work#jj-homes-london"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="/our-work#jj-homes-london">JJ Homes London</a></h4>
                <span class="category">Property / Real Estate Platform</span>
            </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-6s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/marketplace.jpg') }}" width="900" height="434" loading="lazy" decoding="async" alt="Marketplace Naija/Ghana">
                <div class="project-over">
                    <a class="details-btn" href="/our-work#marketplace-group"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="/our-work#marketplace-group">Marketplace Naija/Ghana</a></h4>
                <span class="category">Classifieds Platform</span>
            </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-8s">
            <div class="project-iamge d-flex align-items-center justify-content-center" style="min-height:250px;background:var(--ink);">
                <i class="fas fa-bolt fa-3x" style="color:var(--accent-cyan);"></i>
                <div class="project-over">
                    <a class="details-btn" href="/our-work#quickerrands"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="/our-work#quickerrands">QuickErrands</a></h4>
                <span class="category">On-Demand Services Booking Platform</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center mt-40">
            <a href="/our-work" class="theme-btn style-two">View All Our Work <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
<!-- Client Work end -->

<!-- Tech Stack start -->
<section class="pt-130 pb-100 rel z-1">
    <div class="container">
        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-10">What We Build With</span>
            <h2>Our Technology Stack</h2>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
            <div class="col">
                <div class="tech-stack-group">
                    <h5>Backend</h5>
                    <ul class="list-style-four">
                        <li>Laravel</li>
                        <li>Django</li>
                        <li>FastAPI</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="tech-stack-group">
                    <h5>Frontend</h5>
                    <ul class="list-style-four">
                        <li>Alpine.js</li>
                        <li>Livewire</li>
                        <li>React</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="tech-stack-group">
                    <h5>Mobile</h5>
                    <ul class="list-style-four">
                        <li>React Native</li>
                        <li>Flutter</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="tech-stack-group">
                    <h5>Databases</h5>
                    <ul class="list-style-four">
                        <li>MySQL</li>
                        <li>PostgreSQL</li>
                        <li>Redis</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="tech-stack-group">
                    <h5>Cloud &amp; Infrastructure</h5>
                    <ul class="list-style-four">
                        <li>Contabo VPS</li>
                        <li>Hetzner Cloud</li>
                        <li>Nginx</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="tech-stack-group">
                    <h5>AI</h5>
                    <ul class="list-style-four">
                        <li>LLM integration</li>
                        <li>AI microservices</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tech Stack end -->

<!-- Process start -->
<section class="pb-100 rel z-1 bgc-lighter pt-100">
    <div class="container">
        <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
            <span class="sub-title mb-15">How We Build</span>
            <h2>From Idea to Live Product</h2>
        </div>
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <div class="col">
                <div class="feature-item-seven mt-30 wow fadeInUp delay-0-2s">
                    <div class="icon"><i class="flaticon-idea"></i></div>
                    <h5>Discover</h5>
                    <p>Understand the business problem and goals.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-two mt-30 wow fadeInUp delay-0-3s">
                    <div class="icon"><i class="flaticon-checklist"></i></div>
                    <h5>Plan</h5>
                    <p>Scope features, architecture and timeline.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-three mt-30 wow fadeInUp delay-0-4s">
                    <div class="icon"><i class="flaticon-graphic-design"></i></div>
                    <h5>Design</h5>
                    <p>UI/UX that fits how the product will actually be used.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-four mt-30 wow fadeInUp delay-0-2s">
                    <div class="icon"><i class="flaticon-coding-2"></i></div>
                    <h5>Build</h5>
                    <p>Backend, frontend and APIs, built to scale.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven mt-30 wow fadeInUp delay-0-3s">
                    <div class="icon"><i class="flaticon-web-programming"></i></div>
                    <h5>Integrate</h5>
                    <p>Payments, third-party services and AI where useful.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-two mt-30 wow fadeInUp delay-0-4s">
                    <div class="icon"><i class="flaticon-startup"></i></div>
                    <h5>Launch</h5>
                    <p>Ship to production with proper deployment &amp; monitoring.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-item-seven color-three mt-30 wow fadeInUp delay-0-2s">
                    <div class="icon"><i class="flaticon-trophy"></i></div>
                    <h5>Grow</h5>
                    <p>Improve, optimise and expand as the business grows.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process end -->

<!-- Testimonial Area Start -->
<section class="testimonial-area-two rel z-1 mt-130 mb-120">
    <div class="container for-middle-border">
        <div class="row justify-content-between align-items-center pb-90 rpb-35 wow fadeInUp delay-0-2s">
            <div class="col-xl-7 col-lg-8">
                <div class="section-title">
                    <span class="sub-title mb-15">Clients Testimonials</span>
                    <h2>Clients feedback</h2>
                </div>
            </div>
            <div class="col-lg-4">
               <div class="slider-arrow-btns text-lg-end">
                    <button class="work-prev"><i class="far fa-arrow-left"></i></button>
                    <button class="work-next"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="testimonial-two-active">
            <div class="testimonial-item-two wow fadeInUp delay-0-2s">
                <div class="testimonial-author pb-4">
                </div>
                <div class="testimonial-content">
                    <p>Professional, creative, and highly responsive. Our new site has made it much easier for clients to learn about our services and get in touch. Highly recommended.</p>
                    <div class="author-description">
                        <span class="h5">Joel Hong</span>
                        <span class="designation"><a href="/our-work#jj-homes-london">CEO, JJ Homes Management</a></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-two wow fadeInUp delay-0-4s">
                <div class="testimonial-author pb-4">

                </div>
                <div class="testimonial-content">
                    <p>They didn’t just design a website—they built a digital platform that supports our growth. The attention to detail and ongoing support have been outstanding.</p>
                    <div class="author-description">
                        <span class="h5">Miriam</span>
                        <span class="designation"><a href="/our-work#furnished-apartments">Manager, Furnished Apartments</a></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-two wow fadeInUp delay-0-2s">
                <div class="testimonial-author pb-4">

                </div>
                <div class="testimonial-content">
                    <p>I was impressed by how quickly they understood our needs and turned them into a beautiful, functional website. We’ve already seen an increase in inquiries from new customers.</p>
                    <div class="author-description">
                        <span class="h5">Mr Okey</span>
                        <span class="designation"><a href="/our-work#oraclefilms-tv">Founder, Oraclefilms Tv</a></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-two wow fadeInUp delay-0-4s">
                <div class="testimonial-author pb-4">

                </div>
                <div class="testimonial-content">
                    <p>The team delivered a website that perfectly reflects our brand and makes it easy for clients to connect with us. From start to finish, the process was smooth and professional.</p>
                    <div class="author-description">
                        <span class="h5">Jerry</span>
                        <span class="designation"><a href="/our-work#marketplace-group">Director, Marketplace Naija</a></span>
                    </div>

                </div>
            </div>
            <div class="testimonial-item-two wow fadeInUp delay-0-4s">
                <div class="testimonial-author pb-4">

                </div>
                <div class="testimonial-content">
                    <p>Their expertise transformed our outdated website into a modern, client-friendly platform. We’ve received so many compliments from partners and customers alike.</p>
                <div class="author-description">
                    <span class="h5">Collins</span>
                    <span class="designation"><a href="/our-work#quickerrands">Director, Quick Errands</a></span>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<!-- Final CTA start -->
<section class="call-to-action-area bgc-black pt-80 pb-50">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title text-white mb-25 wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                    <h2>Have an Idea Worth Building?</h2>
                    <p>Whether you're launching a SaaS product, modernising an existing system, automating a business process or exploring what AI can do for your organisation, we can help you turn the idea into working software. Tell us what you're building.</p>
                </div>
            </div>
            <div class="col-lg-3 text-lg-end">
                <a href="/start-a-project" class="theme-btn style-three mb-30 wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">Start a Project <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Final CTA end -->

<!-- Contact Area Start -->
<section class="contact-area overflow-hidden py-130 bgc-black-with-lighting rel z-1">
   <div class="container">
       <div class="row justify-content-between">
           <div class="col-xl-5 col-lg-6">
               <div class="contact-info-area text-white rmb-75 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-55">
                        <h2>Have any project on mind! feel free contact with us or <span>say hello</span></h2>
                    </div>
                    <div class="contact-info-wrap">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <span class="title">Location</span>
                                <b class="text">Plot 3 hon Rufus Oyedepo Sangotedo, Lagos</b>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="far fa-envelope-open-text"></i>
                            </div>
                            <div class="content">
                                <span class="title">Email Address</span>
                                <b class="text"><a href="mailto:info@nobleitservices.ng">info@nobleitservices.ng</a></b>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="content">
                                <span class="title">Phone No</span>
                                <b class="text"><a href="callto:+234 907 372 9787"> (+234) 907 372 9787</a></b>
                                <b class="text"><a href="callto:+234 703 152 5786">(+234) 703 152 5786</a></b>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
           <div class="col-xl-5 col-lg-6">
               <form id="contact-area-form" class="contact-area-form text-center wow fadeInRight delay-0-2s" name="contact-area-form" action="/contact-us" method="post">
                @csrf
                    <h4>Send us Message</h4>
                    <label for="full-name" class="visually-hidden">Full Name</label>
                    <input type="text" id="full-name" name="name" class="form-control" value="" placeholder="Full Name" required="">
                    <label for="blog-email" class="visually-hidden">Email Address</label>
                    <input type="email" id="blog-email" name="email" class="form-control" value="" placeholder="Email Address" required="">
                    <label for="phone" class="visually-hidden">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number">
                    <label for="select-subject" class="visually-hidden">Subject</label>
                    <select name="subject" id="select-subject" class="form-control">
                        <option value="website customize"="">Website customize</option>
                        <option value="Web Design & Development" selected>Web Design & Development</option>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="SEO">SEO</option>
                    </select>
                    <label for="message" class="visually-hidden">Message</label>
                    <textarea name="message" id="message" class="form-control" rows="2" placeholder="Write Message" required=""></textarea>
                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        @endif
                    <button type="submit" class="theme-btn mt-10">Send messages <i class="fas fa-angle-double-right"></i></button>
                </form>
           </div>
       </div>
   </div>
   <div class="contact-shapes">
       <img class="shape circle" src="{{ asset('frontend/images/shapes/slider-dots.png') }}" loading="lazy" decoding="async" alt="Shape">
       <img class="shape dots" src="{{ asset('frontend/images/shapes/contact-dots.png') }}" loading="lazy" decoding="async" alt="Shape">
       <img class="shape wave-line" src="{{ asset('frontend/images/shapes/contact-wave-line.png') }}" loading="lazy" decoding="async" alt="Shape">
   </div>
</section>
<!-- Contact Area End -->


@include('frontend.layouts.footer')
