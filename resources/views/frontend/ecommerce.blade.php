@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<!-- Page Banner Start -->
<section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-orange text-center">
    <div class="container">
        <div class="banner-inner rpt-10">
            <h1 class="page-title wow fadeInUp delay-0-2s">Ecommerce</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                    <li class="breadcrumb-item"><a href="/">home</a></li>
                    <li class="breadcrumb-item active">Ecommerce</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="banner-shapes">
        
        <img class="shape-one" src="{{ asset('frontend/images/shapes/hero-shape1.png') }}" alt="Shape">
        <img class="shape-two" src="{{ asset('frontend/images/shapes/hero-shape2.png') }}" alt="Shape">
    </div>
</section>
<!-- Page Banner End -->


<!-- What We Do Two Area start -->
<section class="ww-do-two-area py-130 rel z-1">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                <div class="ww-do-two-content rmb-65 wow fadeInUp delay-0-2s">
                    <div class="section-title mb-30">
                      
                        <h2>Ecommerce</h2>
                        <img src="{{ asset('frontend/images/banner/ecomm.jpg') }}" class="img-fluid" alt="Ecommerce website">
                        
                        <div class="body-section mt-20">
                            <p>There has never been a better time for small businesses to be selling online. <a href="/ecommerce/">eCommerce </a>is booming in almost every sector while at the same time, new cloud-based solutions make it possible to manage a highly professional online shop at a fraction of the cost.</p>
                            <p>Consumers have come to expect online ordering from even the smallest businesses. Our own research found that 56% expect small businesses to offer online shopping capabilities. With so many small businesses already cashing in on <a href="/ecommerce/">eCommerce</a>, you could already be losing out to your competitors if you don&rsquo;t sell online.</p>
                            <p>Even customers who don&rsquo;t wish to buy online still expect to find product information on a business&rsquo; website — 62% said they browse online before purchasing a product in store.</p>
                            <p>If you haven&rsquo;t considered selling online, just think about the size of the audience you&rsquo;re missing out on. <a href="/ecommerce/">eCommerce </a>allows you to sell your products to anywhere in the world, meaning you are no longer restricted to the local area. This equates to incredible potential for increased sales and profits.</p>
                            <p>Many small businesses have realised this potential, and have chosen to sell their products on eBay or even via their Facebook page. This does not give an impression of professionalism. The main benefit of <a href="/ecommerce/">eCommerce</a> is that it allows the smallest businesses to compete with the largest — you&rsquo;d never see a large, successful business sending their customers to eBay to buy their products. It&rsquo;s best to have an <a href="/ecommerce/">eCommerce</a> solution integrated with your business website.</p>
                            <p>This means you can manage your whole sales process through your site, from advertising your products to taking payment and organising delivery.</p>
                        </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- What We Do Two Area end -->




<!-- Call to Action Area start -->
<section class="call-to-action-area bgc-black pt-80 pb-50">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title text-white mb-25 wow fadeInUp delay-0-2s">
                    <h2>Let’s Design Your New Website</h2>
                    <p>Do you want to have a website that stands out and impresses your clients? Then we are ready to help! Click the button below to contact us and discuss your ideas.</p>
                </div>
            </div>
            <div class="col-lg-3 text-lg-end">
                <a href="contact-us" class="theme-btn style-two mb-30 wow fadeInUp delay-0-4s">Let’s Get Started <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer')
