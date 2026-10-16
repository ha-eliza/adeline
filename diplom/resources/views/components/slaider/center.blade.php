@props(['images' => []])

<section {{ $attributes->merge(['class' => 'slaider relative h-[80vh] bg-primary-light']) }}>
    <div class="swiper mySwiper3 h-full">
        <div class="swiper-wrapper">
            @foreach ($images as $image)
                <div class="swiper-slide">
                    <img src="{{ asset($image) }}" class="w-full h-full object-cover" alt="">
                </div>
            @endforeach
        </div>
    </div>

    <div class="absolute inset-0 z-10 pointer-events-none">

        <div class="absolute -bottom-24 right-0 left-0 z-30 flex justify-end items-center p-4 pointer-events-auto">
            <div class="flex items-center space-x-4 mr-24">
                <div class="swiper-button-prev-three !relative !top-0 !left-0 cursor-pointer">
                    <svg width="87" height="52" viewBox="0 0 127 92" fill="none">
                        <path d="M126.504 46.2402H2.66433" stroke="#FFF" stroke-width="2.52734" />
                        <path d="M49.0498 1.06445L3.5578 46.5565L47.2627 -0.722649L49.0498 1.06445Z" fill="#FFF" />
                        <path d="M1.77051 46.5566L47.2625 92.0487L49.0496 90.2616L3.55761 44.7695L1.77051 46.5566Z" fill="#FFF" />
                    </svg>
                </div>
                <div class="swiper-pagination-three"></div>
                <div class="swiper-button-next-three !relative !top-0 !left-0 cursor-pointer">
                    <svg width="87" height="52" viewBox="0 0 127 92" fill="none">
                        <path d="M0.496246 46.2246H124.336" stroke="#FFF" stroke-width="2.52734" />
                        <path d="M77.9502 1.04882L123.442 46.5409L79.7373 -0.738274L77.9502 1.04882Z" fill="#FFF" />
                        <path d="M125.229 46.541L79.7375 92.033L77.9504 90.2459L125.229 46.541Z" fill="#FFF" />
                    </svg>
                </div>
            </div>
        </div>

        <div
            class="absolute -bottom-32 md:-bottom-32 left-24 z-20
                w-[80%] max-w-lg lg:max-w-xl
                bg-[#D1D9E0]/90 backdrop-blur-md
                p-10 md:p-14
                /* МЕНЯЕМ СКРУГЛЕНИЕ: теперь скруглены углы справа (tr и br) */
                rounded-tr-[100px] md:rounded-tr-[150px]
                rounded-bl-[100px] md:rounded-bl-[150px]">
            <div class="space-y-6 text-gray-900 px-10">
                <p class="text-sm md:text-base leading-relaxed opacity-80 pointer-events-auto">
                    <b>{{ $title }}</b>
                    <br><br>
                    {{ $slot }}
                </p>
            </div>
        </div>
    </div>
</section>
