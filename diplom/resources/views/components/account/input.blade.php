@props([
    'label',
    'sublabel' => null,
    'name',
    'prevValue',
    'unit' => 'м³',
    'step' => '0.001',
    'placeholder' => '000.000',
    'isLarge' => false
])

<div {{ $attributes->merge(['class' => 'border p-10 flex flex-col justify-between transition-all group ' . ($isLarge ? 'col-span-12 lg:col-span-8 border-black min-h-[350px]' : 'col-span-12 lg:col-span-6 border-gray-300 hover:border-black')]) }}>

    <div class="flex justify-between items-start">
        <div>
            <p class="text-[10px] uppercase tracking-[0.4em] text-[#640d14] {{ $isLarge ? '' : 'group-hover:text-black transition-colors' }}">
                {{ $label }}
            </p>
            @if($isLarge && $sublabel)
                <h3 class="text-3xl font-light tracking-widest uppercase mt-2">{{ $sublabel }}</h3>
            @endif
        </div>
        <div class="text-right">
            <p class="text-[9px] uppercase text-gray-400 mb-1">{{ $isLarge ? 'Прошлое значение' : 'Было' }}</p>
            <p class="{{ $isLarge ? 'text-2xl' : 'text-sm' }} font-light text-[#640d14] italic tracking-tighter">
                .
            </p>
        </div>
    </div>

    <div>
        <input
            type="number"
            name="{{ $name }}"
            step="{{ $step }}"
            placeholder="{{ $placeholder }}"
            value="{{ old($name) }}"
            class="w-full bg-transparent border-b-2 {{ $isLarge ? 'border-black py-6 text-6xl' : 'border-gray-300 group-hover:border-black py-4 text-3xl' }} font-light outline-none transition-all placeholder:text-gray-100 tracking-tighter"
        >
    </div>
</div>

