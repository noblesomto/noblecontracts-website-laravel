@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Digital <span class="text-accent-cyan">Marketing</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Digital Marketing</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto" data-reveal>
        <img src="{{ asset('frontend/images/banner/digital-marketing.jpg') }}" class="rounded-lg w-full mb-8" alt="Digital Marketing">
        <div class="space-y-4 text-ink/70">
            <p>Marketing today is undergoing a paradigm shift &mdash; from traditionally being a &lsquo;pay to play&rsquo; model where large companies could get away without actually engaging their clients. The true democratization of content and opinions started by the internet has been fast forwarded by the explosive growth of social media. This is the first time that smaller companies without bottomless marketing budgets can actually go head to head with competitors. The traditional &lsquo;smoke and mirrors&rsquo; approach no longer works when consumers have access to both the media and the networks to make themselves heard.</p>
            <p>Sometime in the near future we'll access our TV, internet, phone, radio, music, photos, videos and more through a single appliance of our choice. The companies that understand this &mdash; and the coming change in how people use technology to gather information and make decisions &mdash; will be the ones who succeed.</p>
            <p><a href="/digital-marketing" class="text-accent hover:underline">Digital marketing</a> today has become a vast arena which continues to expand rapidly. Your company needs to formulate its digital marketing strategy carefully before jumping onto the next big trend that becomes hot. It is essential for your company to apply SEO best practices to discover upcoming trends and devise ingenious marketing strategies for targeting the right audience. In today's digital marketing, data points are easy to come by &mdash; understanding which ones to pay attention to is what really matters.</p>
            <p><a href="/" class="text-accent hover:underline">Noble IT Services</a> is one of the leading digital marketing companies in Nigeria &mdash; we have been in business since 2009, and you can trust us to put your company/brand at the forefront of the industry through a well-planned digital marketing strategy.</p>
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
