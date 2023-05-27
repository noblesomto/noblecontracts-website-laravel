@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<!-- Page Banner Start -->
<section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-orange text-center">
    <div class="container">
        <div class="banner-inner rpt-10">
            <h1 class="page-title wow fadeInUp delay-0-2s">Contact<span> us</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                    <li class="breadcrumb-item"><a href="/">home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
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

<!-- Contact Us Page Area start -->
        <section class="contact-us-page-area py-130">
            <div class="container">
                <div class="row mt20">
                    @if(session('status'))
                       <div class="alert alert-{{session('status')['type']}}">
                           <h3 class="text-danger">{{session('status')['text']}}</h3>
                       </div>
                   @endif
                </div>
            </div>
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-7">
                        <div class="contact-content rmb-65 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title style-two mb-15">Contact Us</span>
                                <h2>Let’s Start New Project or work Together! Contact With us</h2>
                            </div>
                            <p>If you have questions, comments, suggestion or interest in a type of service not listed here, contact our support team, we look forward to providing you additional information and discussing new and exciting services to meet your needs.</p>

                            <form id="contactForm" class="contactForm z-1 rel"  action="/contact-us" name="contactForm" method="post">
                                @csrf
                                <div class="row pt-15">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Michael C. Coleman" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="+000 (123) 456 88">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="form-group">
                                           <label for="select-subject">Select Requirments</label>
                                           <select name="subject" id="select-subject">
                                                <option value="website customize"="">Website customize</option>
                                                <option value="Web Design & Development" selected>Web Design & Development</option>
                                                <option value="Mobile Development">Mobile Development</option>
                                                <option value="SEO">SEO</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Write Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <strong>ReCaptcha:</strong>
                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                            @endif   
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group pt-5 mb-0">
                                            <button type="submit" class="theme-btn w-100">Send Message <i class="fas fa-angle-double-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-info wow fadeInLeft delay-0-2s">
                            <div class="contact-info-item style-two">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Location</span>
                                    <span class="text">Plot 3 hon Rufus  Oyedepo Sangotedo, Lagos</span>
                                </div>
                            </div>
                            <div class="contact-info-item style-two">
                                <div class="icon">
                                    <i class="far fa-envelope-open-text"></i>
                                </div>
                                <div class="content">
                                    <span class="title">email address</span>
                                    <span class="text">
                                        <a href="mailto:contact@noblecontracts.com">contact@noblecontracts.com</a><br>
                                        <a href="/">www.noblecontracts.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="contact-info-item style-two">
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Phone Number</span>
                                    <span class="text">
                                        Call <a href="calto:(234) 703 152 5786">(234) 703 152 5786</a><br>
                                        Whatsapp : +234 703 152 5786
                                    </span>
                                </div>
                            </div>
                            <div class="follow-us">
                                <h4>Follow Us</h4>
                                <div class="social-style-two">
                                    <a href="http://facebook.com/noblecontracts"><i class="fab fa-facebook"></i></a>
                                      <a href="http://twitter.com/noble_somto"><i class="fab fa-twitter"></i></a>
                                      <a href="http://linkedin.com/somtochukwu-noble-ifejika"><i class="fab fa-linkedin"></i></a>
                                      <a href="http://instagram.com/noblesomto"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Page Area end -->

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
