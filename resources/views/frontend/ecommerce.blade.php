@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Ecommerce</h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Ecommerce</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto" data-reveal>
        <img src="{{ asset('frontend/images/banner/ecomm.jpg') }}" class="rounded-lg w-full mb-8" alt="Ecommerce website">
        <div class="space-y-4 text-ink/70">
            <p>There has never been a better time for small businesses to be selling online. eCommerce is booming in almost every sector while at the same time, new cloud-based solutions make it possible to manage a highly professional online shop at a fraction of the cost.</p>
            <p>Consumers have come to expect online ordering from even the smallest businesses. Our own research found that 56% expect small businesses to offer online shopping capabilities. With so many small businesses already cashing in on eCommerce, you could already be losing out to your competitors if you don't sell online.</p>
            <p>Even customers who don't wish to buy online still expect to find product information on a business' website &mdash; 62% said they browse online before purchasing a product in store.</p>
            <p>If you haven't considered selling online, just think about the size of the audience you're missing out on. eCommerce allows you to sell your products anywhere in the world, meaning you are no longer restricted to the local area. This equates to incredible potential for increased sales and profits.</p>
            <p>Many small businesses have realised this potential, and have chosen to sell their products on eBay or even via their Facebook page. This does not give an impression of professionalism. The main benefit of eCommerce is that it allows the smallest businesses to compete with the largest &mdash; you'd never see a large, successful business sending their customers to eBay to buy their products. It's best to have an eCommerce solution integrated with your business website.</p>
            <p>This means you can manage your whole sales process through your site, from advertising your products to taking payment and organising delivery.</p>
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
