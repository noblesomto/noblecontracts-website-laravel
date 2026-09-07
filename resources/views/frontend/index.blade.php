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
<section class="py-20 bg-ink text-white">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent-cyan uppercase text-sm font-semibold">AI Solutions</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">AI That Solves Real Problems</h2>
            <p class="mt-5 text-white/70">AI is most valuable when it improves the way a business operates. We integrate AI into software products, workflows and customer experiences &mdash; from intelligent assistants and automated processes to document analysis, AI search and LLM-powered applications, as built into BotWave, VerifyMe+ and ScanOriginal.</p>
            <a href="/ai-integration" class="theme-btn mt-6" style="background:transparent;border:1px solid #fff;">Explore AI Solutions <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="flex flex-wrap gap-8 justify-center">
            @foreach ([
                ['icon' => 'flaticon-technical-support', 'title' => 'AI Assistants', 'text' => 'Intelligent conversational experiences for websites, applications and messaging platforms.'],
                ['icon' => 'flaticon-settings', 'title' => 'AI Agents', 'text' => 'Automated systems capable of handling defined business tasks and workflows.'],
                ['icon' => 'flaticon-search-location', 'title' => 'AI Search', 'text' => 'Smarter search and information retrieval powered by AI.'],
                ['icon' => 'flaticon-checklist', 'title' => 'Document Intelligence', 'text' => 'Extract, analyse and understand information from business documents.'],
                ['icon' => 'flaticon-optimization', 'title' => 'AI Automation', 'text' => 'Reduce repetitive work by connecting AI to business processes.'],
                ['icon' => 'flaticon-web-programming', 'title' => 'LLM Integration', 'text' => 'Integrate modern language models where they create genuine business value.'],
            ] as $item)
            <div class="w-full sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.4rem)] border border-white/15 rounded-lg p-8" data-reveal>
                <div class="text-3xl text-accent-cyan mb-4"><i class="{{ $item['icon'] }}"></i></div>
                <h5 class="font-bold text-lg">{{ $item['title'] }}</h5>
                <p class="mt-2 text-white/70">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- AI Pitch Block end -->

<!-- Products We've Built start -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Proof, Not Promises</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Products We've Built</h2>
            <p class="mt-5 text-ink/70">We build and operate our own digital products, giving us first-hand experience taking software from concept through development, deployment and continuous improvement.</p>
        </div>
        <div class="flex flex-wrap gap-4 justify-center">
            @foreach ([
                ['href' => '/products#botwave', 'pill' => 'Live — Free Trial', 'title' => 'BotWave', 'text' => 'AI-powered customer support bots (WhatsApp/Telegram/website).'],
                ['href' => '/products#verifyme-plus', 'pill' => 'Live / Evolving', 'title' => 'VerifyMe+', 'text' => 'AI-assisted scam-reporting platform for Nigeria.'],
                ['href' => '/products#scanoriginal', 'pill' => 'Active MVP Development', 'title' => 'ScanOriginal', 'text' => 'Anti-counterfeit verification PWA.'],
                ['href' => '/products#cleanpilot', 'pill' => 'Live', 'title' => 'CleanPilot', 'text' => 'SaaS operating system for UK cleaning businesses.'],
            ] as $item)
            <a href="{{ $item['href'] }}" class="block w-full sm:w-[calc(50%-0.5rem)] lg:w-[calc(25%-0.75rem)] border border-border-soft rounded-lg p-6 no-underline text-ink hover:border-accent" data-reveal>
                <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full bg-accent/10 text-accent">{{ $item['pill'] }}</span>
                <h5 class="mt-3 font-bold">{{ $item['title'] }}</h5>
                <p class="mt-1 text-ink/70">{{ $item['text'] }}</p>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="/products" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">See All Products <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>

