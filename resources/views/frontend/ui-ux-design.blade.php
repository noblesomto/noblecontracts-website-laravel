@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>UI/UX &amp; Product <span class="text-accent-cyan">Design</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">UI/UX &amp; Product Design</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">UI/UX &amp; Product Design</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Interfaces Designed for How They'll Actually Be Used</h2>
            <p class="mt-5 text-ink/70">Good product design isn't decoration &mdash; it's the difference between a feature people use and one they avoid. We design interfaces around real user tasks, not just a visual style, and carry that thinking through every product and client platform we build.</p>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="pb-20">
    <div class="container-nb">
        <div class="flex flex-wrap items-center gap-12">
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">What's Included</span>
                <h3 class="text-2xl md:text-3xl font-bold mt-3 mb-5">From Wireframe to Design System</h3>
                <p class="text-ink/70">Design isn't a one-off deliverable we hand over &mdash; it's built alongside development so what ships matches what was designed.</p>
            </div>
            <div class="w-full lg:w-[calc(50%-1.5rem)]" data-reveal>
                <ul class="list-style-four text-ink/70">
                    <li>User research &amp; task mapping</li>
                    <li>Wireframing &amp; information architecture</li>
                    <li>UI design &amp; design systems</li>
                    <li>Interactive prototyping</li>
                    <li>Mobile-first &amp; responsive design</li>
                    <li>Accessibility &amp; usability review</li>
                    <li>Admin &amp; dashboard interface design</li>
                    <li>Design handoff for development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Proof -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Design in Practice</span>
            <h3 class="text-2xl md:text-3xl font-bold mt-3">Where This Shows Up</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/products#scanoriginal" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <h5 class="font-bold">ScanOriginal</h5>
                <p class="mt-2 text-ink/70">A PWA designed to work for low-connectivity users, with USSD as a fallback path.</p>
            </a>
            <a href="/products#cleanpilot" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <h5 class="font-bold">CleanPilot</h5>
                <p class="mt-2 text-ink/70">An operations dashboard designed around a cleaning business's actual daily workflow.</p>
            </a>
            <a href="/our-work#jj-homes-london" class="block w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)] bg-white border border-border-soft rounded-lg p-6 hover:border-accent transition-colors" data-reveal>
                <h5 class="font-bold">JJ Homes London</h5>
                <p class="mt-2 text-ink/70">A property platform redesigned to make finding and booking a stay effortless.</p>
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
            <a href="/web-development" class="theme-btn" style="background:transparent;color:var(--color-accent);border:1px solid var(--color-accent);">Web &amp; Mobile Applications</a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Need Your Product Designed Properly?</h2>
            <p class="mt-3 text-white/70">Whether it's a new product or a redesign of an existing one, tell us what you're working on.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
