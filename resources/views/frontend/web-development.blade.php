@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Web &amp; Mobile <span class="text-accent-cyan">Applications</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/services" class="hover:text-white">Services</a></li>
                <li>/</li>
                <li class="text-white">Web &amp; Mobile Applications</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="pt-20 pb-12">
    <div class="container-nb">
        <div class="max-w-3xl mx-auto text-center" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Web Development</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">Websites and Web Platforms Built Around Your Business</h2>
            <p class="mt-5 text-ink/70">Noble IT Services has been building web platforms in Nigeria for over 11 years &mdash; from corporate and marketing sites to online stores, blogs and full custom web applications. Our team of strategists, designers and developers work together so what we design and what we ship are the same thing.</p>
        </div>
        <div class="max-w-2xl mx-auto mt-8" data-reveal>
            <ul class="list-style-four text-ink/70">
                <li>Corporate &amp; marketing website design</li>
                <li>Responsive, mobile-first web design</li>
                <li>eCommerce web development</li>
                <li>Custom web application development</li>
                <li>Blog &amp; content platform design</li>
                <li>Forums &amp; online community platforms</li>
                <li>Classifieds &amp; marketplace websites</li>
            </ul>
        </div>
    </div>
</section>

<!-- Project Area start -->
<section class="py-20 bg-surface-alt">
    <div class="container-nb">
        <div class="text-center max-w-2xl mx-auto mb-12" data-reveal>
            <span class="text-accent uppercase text-sm font-semibold">Recent Projects</span>
            <h2 class="text-2xl md:text-3xl font-bold mt-3">A Look at Our Latest Work</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ([
                ['img' => 'oracletv.jpg', 'alt' => 'Oraclefilms TV', 'href' => 'https://oraclefilms.tv/', 'title' => 'Oraclefilms TV', 'cat' => 'Web Software'],
                ['img' => 'jjhomes.jpg', 'alt' => 'JJ Homes London', 'href' => 'https://jjhomelondon.co.uk/', 'title' => 'JJ Homes London', 'cat' => 'Web Software'],
                ['img' => 'marketplace.jpg', 'alt' => 'Market Place', 'href' => 'https://www.marketplace.ng/', 'title' => 'Market Place', 'cat' => 'Web Software'],
                ['img' => 'washgate.jpg', 'alt' => 'Furnished Apartments', 'href' => 'https://furnishedapartment.ng/', 'title' => 'Furnished Apartments', 'cat' => 'Website Design'],
                ['img' => 'fhs.jpg', 'alt' => 'FirstHealth Homecare Services', 'href' => 'https://fhhomecare.com/', 'title' => 'FirstHealth Homecare Services', 'cat' => 'Website Design'],
                ['img' => 'simplygift-shop.jpg', 'alt' => 'Simply Gifts Store', 'href' => 'https://shop.simplygifts.com.ng/', 'title' => 'Simply Gifts Store', 'cat' => 'Ecommerce Website'],
            ] as $item)
            <a href="{{ $item['href'] }}" target="_blank" rel="noopener" class="portfolio-card-v2 block no-underline text-ink w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)]" data-reveal>
                <div class="portfolio-card-v2__image group">
                    <img src="{{ asset('frontend/images/portfolio/' . $item['img']) }}" loading="lazy" decoding="async" alt="{{ $item['alt'] }}" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-ink/0 group-hover:bg-ink/40 transition text-white opacity-0 group-hover:opacity-100"><i class="far fa-arrow-right text-2xl"></i></div>
                </div>
                <div class="portfolio-card-v2__body">
                    <h4 class="font-bold">{{ $item['title'] }}</h4>
                    <div class="portfolio-card-v2__category">{{ $item['cat'] }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
<!-- Project Area end -->

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
