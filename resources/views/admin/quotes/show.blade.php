@extends('admin.layout', ['title' => $lead->name ?: 'Quote Lead'])

@section('content')
<a href="{{ route('admin.quotes.index') }}" class="text-sm text-ink/60 hover:text-accent">&larr; Back to all leads</a>

<div class="flex flex-wrap items-center justify-between gap-4 mt-4 mb-6">
    <h1 class="text-2xl font-bold">{{ $lead->name ?: 'Quote Lead' }}</h1>
    <span class="inline-block rounded-full px-3 py-1 text-xs font-semibold {{ $lead->status === 'submitted' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
        {{ ucfirst($lead->status) }}
    </span>
</div>

<div class="grid gap-6 lg:grid-cols-3">
    <div class="lg:col-span-2 bg-white border border-border-soft rounded-lg p-6 space-y-6">
        <div>
            <h2 class="text-sm font-semibold text-ink/50 uppercase mb-2">Project description</h2>
            <p class="whitespace-pre-line">{{ $lead->description ?: '—' }}</p>
        </div>
        @if ($lead->goal)
        <div>
            <h2 class="text-sm font-semibold text-ink/50 uppercase mb-2">Goal</h2>
            <p class="whitespace-pre-line">{{ $lead->goal }}</p>
        </div>
        @endif
        @if ($lead->additional_notes)
        <div>
            <h2 class="text-sm font-semibold text-ink/50 uppercase mb-2">Additional notes</h2>
            <p class="whitespace-pre-line">{{ $lead->additional_notes }}</p>
        </div>
        @endif
    </div>

    <div class="space-y-6">
        <div class="bg-white border border-border-soft rounded-lg p-6 space-y-4">
            <h2 class="text-sm font-semibold text-ink/50 uppercase">Contact</h2>
            <dl class="space-y-3 text-sm">
                <div>
                    <dt class="text-ink/50">Email</dt>
                    <dd><a href="mailto:{{ $lead->email }}" class="text-accent hover:underline">{{ $lead->email ?: '—' }}</a></dd>
                </div>
                <div>
                    <dt class="text-ink/50">Phone</dt>
                    <dd><a href="tel:{{ $lead->phone }}" class="text-accent hover:underline">{{ $lead->phone ?: '—' }}</a></dd>
                </div>
                <div>
                    <dt class="text-ink/50">Preferred contact</dt>
                    <dd>{{ $lead->contact_method ? ucfirst($lead->contact_method) : '—' }}</dd>
                </div>
            </dl>
        </div>

        <div class="bg-white border border-border-soft rounded-lg p-6 space-y-4">
            <h2 class="text-sm font-semibold text-ink/50 uppercase">Project details</h2>
            <dl class="space-y-3 text-sm">
                <div>
                    <dt class="text-ink/50">Service</dt>
                    <dd>{{ $lead->service_type ? \Illuminate\Support\Str::of($lead->service_type)->replace('_', ' ')->title() : '—' }}</dd>
                </div>
                <div>
                    <dt class="text-ink/50">Budget</dt>
                    <dd>{{ $lead->budget ? \Illuminate\Support\Str::of($lead->budget)->replace('_', ' ')->title() : '—' }}</dd>
                </div>
                <div>
                    <dt class="text-ink/50">Timeline</dt>
                    <dd>{{ $lead->timeline ? \Illuminate\Support\Str::of($lead->timeline)->replace('_', ' ')->title() : '—' }}</dd>
                </div>
            </dl>
        </div>

        <div class="bg-white border border-border-soft rounded-lg p-6 space-y-4">
            <h2 class="text-sm font-semibold text-ink/50 uppercase">Meta</h2>
            <dl class="space-y-3 text-sm">
                <div>
                    <dt class="text-ink/50">Submitted</dt>
                    <dd>{{ $lead->submitted_at?->format('d M Y, H:i') ?? '— (draft)' }}</dd>
                </div>
                <div>
                    <dt class="text-ink/50">Draft started</dt>
                    <dd>{{ $lead->created_at?->format('d M Y, H:i') }}</dd>
                </div>
                <div>
                    <dt class="text-ink/50">IP address</dt>
                    <dd>{{ $lead->ip_address ?: '—' }}</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
@endsection
