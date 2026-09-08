<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ $title ?? 'Admin' }} | Noble IT Services</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;600&family=Kumbh+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-subset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/tailwind-v2.css') }}?v={{ @filemtime(public_path('frontend/css/tailwind-v2.css')) }}">
</head>
<body class="bg-surface-alt min-h-screen">

    @auth
    <header class="bg-ink text-white">
        <div class="container-nb flex items-center justify-between py-4">
            <a href="{{ route('admin.quotes.index') }}" class="flex items-center gap-2 font-bold">
                <img src="{{ asset('frontend/images/logos/logo.png') }}" alt="Noble IT Services" class="h-7 w-auto">
                <span class="text-white/50 font-normal">/ Admin</span>
            </a>
            <form action="{{ route('admin.logout') }}" method="POST" class="flex items-center gap-4">
                @csrf
                <span class="text-white/60 text-sm hidden sm:inline">{{ auth()->user()->email }}</span>
                <button type="submit" class="text-sm font-semibold text-white/80 hover:text-white">Log out <i class="fas fa-sign-out-alt ml-1"></i></button>
            </form>
        </div>
    </header>
    @endauth

    <main class="container-nb py-10">
        @yield('content')
    </main>

</body>
</html>
