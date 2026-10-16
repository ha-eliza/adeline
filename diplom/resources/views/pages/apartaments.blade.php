@extends('layouts.base')

@section('content')
    <x-light containerType="mx-50" class="pt-5em">
        <div class="flex my-10 gap-20 items-start">
            <div class="w-[35%]">
                <form id="filter-form" action="{{ url()->current() }}" method="GET" class="space-y-12 p-4">
                    <div class="flex justify-between pb-4">
                        @php
                            $count = $apartments->count();
                            $lastDigit = $count % 10;
                            $lastTwoDigits = $count % 100;

                            if ($lastTwoDigits >= 11 && $lastTwoDigits <= 19) {
                                $word = 'квартир';
                            } elseif ($lastDigit == 1) {
                                $word = 'квартира';
                            } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
                                $word = 'квартиры';
                            } else {
                                $word = 'квартир';
                            }
                        @endphp
                        <p>Найдено {{ $count }} {{ $word }}</p>
                        <a href="{{ route('pages.apartaments') }}">Отменить ×</a>
                    </div>
                    <div class="flex flex-col gap-10">
                        {{-- Дом --}}
                        <div x-data="{}">
                            <x-filter.title>Дом</x-filter.title>
                            <div class="flex flex-wrap gap-2 mt-6">
                                @foreach ($availableHouses as $house)
                                    <x-filter.input name="houses" :value="$house">
                                        {{ $house }}
                                    </x-filter.input>
                                @endforeach
                            </div>
                        </div>

                        {{-- Комнаты --}}
                        <div x-data="{}">
                            <x-filter.title>Комнат</x-filter.title>
                            <div class="flex flex-wrap gap-2 mt-6">
                                @foreach ($availableBedrooms as $room)
                                    <x-filter.input name="rooms" :value="$room">
                                        {{ $room }}
                                    </x-filter.input>
                                @endforeach
                            </div>
                        </div>

                        {{-- ЭТАЖ --}}
                        <div x-data="rangeSlider({
                            currentMin: {{ request('floor_from', $minFloor) }},
                            currentMax: {{ request('floor_to', $maxFloor) }},
                            minLimit: {{ $minFloor }},
                            maxLimit: {{ $maxFloor }},
                            step: 1
                        })" x-init="init()" class="relative w-full">
                            <x-filter.title>Этаж</x-filter.title>
                            <div class="flex justify-between mb-4 text-sm">
                                <span x-text="'от ' + minVal"></span>
                                <span x-text="'до ' + maxVal"></span>
                            </div>
                            <div class="relative h-1 bg-gray-200 rounded-full">
                                <div class="absolute h-1 bg-black rounded-full"
                                    :style="'left: ' + minThumb + '%; right: ' + (100 - maxThumb) + '%'"></div>
                                <input type="range" x-model="minVal" @input="mintrigger"
                                    @change="$el.closest('form').submit()" :min="minLimit" :max="maxLimit"
                                    step="1"
                                    class="absolute w-full h-1 appearance-none bg-transparent pointer-events-none z-20">
                                <input type="range" x-model="maxVal" @input="maxtrigger"
                                    @change="$el.closest('form').submit()" :min="minLimit" :max="maxLimit"
                                    step="1"
                                    class="absolute w-full h-1 appearance-none bg-transparent pointer-events-none z-20">
                            </div>
                            <input type="hidden" name="floor_from" :value="minVal">
                            <input type="hidden" name="floor_to" :value="maxVal">
                        </div>

                        {{-- ПЛОЩАДЬ  --}}
                        <div x-data="rangeSlider({
                            currentMin: {{ request('area_from', $minArea) }},
                            currentMax: {{ request('area_to', $maxArea) }},
                            minLimit: {{ $minArea }},
                            maxLimit: {{ $maxArea }},
                            step: 1
                        })" x-init="init()" class="relative w-full">
                            <x-filter.title>Площадь, м²</x-filter.title>
                            <div class="flex justify-between mb-4 text-sm">
                                <span x-text="'от ' + minVal"></span>
                                <span x-text="'до ' + maxVal"></span>
                            </div>
                            <div class="relative h-1 bg-gray-200 rounded-full">
                                <div class="absolute h-1 bg-black rounded-full"
                                    :style="'left: ' + minThumb + '%; right: ' + (100 - maxThumb) + '%'"></div>
                                <input type="range" x-model="minVal" @input="mintrigger"
                                    @change="$el.closest('form').submit()" :min="minLimit" :max="maxLimit"
                                    step="1"
                                    class="absolute w-full h-1 appearance-none bg-transparent pointer-events-none z-20">
                                <input type="range" x-model="maxVal" @input="maxtrigger"
                                    @change="$el.closest('form').submit()" :min="minLimit" :max="maxLimit"
                                    step="1"
                                    class="absolute w-full h-1 appearance-none bg-transparent pointer-events-none z-20">
                            </div>
                            <input type="hidden" name="area_from" :value="minVal">
                            <input type="hidden" name="area_to" :value="maxVal">
                        </div>

                        {{-- СТОИМОСТЬ --}}
                        <div x-data="rangeSlider({
                            currentMin: {{ request('price_from', $minPrice) }},
                            currentMax: {{ request('price_to', $maxPrice) }},
                            minLimit: {{ $minPrice }},
                            maxLimit: {{ $maxPrice }},
                            step: 100000
                        })" x-init="init()" class="relative w-full">
                            <x-filter.title>Стоимость, ₽</x-filter.title>

                            <div class="flex justify-between mb-4 text-sm">
                                <span x-text="'от ' + Number(minVal).toLocaleString()"></span>
                                <span x-text="'до ' + Number(maxVal).toLocaleString()"></span>
                            </div>
                            <div class="relative h-1 bg-gray-200 rounded-full">
                                <div class="absolute h-1 bg-black rounded-full"
                                    :style="'left: ' + minThumb + '%; right: ' + (100 - maxThumb) + '%'"></div>
                                <input type="range" x-model="minVal" @input="mintrigger"
                                    @change="$el.closest('form').submit()" :min="minLimit" :max="maxLimit"
                                    step="100000"
                                    class="absolute w-full h-1 appearance-none bg-transparent pointer-events-none z-20">
                                <input type="range" x-model="maxVal" @input="maxtrigger"
                                    @change="$el.closest('form').submit()" :min="minLimit" :max="maxLimit"
                                    step="100000"
                                    class="absolute w-full h-1 appearance-none bg-transparent pointer-events-none z-20">
                            </div>
                            <input type="hidden" name="price_from" :value="minVal">
                            <input type="hidden" name="price_to" :value="maxVal">
                        </div>

                        {{-- Отдел --}}
                        <div x-data="{}">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <div class="relative flex items-center justify-center shrink-0">
                                    <input type="checkbox" name="with_finishing" value="1"
                                        class="peer appearance-none w-6 h-6 border border-gray-300 checked:bg-black checked:border-black transition-all"
                                        @change="$el.closest('form').submit()"
                                        {{ request('with_finishing') ? 'checked' : '' }}>

                                    <!-- Иконка галочки (появляется при checked) -->
                                    <svg class="absolute top-1 left-1 w-4 h-4 text-white pointer-events-none opacity-0 peer-checked:opacity-100 transition-opacity"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="border-0 py-0 px-0 uppercase text-xs"> Только с отделкой (White Box)
                                </span>
                            </label>
                        </div>

                        {{-- Вид --}}
                        <div x-data="{}">
                            <x-filter.title>Вид</x-filter.title>
                            <div class="flex flex-wrap gap-2 mt-6">
                                @foreach ($availableViews as $view)
                                    <x-filter.input name="views" :value="$view">
                                        {{ $view }}
                                    </x-filter.input>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div x-data="{
                open: false,
                apartment: {},
                openModal(data) {
                    this.apartment = data;
                    this.open = true;
                }
            }" @keydown.escape.window="open = false" class="flex-1">

                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="p-4"><x-filter.sort field="number">№</x-filter.sort></th>
                            <th class="p-4"><x-filter.sort field="house">Дом</x-filter.sort></th>
                            <th class="p-4"><x-filter.sort field="floor">Этаж</x-filter.sort></th>
                            <th class="p-4"><x-filter.sort field="area">Площадь</x-filter.sort></th>
                            <th class="p-4"><x-filter.sort field="bedrooms">Комнат</x-filter.sort></th>
                            <th class="p-4"><x-filter.sort field="price">Стоимость</x-filter.sort></th>
                        </tr>
                        <tr>
                            <th class="py-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($apartments as $apartment)
                            <tr @click="openModal({{ $apartment->toJson() }})"
                                class="bg-primary-light odd:bg-primary-dark odd:text-primary-light cursor-pointer">
                                <td class="p-5 text-center">{{ $apartment->number }}</td>
                                <td class="p-5">{{ $apartment->house }}</td>
                                <td class="p-5 text-center">{{ $apartment->floor }}</td>
                                <td class="p-5 text-center">{{ $apartment->area }} м²</td>
                                <td class="p-5 text-center">{{ $apartment->bedrooms }}</td>
                                <td class="p-5">{{ number_format($apartment->price) }} ₽</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-20 text-center bg-primary-light/50">
                                    <div class="flex flex-col items-center gap-4">
                                        <x-mTitle>Квартир не найдено</x-mTitle>
                                        <x-p class="opacity-50">Попробуйте изменить запрос</x-p>
                                        <a href="{{ url()->current() }}"
                                            class="mt-4 px-6 py-2 border border-black hover:bg-black hover:text-white transition-all uppercase text-xs font-bold">Сбросить
                                            фильтр</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <template x-teleport="body">
                    <div x-show="open" class="fixed inset-0 z-[100] flex items-center justify-center p-4" x-cloak>
                        <div x-show="open" x-transition.opacity @click="open = false"
                            class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="relative bg-white w-[70%] p-8 shadow-2xl">
                            <button @click="open = false"
                                class="absolute -top-6 -right-6 w-20 h-20 flex items-center justify-center bg-primary-dark text-white transition-colors hover:bg-black z-20">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>

                            <div class="flex gap-20 items-center">
                                <div class="p-8 text-primary-black bg-white max-w-sm mx-auto font-sans">
                                    <div class="mb-8">
                                        <p class="text-[11px] text-gray-400 uppercase tracking-widest mb-1">
                                            Дом
                                        </p>
                                        <h2 class="text-2xl font-mono uppercase tracking-tight text-slate-900">
                                            <span x-text="apartment.house"></span>
                                        </h2>
                                    </div>

                                    <div class="mb-10">
                                        <span class="text-8xl font-bold tracking-tighter"
                                            x-text="apartment.number"></span>
                                    </div>

                                    <div class="grid grid-cols-3 gap-8 mb-10 items-end">
                                        <div>
                                            <p class="text-3xl font-bold tracking-tight" x-text="apartment.area"></p>
                                            <p class="text-[11px] text-gray-400 uppercase mt-1">м²</p>
                                        </div>
                                        <div>
                                            <p class="text-3xl font-bold tracking-tight" x-text="apartment.floor"></p>
                                            <p class="text-[11px] text-gray-400 uppercase mt-1">этаж</p>
                                        </div>
                                        <div>
                                            <p class="text-3xl font-bold tracking-tight" x-text="apartment.bedrooms"></p>
                                            <p class="text-[11px] text-gray-400 uppercase mt-1">комнат</p>
                                        </div>
                                    </div>

                                    <div class="mb-10">
                                        <p class="text-3xl font-bold tracking-tight mb-1">
                                            <span x-text="Number(apartment.price).toLocaleString('ru-RU')"></span> ₽
                                        </p>
                                        <p class="text-[13px] text-gray-400">При 100% оплате или ипотеке</p>
                                    </div>

                                    <div class="flex gap-8">
                                        <div class="pt-6">
                                            <p class="text-[11px] text-gray-400 uppercase font-bold tracking-widest mb-2">
                                                Вид
                                            </p>
                                            <span class="text-lg text-slate-800" x-text="apartment.view"></span>
                                        </div>

                                        <div class="pt-6">
                                            <p class="text-[11px] text-gray-400 uppercase font-bold tracking-widest mb-2">
                                                Отделка
                                            </p>
                                            <span class="text-lg text-slate-800" x-text="apartment.finishing"></span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between">
                                        <x-button class="items-start">Забронировать</x-button>
                                        <button class="mt-20 group flex items-center justify-center w-12 h-12 bg-white border border-primary-dark rounded-full hover:bg-primary-dark transition-all duration-300">
                                            <svg class="w-6 h-6 stroke-primary-dark fill-none group-hover:stroke-white group-hover:fill-white transition-colors duration-300"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="flex-1 h-auto ">
                                    <img :src="apartment.image_plan" alt="Планировка"
                                        class="max-w-full h-auto object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </x-light>
    <script>
        function rangeSlider(config) {
            return {
                minVal: config.currentMin,
                maxVal: config.currentMax,
                minLimit: config.minLimit,
                maxLimit: config.maxLimit,
                minThumb: 0,
                maxThumb: 100,

                init() {
                    this.updateThumbs();
                },

                mintrigger() {
                    this.minVal = Math.min(this.minVal, this.maxVal - config.step);
                    this.updateThumbs();
                },

                maxtrigger() {
                    this.maxVal = Math.max(this.maxVal, parseInt(this.minVal) + config.step);
                    this.updateThumbs();
                },

                updateThumbs() {
                    this.minThumb = ((this.minVal - this.minLimit) / (this.maxLimit - this.minLimit)) * 100;
                    this.maxThumb = ((this.maxVal - this.minLimit) / (this.maxLimit - this.minLimit)) * 100;
                }
            }
        }
    </script>
@endsection
