@extends('admin.layout', ['title' => 'Quote Leads'])

@section('content')
<div class="flex flex-wrap items-center justify-between gap-4 mb-6">
    <h1 class="text-2xl font-bold">Quote Leads</h1>

    <form method="GET" class="flex items-center gap-2">
        <label for="status" class="text-sm text-ink/70">Status</label>
        <select name="status" id="status" onchange="this.form.submit()" class="border border-border-soft rounded px-3 py-2 text-sm">
            <option value="" {{ $status === '' ? 'selected' : '' }}>All</option>
            <option value="submitted" {{ $status === 'submitted' ? 'selected' : '' }}>Submitted</option>
            <option value="draft" {{ $status === 'draft' ? 'selected' : '' }}>Draft</option>
        </select>
    </form>
</div>

<div class="bg-white border border-border-soft rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-surface-alt text-ink/60 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Contact</th>
                    <th class="px-4 py-3">Service</th>
                    <th class="px-4 py-3">Budget</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Received</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border-soft">
                @forelse ($leads as $lead)
                <tr class="hover:bg-surface-alt cursor-pointer" onclick="window.location='{{ route('admin.quotes.show', $lead) }}'">
                    <td class="px-4 py-3 font-semibold">
                        <a href="{{ route('admin.quotes.show', $lead) }}" class="hover:text-accent">{{ $lead->name ?: '—' }}</a>
                    </td>
                    <td class="px-4 py-3 text-ink/70">
                        <div>{{ $lead->email ?: '—' }}</div>
                        <div>{{ $lead->phone ?: '' }}</div>
                    </td>
                    <td class="px-4 py-3 text-ink/70">{{ $lead->service_type ? \Illuminate\Support\Str::of($lead->service_type)->replace('_', ' ')->title() : '—' }}</td>
                    <td class="px-4 py-3 text-ink/70">{{ $lead->budget ? \Illuminate\Support\Str::of($lead->budget)->replace('_', ' ')->title() : '—' }}</td>
                    <td class="px-4 py-3">
                        <span class="inline-block rounded-full px-3 py-1 text-xs font-semibold {{ $lead->status === 'submitted' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ ucfirst($lead->status) }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-ink/70 whitespace-nowrap">{{ ($lead->submitted_at ?? $lead->created_at)?->format('d M Y, H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-10 text-center text-ink/50">No quote leads yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-6">
    {{ $leads->links() }}
</div>
@endsection
