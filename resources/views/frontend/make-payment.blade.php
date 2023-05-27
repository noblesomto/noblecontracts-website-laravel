@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<!-- Page Banner Start -->
<section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-orange text-center">
    <div class="container">
        <div class="banner-inner rpt-10">
            <h1 class="page-title wow fadeInUp delay-0-2s">Make Payment of N{{ $amount }}  </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                    <li class="breadcrumb-item"><a href="/">home</a></li>
                    <li class="breadcrumb-item active">Make Payment</li>
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
                      
                        <h4>Make Payment of N{{ $amount }}</h4>
                     
                        <div class="body-section mt-20">
                            <h4>Bank: <strong>GTBank</strong></h4>
                              <h4>Account Number: <strong>0041804204</strong></h4>
                              <h4>Account Name: <strong>Ifejika Somtochukwu</strong></h4><br><br>

                              <h5>Send Proof of Payment to</h5>
                              <h4><a href="mailto:info@noblecontracts.com">info@noblecontracts.com</a></h4>
                              <h4>call: <a href="tel:0907 372 9787">0907 372 9787</a></h4>
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
                    <h4>Let’s Design Your New Website</h4>
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
