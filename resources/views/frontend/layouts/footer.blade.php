<!-- footer area start -->
<footer class="main-footer footer-two pt-80 bgc-lighter">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="footer-widget widget_about me-md-5 wow fadeInUp delay-0-2s">
                    <div class="footer-logo mb-25">
                        <a href="index.html"><img src="{{ asset('frontend/images/logos/logo.png') }}" alt="Logo"></a>
                    </div>
                    <p>
                        If you are looking for the best web design, development and digital marketing services for your company, then you have come to the right place. Come and experience the touch of perfection, and we deliver right on time.
                    </p>
                    <div class="social-style-two pt-5">
                      <a href="http://facebook.com/noblecontracts"><i class="fab fa-facebook"></i></a>
                      <a href="http://twitter.com/noble_somto"><i class="fab fa-twitter"></i></a>
                      <a href="http://linkedin.com/somtochukwu-noble-ifejika"><i class="fab fa-linkedin"></i></a>
                      <a href="http://instagram.com/noblesomto"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="list-style-two">
                        <li><a href="ecommerce">Ecommerce</a></li>
                        <li><a href="sms-marketing">SMS Marketing</a></li>
                        <li><a href="email-marketing">Email Marketing</a></li>
                        <li><a href="digital-marketing">Digital Marketing</a></li>
                        <li><a href="mobile-apps">Mobile Apps</a></li>
                        <li><a href="web-development">Web Development</a></li>
                        <li><a href="social-media">Socail Media Marketing</a></li>
                        <li><a href="seo">SEO</a></li>
                        <li><a href="sales-lead">Nigeria Email & GSM Database</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-8">
                <div class="footer-widget widget_newsletter wow fadeInUp delay-0-6s">
                    <h4 class="footer-title">Newsletter</h4>
                    <p>Sing up to get more every updates</p>
                    <form action="#">
                        <input type="email" placeholder="Enter email" required>
                        <button class="theme-btn">Subscribe Now <i class="fas fa-angle-double-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom mt-30 pt-25 pb-10">
        <div class="container">
            <div class="copyright-text text-center">
                <p>© Copyright {{ date('Y') }} Noble Contracts. All right reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->


<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
<div id="myButton"></div>
</div>
<!--End pagewrapper-->
   
   <script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '07031525786',
            popupMessage: 'Hello, how can we help you?',
            message: "I'd like a website",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome to Noble Contracts!',
            headerColor: 'darkgreen',
            backgroundColor: 'crimson',
            buttonImage: '<img src="{{ asset('frontend/images/whatsapp.svg') }}" />'
        });
    });
</script>    
    
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('frontend/js/appear.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <!-- Image Loader -->
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Type Writer -->
    <script src="{{ asset('frontend/js/jquery.animatedheadline.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('frontend/js/circle-progress.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>

</body>

</html>