<!-- Client Work (secondary) -->
<section class="pt-12 pb-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Client Work</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Platforms We've Delivered for Clients</h3>
            <p class="mt-5 text-ink/70">We've helped businesses turn ideas, services and existing processes into modern digital experiences and software platforms. From property and media platforms to marketplaces and service-booking systems, our work is designed around how each business operates.</p>
        </div>
    </div>
    <div id="portfolio-carousel-v2" class="overflow-hidden">
        <div class="embla__container flex gap-6 px-4">
            @foreach ([
                ['img' => 'oracletv.jpg', 'w' => 900, 'h' => 471, 'alt' => 'Oraclefilms TV', 'href' => '/our-work#oraclefilms-tv', 'title' => 'Oraclefilms TV', 'cat' => 'Media / Entertainment Platform'],
                ['img' => 'jjhomes.jpg', 'w' => 900, 'h' => 433, 'alt' => 'JJ Homes London', 'href' => '/our-work#jj-homes-london', 'title' => 'JJ Homes London', 'cat' => 'Property / Real Estate Platform'],
                ['img' => 'marketplace.jpg', 'w' => 900, 'h' => 434, 'alt' => 'Marketplace Naija/Ghana', 'href' => '/our-work#marketplace-group', 'title' => 'Marketplace Naija/Ghana', 'cat' => 'Classifieds Platform'],
            ] as $item)
            <div class="min-w-0 flex-[0_0_85%] sm:flex-[0_0_45%] lg:flex-[0_0_30%]">
                <div class="relative rounded-lg overflow-hidden group">
                    <img src="{{ asset('frontend/images/portfolio/' . $item['img']) }}" width="{{ $item['w'] }}" height="{{ $item['h'] }}" loading="lazy" decoding="async" alt="{{ $item['alt'] }}" class="w-full">
                    <a href="{{ $item['href'] }}" class="absolute inset-0 flex items-center justify-center bg-ink/0 group-hover:bg-ink/40 transition text-white opacity-0 group-hover:opacity-100"><i class="far fa-arrow-right text-2xl"></i></a>
                </div>
                <h4 class="mt-4"><a href="{{ $item['href'] }}" class="hover:text-accent">{{ $item['title'] }}</a></h4>
                <span class="text-ink/60 text-sm">{{ $item['cat'] }}</span>
            </div>
            @endforeach
            <div class="min-w-0 flex-[0_0_85%] sm:flex-[0_0_45%] lg:flex-[0_0_30%]">
                <div class="relative rounded-lg overflow-hidden bg-ink flex items-center justify-center" style="min-height:250px;">
                    <i class="fas fa-bolt text-4xl text-accent-cyan"></i>
                    <a href="/our-work#quickerrands" class="absolute inset-0 flex items-center justify-center bg-ink/0 hover:bg-ink/40 transition text-white opacity-0 hover:opacity-100"><i class="far fa-arrow-right text-2xl"></i></a>
                </div>
                <h4 class="mt-4"><a href="/our-work#quickerrands" class="hover:text-accent">QuickErrands</a></h4>
                <span class="text-ink/60 text-sm">On-Demand Services Booking Platform</span>
            </div>
        </div>
    </div>
    <div class="container-nb text-center mt-10">
        <a href="/our-work" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">View All Our Work <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Client Work end -->

