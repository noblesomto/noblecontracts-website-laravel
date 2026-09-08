<body class="bg-white text-ink">
<div class="min-h-screen flex flex-col">

<header id="nav-v2-header" class="bg-ink border-b border-white/10 sticky top-0 z-30">
    <div class="container-nb flex items-center justify-between py-6">
        <a href="/" class="shrink-0">
            <img src="{{ asset('frontend/images/logos/logo-nav.png') }}" width="450" height="148" class="h-14 w-auto" alt="Noble IT Services" title="Noble IT Services">
        </a>

        <nav class="hidden lg:flex items-center gap-10 text-lg font-medium">
            <a href="/" class="text-white hover:text-accent">Home</a>
            <div class="relative group">
                <a href="/services" class="text-white/80 hover:text-accent">Services</a>
                <ul class="absolute left-0 top-full mt-2 min-w-[260px] bg-[#181b23] border border-white/10 rounded shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible focus-within:opacity-100 focus-within:visible transition text-base">
                    <li><a href="/custom-software" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">Custom Software</a></li>
                    <li><a href="/saas-development" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="block px-4 py-2 text-white/80 hover:bg-white/5 hover:text-accent">Digital Growth</a></li>
                </ul>
            </div>
            <a href="/products" class="text-white/80 hover:text-accent">Products</a>
            <a href="/our-work" class="text-white/80 hover:text-accent">Our Work</a>
            <a href="/about-us" class="text-white/80 hover:text-accent">About</a>
            <a href="/contact-us" class="text-white/80 hover:text-accent">Contact</a>
        </nav>

        <a href="/start-a-project" class="hidden lg:inline-flex theme-btn text-base px-8 py-4">Start a Project <i class="fas fa-angle-double-right"></i></a>

        <button id="nav-v2-toggle" type="button" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-v2-menu" class="lg:hidden p-2">
            <span class="block w-7 h-0.5 bg-white mb-2"></span>
            <span class="block w-7 h-0.5 bg-white mb-2"></span>
            <span class="block w-7 h-0.5 bg-white"></span>
        </button>
    </div>

    <div id="nav-v2-menu" class="lg:hidden hidden border-t border-white/10 bg-ink">
        <nav class="container-nb flex flex-col py-4">
            <a href="/" class="py-2 text-white">Home</a>
            <div class="nav-v2-dropdown-group">
                <div class="flex items-center justify-between py-2">
                    <a href="/services" class="text-white/80">Services</a>
                    <button type="button" class="nav-v2-dropdown-btn p-2 text-white/80" aria-label="Toggle Services submenu" aria-expanded="false"><i class="fas fa-chevron-down"></i></button>
                </div>
                <ul class="nav-v2-dropdown-menu hidden pl-4">
                    <li><a href="/custom-software" class="block py-1.5 text-white/70">Custom Software</a></li>
                    <li><a href="/saas-development" class="block py-1.5 text-white/70">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="block py-1.5 text-white/70">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="block py-1.5 text-white/70">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="block py-1.5 text-white/70">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="block py-1.5 text-white/70">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="block py-1.5 text-white/70">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="block py-1.5 text-white/70">Digital Growth</a></li>
                </ul>
            </div>
            <a href="/products" class="py-2 text-white/80">Products</a>
            <a href="/our-work" class="py-2 text-white/80">Our Work</a>
            <a href="/about-us" class="py-2 text-white/80">About</a>
            <a href="/contact-us" class="py-2 text-white/80">Contact</a>
            <a href="/start-a-project" class="theme-btn mt-4 justify-center">Start a Project <i class="fas fa-angle-double-right"></i></a>
        </nav>
    </div>
</header>
