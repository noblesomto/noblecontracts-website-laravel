@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<!-- Page Banner Start -->
<section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-orange text-center">
    <div class="container">
        <div class="banner-inner rpt-10">
            <h1 class="page-title wow fadeInUp delay-0-2s">Search Engine Optimization</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                    <li class="breadcrumb-item"><a href="/">home</a></li>
                    <li class="breadcrumb-item active">Search Engine Optimization</li>
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
                      
                        <h2>Search Engine Optimization</h2>
                        <img src="{{ asset('frontend/images/banner/seo.jpg') }}" class="img-fluid" alt="Search Engine Optimization">
                        
                        <div class="body-section mt-20">
                            <p>Our aim is not only to improve your website&rsquo;s visibility within the search engines, but also to drive traffic that will convert to your site. At <a href="/">Noble Contracts</a> we don&rsquo;t believe in humdrum techniques. We work hard and have a wealth of knowledge. This is what underpins our innovative thinking and creativity, making sure we get you the best possible results.</p>
                            <p>We constantly monitor the Google algorithm and, with our fingers firmly on the pulse, you can rest assured that we&rsquo;re doing the very best for your <a href="/digital-marketing">online marketing</a>. Whether you&rsquo;re an e-commerce site looking to increase sales or you just want a boost in site traffic, <a href="/">Noble Contract</a>&rsquo;s got your <a href="/seo">SEO campaign</a> sorted. A well-planned strategy that delivers high-quality results time and time again.</p>
                            <p>Whether you are looking to dominate local search, capitalise on mobile <a href="/seo">SEO</a>, improve your conversions through CRO or you&rsquo;r just looking for an<a href="/seo"> SEO </a>audit to find out exactly where your site is at we can help.</p>
                            <p>Even if you have been led astray in the past and have received a Google penalty we can help. With our 100% success rate in Google penalty removal our backlink analysis and removal service can help get your site back in top form again.</p>
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
