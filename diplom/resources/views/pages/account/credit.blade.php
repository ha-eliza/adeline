@extends('layouts.account')

@section('accountContent')
    <div class="py-20 pl-8 max-w-5xl">
        <x-mTitle>Информация об оплате</x-mTitle>

        <div class="py-20 pl-8 w-full max-w-[1100px] min-h-screen bg-[#FFF8E8]" x-data="{ active: 'property' }">

            <div class="flex justify-between items-center pb-5">
                <x-mTitle>Итого к оплате</x-mTitle>
                <p class="text-4xl">12 450.00 ₽</p>
            </div>

            <div class="space-y-6">
                <!-- Секция 01: Ипотека -->
                <div class="border border-[#24292E] overflow-hidden bg-white shadow-sm">
                    <button @click="active = active === 'property' ? null : 'property'"
                        class="w-full flex justify-between items-center p-6 uppercase tracking-[0.2em] text-[11px] transition-all duration-500"
                        :class="active === 'property' ? 'bg-[#24292E] text-white' : 'bg-white text-[#24292E] hover:bg-[#FFF8E8]'">
                        <span class="flex items-center gap-4">
                            <span class="text-[8px] opacity-50"
                                :class="active === 'property' ? 'text-white' : 'text-[#640D14]'">01</span>
                            Оплата объекта / Ипотека
                        </span>
                        <div class="flex items-center gap-4">
                            <span class="font-bold text-[10px]"
                                :class="active === 'property' ? 'text-[#FFF8E8]' : 'text-[#640D14]'">65% ВЫКУПЛЕНО</span>
                            <svg class="w-4 h-4 transition-transform duration-500"
                                :class="active === 'property' ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>

                    <!-- Контент 01 -->
                    <div x-show="active === 'property'" x-collapse x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        class="p-10 border-t border-[#24292E]/10">

                        <div class="grid grid-cols-12 gap-16">
                            <div class="col-span-12 lg:col-span-7 space-y-10">
                                <div class="grid grid-cols-2 gap-10">
                                    <div>
                                        <p class="text-[9px] uppercase tracking-widest text-gray-400 mb-2">Стоимость</p>
                                        <p class="text-xl font-light tracking-tighter text-[#24292E]">18 450 000.00 ₽</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] uppercase tracking-widest text-[#640D14] mb-2 font-bold">
                                            Остаток</p>
                                        <p class="text-xl font-light tracking-tighter text-[#640D14]">6 240 000.00 ₽</p>
                                    </div>
                                </div>

                                <!-- Прогресс-бар -->
                                <div>
                                    <div
                                        class="flex justify-between text-[9px] uppercase tracking-widest mb-3 font-bold text-[#24292E]">
                                        <span>Прогресс владения</span>
                                        <span class="text-[#640D14]">Осталось 35%</span>
                                    </div>
                                    <div class="w-full h-[2px] bg-gray-100">
                                        <div class="h-full bg-[#640D14] transition-all duration-1000" style="width: 65%">
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-6 grid grid-cols-2 gap-10 border-t border-gray-100">
                                    <div>
                                        <p class="text-[9px] uppercase tracking-widest text-gray-400 mb-1">Срок до</p>
                                        <p class="text-sm font-bold tracking-widest text-[#24292E]">15 МАРТА 2026</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] uppercase tracking-widest text-gray-400 mb-1">К оплате</p>
                                        <p class="text-sm font-bold tracking-widest text-[#24292E]">85 400.00 ₽</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 lg:col-span-5 border-l border-[#24292E]/5 pl-10 space-y-8">
                                <p class="text-[10px] uppercase tracking-widest text-[#640D14] font-bold">Кредитные данные
                                </p>
                                <div class="space-y-3 text-[10px] uppercase tracking-widest italic text-[#24292E]">
                                    <p class="flex justify-between"><span>Банк:</span> <span class="font-bold">ВТБ</span>
                                    </p>
                                    <p class="flex justify-between"><span>Ставка:</span> <span class="font-bold">8.5%</span>
                                    </p>
                                </div>
                                <button
                                    class="w-full py-3 border border-[#24292E] text-[10px] uppercase tracking-widest hover:bg-[#24292E] hover:text-white transition-all">
                                    График платежей PDF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Секция 02: Ресурсы -->
                <div class="border border-[#24292E] overflow-hidden bg-white shadow-sm">
                    <button @click="active = active === 'counters' ? null : 'counters'"
                        class="w-full flex justify-between items-center p-6 uppercase tracking-[0.2em] text-[11px] transition-all duration-500"
                        :class="active === 'counters' ? 'bg-[#24292E] text-white' : 'bg-white text-[#24292E] hover:bg-[#FFF8E8]'">
                        <span class="flex items-center gap-4">
                            <span class="text-[8px] opacity-50"
                                :class="active === 'counters' ? 'text-white' : 'text-[#640D14]'">02</span>
                            Ресурсы по приборам учета
                        </span>
                        <div class="flex items-center gap-4">
                            <span class="font-bold text-[10px]">7 650.00 ₽</span>
                            <svg class="w-4 h-4 transition-transform duration-500"
                                :class="active === 'counters' ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>

                    <!-- Контент 02 -->
                    <div x-show="active === 'counters'" x-collapse x-transition:enter="transition ease-out duration-500"
                        class="p-10 border-t border-[#24292E]/10">

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                            <div class="space-y-6">
                                <div class="flex justify-between items-center border-b border-gray-50 pb-4">
                                    <div class="flex flex-col">
                                        <span
                                            class="text-[10px] uppercase tracking-widest font-bold text-[#24292E]">Холодная
                                            вода</span>
                                        <span
                                            class="text-[8px] uppercase text-green-600 font-bold italic tracking-tighter">●
                                            Подтверждено</span>
                                    </div>
                                    <span class="text-sm font-light text-[#24292E]">1 240.00 ₽</span>
                                </div>

                                <div
                                    class="flex justify-between items-center border-b border-gray-50 pb-4 opacity-40 grayscale">
                                    <div class="flex flex-col">
                                        <span class="text-[10px] uppercase tracking-widest text-[#24292E]">Горячая
                                            вода</span>
                                        <span class="text-[8px] uppercase text-[#640D14] font-bold italic">Ожидает
                                            проверки</span>
                                    </div>
                                    <span class="text-sm font-light text-[#24292E]">0.00 ₽</span>
                                </div>
                            </div>

                            <div class="bg-[#FFF8E8] p-8 flex flex-col justify-between border border-[#24292E]/5">
                                <p class="text-[9px] uppercase tracking-widest text-[#640D14] leading-relaxed font-bold">
                                    Внимание: начисления за ГВС появятся в списке после верификации диспетчером.
                                </p>
                                <a href="{{ route('account.chart') }}"
                                    class="text-[10px] uppercase border-b border-[#640D14] text-[#640D14] pb-1 w-fit mt-6 hover:text-[#24292E] hover:border-[#24292E] transition-all">
                                    Перейти к вводу данных →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
