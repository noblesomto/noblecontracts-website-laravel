<body class="bg-white text-ink">
<div class="min-h-screen flex flex-col">

<header class="border-b border-border-soft">
    <div class="container-nb flex items-center justify-between py-4">
        <a href="/" class="shrink-0">
            <img src="{{ asset('frontend/images/logos/logo-nav.png') }}" width="450" height="148" class="h-11 w-auto" alt="Noble IT Services" title="Noble IT Services">
        </a>

        <nav class="hidden lg:flex items-center gap-8">
            <a href="/" class="hover:text-accent">Home</a>
            <div class="relative group">
                <a href="/services" class="hover:text-accent">Services</a>
                <ul class="absolute left-0 top-full mt-2 min-w-[260px] bg-white border border-border-soft rounded shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible focus-within:opacity-100 focus-within:visible transition">
                    <li><a href="/custom-software" class="block px-4 py-2 hover:bg-surface-alt">Custom Software</a></li>
                    <li><a href="/saas-development" class="block px-4 py-2 hover:bg-surface-alt">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="block px-4 py-2 hover:bg-surface-alt">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="block px-4 py-2 hover:bg-surface-alt">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="block px-4 py-2 hover:bg-surface-alt">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="block px-4 py-2 hover:bg-surface-alt">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="block px-4 py-2 hover:bg-surface-alt">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="block px-4 py-2 hover:bg-surface-alt">Digital Growth</a></li>
                </ul>
            </div>
            <a href="/products" class="hover:text-accent">Products</a>
            <a href="/our-work" class="hover:text-accent">Our Work</a>
            <a href="/about-us" class="hover:text-accent">About</a>
            <a href="/contact-us" class="hover:text-accent">Contact</a>
        </nav>

        <a href="/start-a-project" class="hidden lg:inline-flex theme-btn">Start a Project <i class="fas fa-angle-double-right"></i></a>

        <button id="nav-v2-toggle" type="button" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-v2-menu" class="lg:hidden p-2">
            <span class="block w-6 h-0.5 bg-ink mb-1.5"></span>
            <span class="block w-6 h-0.5 bg-ink mb-1.5"></span>
            <span class="block w-6 h-0.5 bg-ink"></span>
        </button>
    </div>

    <div id="nav-v2-menu" class="lg:hidden hidden border-t border-border-soft">
        <nav class="container-nb flex flex-col py-4">
            <a href="/" class="py-2">Home</a>
            <div class="nav-v2-dropdown-group">
                <div class="flex items-center justify-between py-2">
                    <a href="/services">Services</a>
                    <button type="button" class="nav-v2-dropdown-btn p-2" aria-label="Toggle Services submenu" aria-expanded="false"><i class="fas fa-chevron-down"></i></button>
                </div>
                <ul class="nav-v2-dropdown-menu hidden pl-4">
                    <li><a href="/custom-software" class="block py-1.5">Custom Software</a></li>
                    <li><a href="/saas-development" class="block py-1.5">SaaS Development</a></li>
                    <li><a href="/ai-integration" class="block py-1.5">AI Integration</a></li>
                    <li><a href="/services#web-mobile-applications" class="block py-1.5">Web &amp; Mobile Applications</a></li>
                    <li><a href="/api-integration" class="block py-1.5">API &amp; System Integration</a></li>
                    <li><a href="/ui-ux-design" class="block py-1.5">UI/UX &amp; Product Design</a></li>
                    <li><a href="/cloud-deployment" class="block py-1.5">Cloud &amp; Deployment</a></li>
                    <li><a href="/services#digital-growth" class="block py-1.5">Digital Growth</a></li>
                </ul>
            </div>
            <a href="/products" class="py-2">Products</a>
            <a href="/our-work" class="py-2">Our Work</a>
            <a href="/about-us" class="py-2">About</a>
            <a href="/contact-us" class="py-2">Contact</a>
            <a href="/start-a-project" class="theme-btn mt-4 justify-center">Start a Project <i class="fas fa-angle-double-right"></i></a>
        </nav>
    </div>
</header>
