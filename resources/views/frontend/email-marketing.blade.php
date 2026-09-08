@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>Email <span class="text-accent-cyan">Marketing</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">Email Marketing</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto" data-reveal>
        <img src="{{ asset('frontend/images/banner/ecomm.jpg') }}" class="rounded-lg w-full mb-8" alt="Email Marketing">
        <div class="space-y-4 text-ink/70">
            <p>With the overwhelming breakthrough of social media, search engine optimization and mobile marketing, it's safe to say email marketing is on the verge of death, right? Wrong. Email marketing is alive and well, and it's arguably the most profitable means of marketing. Here's why:</p>
            <p>Email marketing presents more opportunities for your business and drives a better return on investment. With email marketing, your business can create deeper relationships with a wider audience at a fraction of the cost of traditional media.</p>
            <p>Email marketing solves all the inherent problems of non-targeted marketing. Gone are the days of placing an advertisement on television, on a diner placemat, or in a periodical with no control of who will see it. With email marketing, you have the ability to control exactly who sees an email by segmenting your contacts based on their lead status, demographics, location or any other data. Targeting emails ensures that your audience receives content suited specifically to his/her needs. Email marketing makes it simple to customize your message for each customer, fostering a higher conversion rate.</p>
            <p>With each email sent, consumers are exposed to your business and your brand. With strategic planning, smart design and targeted content, your business will consistently build value. In doing so, you stay top-of-mind with your audience. Then, when a customer needs products or services, your business stands a much better chance of turning those leads into clients and clients into loyal customers.</p>
            <p class="font-bold text-ink">Contact us today, let's discuss.</p>
        </div>
        <div class="bg-surface-alt rounded-lg p-6 mt-8">
            <p class="font-bold">Over 500,000 high quality Nigerian emails.</p>
            <p class="font-bold mt-1">Graduates and working class emails.</p>
            <a href="/pay/getAuthURL/25000" class="theme-btn mt-4">Buy Now <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>

<!-- Call to Action Area start -->
<section class="bg-ink text-white py-16">
    <div class="container-nb flex flex-wrap items-center justify-between gap-8" data-reveal>
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-bold">Nigeria Email and GSM Database</h2>
            <p class="mt-3 text-white/70">Click below to buy now.</p>
        </div>
        <a href="/pay/getAuthURL/25000" class="theme-btn" style="background:transparent;border:1px solid #fff;">Buy Now <i class="fas fa-angle-double-right"></i></a>
    </div>
</section>
<!-- Call to Action Area End -->

@include('frontend.layouts.footer-v2')
