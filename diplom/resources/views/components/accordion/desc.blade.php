@props(['title' => '', 'titleClass' => '', 'itemClass' => '', 'id'])

<div {{ $attributes->merge(['class' => $itemClass]) }}>
    <div @click="active = (active === '{{ $id }}' ? null : '{{ $id }}')"
         class="cursor-pointer py-4 flex justify-between items-center hover:text-black transition-colors">
        <p class="uppercase {{ $titleClass }} text-sm">{{ $title }}</p>
        <img src="{{ asset('assets/star.svg') }}">
    </div>

    <div x-show="active === '{{ $id }}'" x-collapse.duration.400ms>
        <p class="text-xs uppercase text-gray-500 pb-5">
            {{ $slot }}
        </p>
    </div>
</div>
