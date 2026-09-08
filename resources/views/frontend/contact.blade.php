@include('frontend.layouts.header-v2')
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Contact <span class="text-accent-cyan">Us</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Contact Us Page Area start -->
<section class="py-20">
    <div class="container-nb">
        @if(session('status'))
        <div class="mb-8 rounded-lg border border-{{ session('status')['type'] === 'success' ? 'green-300 bg-green-50' : 'red-300 bg-red-50' }} p-4">
            <p class="font-bold {{ session('status')['type'] === 'success' ? 'text-green-700' : 'text-red-700' }}">{{ session('status')['text'] }}</p>
        </div>
        @endif

        <div class="flex flex-wrap justify-between gap-12">
            <div class="w-full lg:w-[calc(58%-1.5rem)]" data-reveal>
                <span class="text-accent uppercase text-sm font-semibold">Contact Us</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-5">Let's Start a New Project or Work Together!</h2>
                <p class="text-ink/70 mb-8">If you have questions, comments, suggestions or interest in a type of service not listed here, contact our support team &mdash; we look forward to providing you additional information and discussing new and exciting services to meet your needs.</p>

                <form id="contactForm" class="contactForm" action="/contact-us" name="contactForm" method="post">
                    @csrf
                    <div class="flex flex-wrap gap-6">
                        <div class="w-full md:w-[calc(50%-0.75rem)]">
                            <label for="name" class="block mb-2 font-semibold">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full border border-border-soft rounded px-4 py-2.5" value="" placeholder="Michael C. Coleman" required data-error="Please enter your name">
                        </div>
                        <div class="w-full md:w-[calc(50%-0.75rem)]">
                            <label for="email" class="block mb-2 font-semibold">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full border border-border-soft rounded px-4 py-2.5" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                        </div>
                        <div class="w-full md:w-[calc(50%-0.75rem)]">
                            <label for="phone" class="block mb-2 font-semibold">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="w-full border border-border-soft rounded px-4 py-2.5" value="" placeholder="+000 (123) 456 88">
                        </div>
                        <div class="w-full md:w-[calc(50%-0.75rem)]">
                            <label for="select-subject" class="block mb-2 font-semibold">Select Requirements</label>
                            <select name="subject" id="select-subject" class="w-full border border-border-soft rounded px-4 py-2.5">
                                <option value="website customize">Website customize</option>
                                <option value="Web Design & Development" selected>Web Design &amp; Development</option>
                                <option value="Mobile Development">Mobile Development</option>
                                <option value="SEO">SEO</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="message" class="block mb-2 font-semibold">Write Message</label>
                            <textarea name="message" id="message" class="w-full border border-border-soft rounded px-4 py-2.5" rows="4" placeholder="Write Message" required data-error="Please enter your Message"></textarea>
                        </div>
                        <div class="w-full">
                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-red-600 block mt-2">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>
                        <div class="w-full">
                            <button type="submit" class="theme-btn w-full justify-center">Send Message <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-full lg:w-[calc(42%-1.5rem)]" data-reveal>
                <div class="bg-surface-alt rounded-2xl p-8 space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="contact-info-badge-v2"><i class="fal fa-map-marker-alt text-white"></i></div>
                        <div>
                            <span class="block text-ink/60 text-sm">Location</span>
                            <b class="font-normal">Plot 3 hon Rufus Oyedepo Sangotedo, Lagos</b>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="contact-info-badge-v2"><i class="far fa-envelope-open-text text-white"></i></div>
                        <div>
                            <span class="block text-ink/60 text-sm">Email Address</span>
                            <b class="font-normal block"><a href="mailto:info@nobleitservices.ng" class="hover:text-accent">info@nobleitservices.ng</a></b>
                            <b class="font-normal block"><a href="/" class="hover:text-accent">www.nobleitservices.ng</a></b>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="contact-info-badge-v2"><i class="far fa-phone text-white"></i></div>
                        <div>
                            <span class="block text-ink/60 text-sm">Phone Number</span>
                            <b class="font-normal block">Call <a href="callto:+2347031525786" class="hover:text-accent">(234) 703 152 5786</a></b>
                            <b class="font-normal block">WhatsApp: +234 703 152 5786</b>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-border-soft">
                        <h4 class="font-bold mb-3">Follow Us</h4>
                        <div class="flex gap-3">
                            <a href="https://facebook.com/noblecontracts" target="_blank" rel="noopener" aria-label="Facebook" class="footer-social-v2"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/noble_somto" target="_blank" rel="noopener" aria-label="Twitter" class="footer-social-v2"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/in/somtochukwu-noble-ifejika" target="_blank" rel="noopener" aria-label="LinkedIn" class="footer-social-v2"><i class="fab fa-linkedin"></i></a>
                            <a href="https://instagram.com/noblesomto" target="_blank" rel="noopener" aria-label="Instagram" class="footer-social-v2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Page Area end -->

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
