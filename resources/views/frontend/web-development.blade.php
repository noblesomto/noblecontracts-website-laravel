@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<!-- Page Banner Start -->
<section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-orange text-center">
    <div class="container">
        <div class="banner-inner rpt-10">
            <h1 class="page-title wow fadeInUp delay-0-2s">Web Development</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                    <li class="breadcrumb-item"><a href="/">home</a></li>
                    <li class="breadcrumb-item active">Web Development</li>
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
<section class="ww-do-two-area py-30 rel z-1">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                <div class="ww-do-two-content rmb-65 wow fadeInUp delay-0-2s">
                    <div class="section-title mb-30">
                      
                        <h2>Web Development</h2>
                        <img src="{{ asset('frontend/images/banner/responsive-web-design.jpg') }}" class="img-fluid" alt="Mobile Apps">
                        
                        <div class="body-section mt-20">
                            <p><a href="/">Noble Contracts</a> has been on the fore front of <a href="/web-development">web designs in Nigeria</a>, Our quality as well as business driven <a href="/web-development">web designs</a> distinguish us from continental web Design Companies.</p>
                            <p>At <a href="/web-development">Noble Contracts</a> we don&rsquo;t just give you a beautiful deign, our team of web strategists, designers, developers, and project manager&rsquo;s work together to help clients meet their business objectives.</p>
                            <p>Over the years we have designed lots of websites including from corporate websites, online stores, blogs, and product showcase websites.</p>
                            <h5><strong>Our web design and development service covers:</strong></h5>
                            <ul class="list-style-three">
                            <li>Corporate Website Design</li>
                            <li>Marketing Website Design</li>
                            <li>Responsive Web Design</li>
                            <li>eCommerce Web Development</li>
                            <li>Custom Web Application Development</li>
                            <li>Blog Design</li>
                            <li>Forum Development</li>
                            <li>Classified Ads</li>
                            <li>Online Community website design</li>
                            </ul>
                            <p>And much more…</p>
                            <p>If you are looking for the best <a href="/web-development"><strong>web design services</strong></a> and <a href="/digital_marketing/">Digital marketing</a> services for your products and services, then <a href="/"><strong>Noble Contracts</strong></a> is the right place for you.</p>
                        </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- What We Do Two Area end -->


<!-- Project Area start -->
<section class="project-area-three py-10 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg10">
                <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Recent Projects</span>
                    <h2>Look at latest works gallery</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="project-three-active">
        <div class="project-item style-two wow fadeInUp delay-0-2s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/oracletv.jpg') }}" alt="Project">
                <div class="project-over">
                    <a class="details-btn" href="https://oraclefilms.tv/" target="_blank"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="https://oraclefilms.tv/">Oraclefilms TV</a></h4>
                <span class="category">Web Software</span>
            </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-4s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/washgate.jpg') }}" alt="Project">
                <div class="project-over">
                    <a class="details-btn" href="http://washgateapartments.com/" target="_blank"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="http://washgateapartments.com/">Washgate Apartments</a></h4>
                <span class="category">Website Design</span>
            </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-6s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/fhs.jpg') }}" alt="Project">
                <div class="project-over">
                    <a class="details-btn" href="https://fhhomecare.com/" target="_blank"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="https://fhhomecare.com/">FirstHealth Homecare Services</a></h4>
                <span class="category">Website Design</span>
            </div>
        </div>
        <div class="project-item style-two wow fadeInUp delay-0-8s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/boya.jpg') }}" alt="Project">
                <div class="project-over">
                    <a class="details-btn" href="https://boyaapartments.com.ng/" target="_blank"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="https://boyaapartments.com.ng/">Boya Apartments</a></h4>
                <span class="category">Web Software</span>
            </div>
        </div>

        <div class="project-item style-two wow fadeInUp delay-0-8s">
            <div class="project-iamge">
                <img src="{{ asset('frontend/images/portfolio/simplygift-shop.jpg') }}" alt="Project">
                <div class="project-over">
                    <a class="details-btn" href="https://shop.simplygifts.com.ng/" target="_blank"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="project-content">
                <h4><a href="https://shop.simplygifts.com.ng/">Simply Gifts Store</a></h4>
                <span class="category">Ecommerce Website</span>
            </div>
        </div>
    </div>
</section>
<!-- Project Area end -->


<!-- Features Area start -->
        <section class="features-area pb-100 rel z-1">
            <div class="container">
               <div class="section-title text-center mb-50">
                    <span class="sub-title mb-15">Technology Features</span>
                    <h2>Full Potential Modern Features</h2>
                </div>
                <div class="row row-cols-xl-7 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 justify-content-center">
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/logo1.png') }}" alt="Logo">
                            </div>
                            <h5>Bootstrap</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/logo2.png') }}" alt="Logo">
                            </div>
                            <h5>HTML</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/logo3.png') }}" alt="Logo">
                            </div>
                            <h5>CSS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/laravel.png') }}" alt="Logo">
                            </div>
                            <h5>Laravel</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/vue.png') }}" alt="Logo">
                            </div>
                            <h5>Vue Js</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/logo6.png') }}" alt="Logo">
                            </div>
                            <h5>React JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('frontend/images/features/django.png') }}" alt="Logo">
                            </div>
                            <h5>Django</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Area end -->





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
