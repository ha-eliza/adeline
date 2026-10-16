@props(['dark' => false])

@php
    $colorClass = $dark ? 'border-primary-light hover:bg-[#FFF8E8] hover:text-black' : 'border-primary-dark hover:bg-[#24292E] hover:text-white';
@endphp

<div class="mt-20 flex justify-center">
    <a href="#" {{ $attributes->merge(['class' => "border-2 px-10 py-4 text-xs font-semibold tracking-widest uppercase transition-colors duration-300 {$colorClass}"]) }}>
        {{ $slot }}
    </a>
</div>
