@props(['containerType' => 'max-w'])

@php
    switch($containerType) {
        case 'max-w':
            $containerClass = 'max-w-7xl mx-auto';
            break;
        case 'mx-50':
            $containerClass = 'max-w-[1480px] pl-8';
            break;
        default:
            $containerClass = 'max-w-7xl mx-auto';
    }
@endphp

<section {{ $attributes->merge(['class' => ($props['class'] ?? '') . ' bg-primary-light py-20']) }}>
    <div class="{{ $containerClass }}">
        {{ $slot }}
    </div>
</section>