<!-- Tech Stack start -->
<section class="py-20">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">What We Build With</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Our Technology Stack</h2>
        </div>
        <div class="flex flex-wrap gap-8">
            @foreach ([
                ['title' => 'Backend', 'items' => ['Laravel', 'Django', 'FastAPI']],
                ['title' => 'Frontend', 'items' => ['Alpine.js', 'Livewire', 'React']],
                ['title' => 'Mobile', 'items' => ['React Native', 'Flutter']],
                ['title' => 'Databases', 'items' => ['MySQL', 'PostgreSQL', 'Redis']],
                ['title' => 'Cloud & Infrastructure', 'items' => ['Contabo VPS', 'Hetzner Cloud', 'Nginx']],
                ['title' => 'AI', 'items' => ['LLM integration', 'AI microservices']],
            ] as $group)
            <div class="w-full sm:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.4rem)]" data-reveal>
                <h5 class="font-bold text-lg mb-2">{{ $group['title'] }}</h5>
                <ul class="space-y-1 text-ink/70">
                    @foreach ($group['items'] as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Tech Stack end -->

<!-- Process start -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-16" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">How We Build</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">From Idea to Live Product</h2>
        </div>
        <div class="flex flex-wrap gap-6 justify-center">
            @foreach ([
                ['icon' => 'flaticon-idea', 'title' => 'Discover', 'text' => 'Understand the business problem and goals.'],
                ['icon' => 'flaticon-checklist', 'title' => 'Plan', 'text' => 'Scope features, architecture and timeline.'],
                ['icon' => 'flaticon-graphic-design', 'title' => 'Design', 'text' => 'UI/UX that fits how the product will actually be used.'],
                ['icon' => 'flaticon-coding-2', 'title' => 'Build', 'text' => 'Backend, frontend and APIs, built to scale.'],
                ['icon' => 'flaticon-web-programming', 'title' => 'Integrate', 'text' => 'Payments, third-party services and AI where useful.'],
                ['icon' => 'flaticon-startup', 'title' => 'Launch', 'text' => 'Ship to production with proper deployment &amp; monitoring.'],
                ['icon' => 'flaticon-trophy', 'title' => 'Grow', 'text' => 'Improve, optimise and expand as the business grows.'],
            ] as $step)
            <div class="w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] lg:w-[calc(25%-1.125rem)] border border-border-soft rounded-lg p-6 bg-white" data-reveal>
                <div class="text-3xl text-accent mb-4"><i class="{{ $step['icon'] }}"></i></div>
                <h5 class="font-bold">{{ $step['title'] }}</h5>
                <p class="mt-2 text-ink/70">{!! $step['text'] !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Process end -->


<!-- Testimonial Area Start -->
<section class="py-20 border-t border-border-soft">
    <div class="container-nb">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-12" data-reveal>
            <div>
                <span class="text-accent uppercase text-sm font-semibold">Clients Testimonials</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3">Clients feedback</h2>
            </div>
            <div class="flex gap-3">
                <button class="work-prev w-11 h-11 rounded-full border border-border-soft flex items-center justify-center" aria-label="Previous testimonial"><i class="far fa-arrow-left"></i></button>
                <button class="work-next w-11 h-11 rounded-full border border-border-soft flex items-center justify-center" aria-label="Next testimonial"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div id="testimonial-carousel-v2" class="overflow-hidden">
            <div class="embla__container flex gap-8">
                @foreach ([
                    ['quote' => 'Professional, creative, and highly responsive. Our new site has made it much easier for clients to learn about our services and get in touch. Highly recommended.', 'name' => 'Joel Hong', 'role' => 'CEO, JJ Homes Management', 'href' => '/our-work#jj-homes-london'],
                    ['quote' => 'They didn’t just design a website—they built a digital platform that supports our growth. The attention to detail and ongoing support have been outstanding.', 'name' => 'Miriam', 'role' => 'Manager, Furnished Apartments', 'href' => '/our-work#furnished-apartments'],
                    ['quote' => 'I was impressed by how quickly they understood our needs and turned them into a beautiful, functional website. We’ve already seen an increase in inquiries from new customers.', 'name' => 'Mr Okey', 'role' => 'Founder, Oraclefilms Tv', 'href' => '/our-work#oraclefilms-tv'],
                    ['quote' => 'The team delivered a website that perfectly reflects our brand and makes it easy for clients to connect with us. From start to finish, the process was smooth and professional.', 'name' => 'Jerry', 'role' => 'Director, Marketplace Naija', 'href' => '/our-work#marketplace-group'],
                    ['quote' => 'Their expertise transformed our outdated website into a modern, client-friendly platform. We’ve received so many compliments from partners and customers alike.', 'name' => 'Collins', 'role' => 'Director, Quick Errands', 'href' => '/our-work#quickerrands'],
                ] as $t)
                <div class="min-w-0 flex-[0_0_100%] md:flex-[0_0_48%]">
                    <p class="text-lg text-ink/80">&ldquo;{{ $t['quote'] }}&rdquo;</p>
                    <div class="mt-4">
                        <span class="font-bold block">{{ $t['name'] }}</span>
                        <a href="{{ $t['href'] }}" class="text-ink/60 text-sm hover:text-accent">{{ $t['role'] }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<!-- Final CTA start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Have an Idea Worth Building?</h2>
            <p class="mt-3 text-white/70">Whether you're launching a SaaS product, modernising an existing system, automating a business process or exploring what AI can do for your organisation, we can help you turn the idea into working software. Tell us what you're building.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Final CTA end -->

<!-- Contact Area Start -->
<section class="bg-ink text-white py-20">
    <div class="container-nb flex flex-wrap justify-between gap-12">
        <div class="w-full lg:w-5/12" data-reveal>
            <h2 class="text-2xl md:text-3xl font-bold mb-8">Have any project on mind! feel free contact with us or <span class="text-accent-cyan">say hello</span></h2>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <i class="fal fa-map-marker-alt text-accent-cyan text-xl"></i>
                    <div>
                        <span class="block text-white/60 text-sm">Location</span>
                        <b class="font-normal">Plot 3 hon Rufus Oyedepo Sangotedo, Lagos</b>
                    </div>
                </div>
                <div class="flex gap-4">
                    <i class="far fa-envelope-open-text text-accent-cyan text-xl"></i>
                    <div>
                        <span class="block text-white/60 text-sm">Email Address</span>
                        <b class="font-normal"><a href="mailto:info@nobleitservices.ng" class="hover:text-accent-cyan">info@nobleitservices.ng</a></b>
                    </div>
                </div>
                <div class="flex gap-4">
                    <i class="far fa-phone text-accent-cyan text-xl"></i>
                    <div>
                        <span class="block text-white/60 text-sm">Phone No</span>
                        <b class="font-normal block"><a href="callto:+234 907 372 9787" class="hover:text-accent-cyan">(+234) 907 372 9787</a></b>
                        <b class="font-normal block"><a href="callto:+234 703 152 5786" class="hover:text-accent-cyan">(+234) 703 152 5786</a></b>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12" data-reveal>
            <form id="contact-area-form" class="text-ink bg-white rounded-lg p-8 flex flex-col gap-4" name="contact-area-form" action="/contact-us" method="post">
                @csrf
                <h4 class="font-bold text-xl mb-2">Send us Message</h4>
                <label for="full-name" class="sr-only">Full Name</label>
                <input type="text" id="full-name" name="name" class="border border-border-soft rounded px-4 py-2" value="" placeholder="Full Name" required>
                <label for="blog-email" class="sr-only">Email Address</label>
                <input type="email" id="blog-email" name="email" class="border border-border-soft rounded px-4 py-2" value="" placeholder="Email Address" required>
                <label for="phone" class="sr-only">Phone Number</label>
                <input type="text" id="phone" name="phone" class="border border-border-soft rounded px-4 py-2" value="" placeholder="Phone Number">
                <label for="select-subject" class="sr-only">Subject</label>
                <select name="subject" id="select-subject" class="border border-border-soft rounded px-4 py-2">
                    <option value="website customize">Website customize</option>
                    <option value="Web Design & Development" selected>Web Design &amp; Development</option>
                    <option value="Mobile Development">Mobile Development</option>
                    <option value="SEO">SEO</option>
                </select>
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" class="border border-border-soft rounded px-4 py-2" rows="2" placeholder="Write Message" required></textarea>
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-red-600">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
                <button type="submit" class="theme-btn justify-center">Send messages <i class="fas fa-angle-double-right"></i></button>
            </form>
        </div>
    </div>
</section>
<!-- Contact Area End -->

@include('frontend.layouts.footer-v2')
