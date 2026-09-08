@include('frontend.layouts.header-v2')
@include('frontend.layouts.nav-v2')

<!-- Page Banner Start -->
<section class="pt-40 pb-24 text-center bg-ink text-white relative overflow-hidden">
    <div class="container-nb relative z-10">
        <h1 class="text-4xl font-bold" data-reveal>SMS <span class="text-accent-cyan">Marketing</span></h1>
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="flex justify-center gap-2 text-white/70">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li>/</li>
                <li class="text-white">SMS Marketing</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page Banner End -->

<!-- Intro -->
<section class="py-20">
    <div class="container-nb max-w-3xl mx-auto" data-reveal>
        <img src="{{ asset('frontend/images/banner/email-marketing-800x500.jpg') }}" class="rounded-lg w-full mb-8" alt="SMS Marketing">
        <div class="space-y-4 text-ink/70">
            <p>One of those reasons is that almost everyone has a cellphone and keeps it within an arm's reach at any point throughout the day! 97% of all texts are also read within the first 5 minutes. If you stop and think about it, that's incredibly powerful all by itself.</p>
            <p>SMS messaging is one of the fastest growing communications formats in Nigeria and the world &mdash; companies and individuals have discovered the power of contacting clients and friends quickly and economically using bulk SMS to send messages online to cell phones.</p>
            <p>Bulk SMS is simply text messaging on a large scale, using your own self-chosen sender name, being cheaper and more convenient than using a cell phone directly.</p>
            <p>Bulk SMS therefore serves as a convenient, cost effective and unified way of keeping all your activities in sync.</p>
        </div>

        <div class="flex flex-wrap gap-8 mt-8">
            <div>
                <h4 class="font-bold mb-2">Business</h4>
                <ul class="list-style-four text-ink/70">
                    <li>Notify your customers about your products and services</li>
                    <li>Keep them updated about new developments</li>
                    <li>Keep your employees on the same page with notices, reminders and schedules</li>
                    <li>Get closer to your customers with regular holiday greetings and best wishes</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Schools</h4>
                <ul class="list-style-four text-ink/70">
                    <li>Send notices to parents (PTA meetings)</li>
                    <li>Notify students and parents about changes in exam dates, holidays and fees</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Religious Bodies</h4>
                <ul class="list-style-four text-ink/70">
                    <li>Notify members of planned meetings and programmes</li>
                    <li>Inform selected groups about specific meetings</li>
                    <li>Publicize events and forthcoming programmes</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Politicians</h4>
                <ul class="list-style-four text-ink/70">
                    <li>As a means of telling the people who you are</li>
                    <li>And as a means of campaign</li>
                </ul>
            </div>
        </div>

        <div class="bg-surface-alt rounded-lg p-6 mt-8">
            <p class="font-bold">Up to 5 million Nigerian phone numbers.</p>
            <p class="font-bold mt-1">Phone numbers are categorized by state.</p>
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
