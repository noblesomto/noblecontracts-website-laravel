@extends('admin.layout', ['title' => 'Log In'])

@section('content')
<div class="max-w-sm mx-auto mt-10">
    <div class="text-center mb-8">
        <img src="{{ asset('frontend/images/logos/logo.png') }}" alt="Noble IT Services" class="h-10 w-auto mx-auto mb-4">
        <h1 class="text-2xl font-bold">Admin Log In</h1>
    </div>

    @if ($errors->any())
    <div class="mb-6 rounded-lg border border-red-300 bg-red-50 p-4">
        <p class="font-bold text-red-700">{{ $errors->first() }}</p>
    </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST" class="bg-white border border-border-soft rounded-lg p-6 space-y-5">
        @csrf
        <div>
            <label for="email" class="block mb-2 font-semibold text-sm">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                class="w-full border border-border-soft rounded px-4 py-2">
        </div>
        <div>
            <label for="password" class="block mb-2 font-semibold text-sm">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full border border-border-soft rounded px-4 py-2">
        </div>
        <label class="flex items-center gap-2 text-sm text-ink/70">
            <input type="checkbox" name="remember"> Remember me
        </label>
        <button type="submit" class="theme-btn justify-center w-full">Log In</button>
    </form>
</div>
@endsection
