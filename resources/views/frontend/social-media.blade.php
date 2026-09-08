@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Social Media <span class="text-accent-cyan">Marketing</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Social Media Marketing</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto" data-reveal>
        <img src="{{ asset('frontend/images/banner/Social-Media-Marketing.jpg') }}" class="rounded-lg w-full mb-8" alt="Social Media Marketing">
        <div class="space-y-4 text-ink/70">
            <p><strong>Social media marketing</strong> has become vital to digital marketing campaigns and can even be the flag bearer of your marketing goals. As a social media marketing agency, <a href="/" class="text-accent hover:underline">Noble IT Services</a> understands the science behind what makes something shareable. We help your brand to be heard and shared. Our social media strategy involves an in-depth study of your brand and creating tailored content based on which platform is more likely to give you an advantage.</p>
            <p>The digital realm is growing. Social media is dominating a massive chunk of the digital space. Given the speed at which new media platforms are mushrooming and proliferating, companies need to figure out their strategy for engaging consumers across these multiple social media websites.</p>
            <p>Social media platforms such as Facebook, Twitter, Instagram, Pinterest, LinkedIn and many emerging ones have become an integral part of our social existence. An average user of social media spends 11 hours online every day. This shows that there is ample scope for your brand to catch the attention of those wandering on the net.</p>
            <p>As social media is redefining the developing landscape of online marketing, we build a social media campaign that is aligned to fulfill your business objectives. We offer the following social media services to get your business into the center of all limelight.</p>
        </div>
        <h4 class="font-bold mt-8 mb-4">Some of our social media marketing strategies include:</h4>
        <ul class="list-style-four text-ink/70">
            <li>Social postings for all social media platforms</li>
            <li>Social seeding</li>
            <li>Sponsored posts</li>
            <li>Like campaigns</li>
            <li>Live tweeting</li>
            <li>Video promotions</li>
        </ul>
        <p class="mt-6 text-ink/70">Creating communication that establishes relationships across various media channels is our area of expertise. Pull us in, to draft a social media marketing plan that generates persuasive brand awareness and directs traffic to your website. <strong>Get in touch</strong> with us today!</p>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Let's Design Your New Website</h2>
            <p class="mt-3 text-white/70">Do you want a website that stands out and impresses your clients? Tell us about your project and we'll help you shape it into something real.</p>
        </div>
        <a href="/start-a-project" class="theme-btn" style="background:transparent;border:1px solid #fff;">Start a Project <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
