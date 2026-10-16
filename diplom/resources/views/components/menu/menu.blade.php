<a {{ $attributes->merge(['class' => 'flex flex-col space-y-2 cursor-pointer p-5 hover:bg-white/10']) }}>
    <span class="text-[14px] text-gray-400 font-mono tracking-widest">
        {{ $number }}
    </span>

    <h3 class="text-xl text-white font-light tracking-wide uppercase">
        {{ $title }}
    </h3>

    <div class="text-[14px] text-gray-400 leading-snug max-w-[220px]">
        {{ $slot }}
    </div>
</a>

