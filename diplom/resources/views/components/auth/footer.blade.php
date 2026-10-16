@props(['route'])
<div class="mt-5 text-center">
    <a href="{{ $route }}"
        class="text-xs uppercase tracking-widest">
        {{ $slot }}
    </a>
</div>
