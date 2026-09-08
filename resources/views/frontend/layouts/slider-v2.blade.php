@php
    $heroSlides = [
        [
            'eyebrow' => 'Software, SaaS &amp; AI Solutions for Modern Businesses',
            'headline' => 'Build Software. Launch SaaS. Integrate AI.',
            'body' => 'We design and develop custom software, scalable SaaS platforms and AI-powered solutions that turn business ideas into real digital products.',
            'image' => asset('frontend/images/hero-v2/slide1.jpg'),
        ],
        [
            'eyebrow' => 'Have a SaaS Idea? We Can Build It.',
            'headline' => 'Scalable SaaS Platforms, From Idea to Launch',
            'body' => "Product planning, UI/UX, architecture, backend/frontend development, billing and deployment — CleanPilot and BotWave are proof this isn't aspirational.",
            'image' => asset('frontend/images/hero-v2/slide2.jpg'),
        ],
        [
            'eyebrow' => 'Make Your Software Smarter',
            'headline' => 'AI Integration for Real Business Impact',
            'body' => 'AI chatbots, AI agents, AI search, document intelligence and LLM integrations — as built into BotWave, VerifyMe+ and ScanOriginal.',
            'image' => asset('frontend/images/hero-v2/slide3.jpg'),
        ],
    ];
    $heroFirst = $heroSlides[0];
@endphp
<section id="hero-v2" class="hero-v2 relative bg-[#12141a] overflow-hidden">
    <div class="hero-v2-glow hero-v2-glow--tr" aria-hidden="true"></div>
    <div class="hero-v2-glow hero-v2-glow--tl" aria-hidden="true"></div>

    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 items-stretch min-h-[560px] md:min-h-[640px] lg:min-h-[680px]">
        <div class="flex flex-col justify-center gap-6 px-6 md:px-12 lg:px-16 py-16 md:py-20 relative">
            <div class="hidden md:block w-5 h-5 rounded-full border-2 border-white/50 absolute top-6 left-8 lg:left-16"></div>

            <div id="hero-v2-eyebrow" class="hero-v2-fade text-white/70 text-base font-medium">{!! $heroFirst['eyebrow'] !!}</div>
            <h1 id="hero-v2-headline" class="hero-v2-fade font-bold text-white text-[34px] sm:text-[42px] md:text-[48px] lg:text-[56px] leading-[1.1] max-w-xl m-0">{{ $heroFirst['headline'] }}</h1>
            <p id="hero-v2-body" class="hero-v2-fade text-white/60 text-base leading-relaxed max-w-lg m-0">{{ $heroFirst['body'] }}</p>

            <div class="flex flex-wrap gap-4 mt-2">
                <a href="/start-a-project" class="hero-v2-btn hero-v2-btn--solid">Start a Project <span>&raquo;</span></a>
                <a href="/our-work" class="hero-v2-btn hero-v2-btn--outline">View Our Work <span>&raquo;</span></a>
            </div>

            <div id="hero-v2-dots" class="flex gap-2 mt-5">
                @foreach ($heroSlides as $i => $slide)
                <button type="button" class="hero-v2-dot{{ $i === 0 ? ' is-active' : '' }}" data-index="{{ $i }}" aria-label="Go to slide {{ $i + 1 }}"></button>
                @endforeach
            </div>
        </div>

        <div class="relative min-h-[280px] md:min-h-0 overflow-hidden">
            <img id="hero-v2-image" src="{{ $heroFirst['image'] }}" alt="{{ $heroFirst['headline'] }}" class="hero-v2-fade absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 pointer-events-none hero-v2-fade-side"></div>
            <div class="absolute inset-0 pointer-events-none hero-v2-fade-bottom md:hidden"></div>
        </div>
    </div>
</section>

<script type="application/json" id="hero-v2-data">
    {!! json_encode($heroSlides) !!}
</script>
