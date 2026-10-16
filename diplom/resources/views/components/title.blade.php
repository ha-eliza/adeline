@props(['dark' => false])

@php
    $colorClass = $dark ? 'text-primary-light' : 'text-primary-dark';
@endphp

<h1 {{ $attributes->merge(['class' => "text-center uppercase text-5xl my-10 {$colorClass}"]) }}>
    {{ $slot }}
</h1>
