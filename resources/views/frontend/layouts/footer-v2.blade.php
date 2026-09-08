<footer class="bg-surface-alt pt-20">
    <div class="container-nb pb-16">
        <div class="flex flex-wrap justify-between gap-12">
            <div class="w-full lg:w-1/3" data-reveal>
                <a href="/"><img src="{{ asset('frontend/images/logos/logo.png') }}" width="700" height="281" loading="lazy" class="h-10 w-auto mb-6" alt="Noble IT Services"></a>
                <p class="text-ink/70">Noble IT Services builds custom software, SaaS platforms and AI-powered solutions for businesses and entrepreneurs &mdash; from early idea through launch and continuous improvement.</p>
                <div class="flex gap-3 mt-6">
                    <a href="https://facebook.com/noblecontracts" aria-label="Facebook" target="_blank" rel="noopener" class="footer-social-v2"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/noble_somto" aria-label="Twitter" target="_blank" rel="noopener" class="footer-social-v2"><i class="fab fa-twitter"></i></a>
                    <a href="https://linkedin.com/in/somtochukwu-noble-ifejika" aria-label="LinkedIn" target="_blank" rel="noopener" class="footer-social-v2"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/noblesomto" aria-label="Instagram" target="_blank" rel="noopener" class="footer-social-v2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="w-full lg:w-1/3" data-reveal>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <div class="flex gap-x-8">
                    <ul class="space-y-2 text-ink/70">
                        <li><a href="/custom-software" class="hover:text-accent">Custom Software</a></li>
                        <li><a href="/ai-integration" class="hover:text-accent">AI Integration</a></li>
                        <li><a href="/api-integration" class="hover:text-accent">API &amp; System Integration</a></li>
                        <li><a href="/cloud-deployment" class="hover:text-accent">Cloud &amp; Deployment</a></li>
                        <li><a href="/products" class="hover:text-accent">Products</a></li>
                        <li><a href="/sales-lead" class="hover:text-accent">Nigeria Email &amp; GSM Database</a></li>
                    </ul>
                    <ul class="space-y-2 text-ink/70">
                        <li><a href="/saas-development" class="hover:text-accent">SaaS Development</a></li>
                        <li><a href="/services#web-mobile-applications" class="hover:text-accent">Web &amp; Mobile Applications</a></li>
                        <li><a href="/ui-ux-design" class="hover:text-accent">UI/UX &amp; Product Design</a></li>
                        <li><a href="/services#digital-growth" class="hover:text-accent">Digital Growth</a></li>
                        <li><a href="/our-work" class="hover:text-accent">Our Work</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4" data-reveal>
                <h4 class="font-bold mb-4">Newsletter</h4>
                <p class="text-ink/70 mb-4">Subscribe for insights on software, SaaS, AI and technology.</p>
                <form action="#" class="flex flex-col gap-3">
                    <label for="newsletter-email-v2" class="sr-only">Email address</label>
                    <input type="email" id="newsletter-email-v2" placeholder="Enter email" required class="border border-border-soft rounded px-4 py-2 bg-white">
                    <button class="theme-btn justify-center">Subscribe Now <i class="fas fa-angle-double-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="bg-white/60 border-t border-border-soft py-6">
        <p class="text-center text-ink/60">&copy; Copyright {{ date('Y') }} Noble IT Services. All right reserved</p>
    </div>
</footer>

<button id="scroll-top-v2" aria-label="Scroll to top" class="fixed bottom-6 right-6 w-11 h-11 rounded-full bg-accent text-white hidden items-center justify-center shadow-lg">
    <i class="fas fa-angle-double-up"></i>
</button>
<div id="myButton" data-icon="{{ asset('frontend/images/whatsapp.svg') }}"></div>
</div><!-- /min-h-screen flex flex-col from nav-v2.blade.php -->

<script src="{{ asset('frontend/js/vendor/embla-carousel.umd.js') }}"></script>
<script src="{{ asset('frontend/js/v2/nav-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/carousels-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/hero-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/scroll-animate-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/circle-progress-v2.js') }}"></script>
<script src="{{ asset('frontend/js/v2/whatsapp-widget-v2.js') }}"></script>
<script>
document.getElementById('scroll-top-v2').addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
window.addEventListener('scroll', function () {
    document.getElementById('scroll-top-v2').classList.toggle('flex', window.scrollY > 400);
    document.getElementById('scroll-top-v2').classList.toggle('hidden', window.scrollY <= 400);
});
</script>
</body>
</html>
