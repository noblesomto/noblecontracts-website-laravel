@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Search Engine <span class="text-accent-cyan">Optimization</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Search Engine Optimization</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto" data-reveal>
        <img src="{{ asset('frontend/images/banner/seo.jpg') }}" class="rounded-lg w-full mb-8" alt="Search Engine Optimization">
        <div class="space-y-4 text-ink/70">
            <p>Our aim is not only to improve your website's visibility within the search engines, but also to drive traffic that will convert to your site. At <a href="/" class="text-accent hover:underline">Noble IT Services</a> we don't believe in humdrum techniques. We work hard and have a wealth of knowledge. This is what underpins our innovative thinking and creativity, making sure we get you the best possible results.</p>
            <p>We constantly monitor the Google algorithm and, with our fingers firmly on the pulse, you can rest assured that we're doing the very best for your <a href="/digital-marketing" class="text-accent hover:underline">online marketing</a>. Whether you're an e-commerce site looking to increase sales or you just want a boost in site traffic, Noble IT Services has got your SEO campaign sorted. A well-planned strategy that delivers high-quality results time and time again.</p>
            <p>Whether you are looking to dominate local search, capitalise on mobile SEO, improve your conversions through CRO or you're just looking for an SEO audit to find out exactly where your site is at, we can help.</p>
            <p>Even if you have been led astray in the past and have received a Google penalty we can help. With our 100% success rate in Google penalty removal, our backlink analysis and removal service can help get your site back in top form again.</p>
        </div>
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
