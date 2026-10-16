@props(['field'])

<a href="{{ request()->fullUrlWithQuery(['sort' => $field, 'order' => request('sort') == $field && request('order') == 'asc' ? 'desc' : 'asc']) }}"
    {{ $attributes->merge() }}>

    {{ $slot }}

    <span class="text-primary-dark">
        @if(request('sort') == $field)
            {{ request('order') == 'asc' ? '↑' : '↓' }}
        @else
            <span class="opacity-60">↕</span>
        @endif
    </span>
</a>

