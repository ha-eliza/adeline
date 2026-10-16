@extends('layouts.account')

@section('accountContent')

    <div class="grid grid-cols-12 gap-10 w-full">

        <div class="col-span-7">
            <div class="p-8 max-w-2xl py-20">
                <div class="flex justify-between items-start border-b border-gray-100 pb-6 mb-6">
                    <div>
                        <h2 class="text-xs uppercase tracking-[0.2em] text-gray-400 mb-2">Объект недвижимости
                        </h2>
                        <h3 class="text-2xl font-light uppercase tracking-widest">Квартира №01</h3>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] border border-black px-2 py-1 uppercase">Дом LIFE</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-y-8 gap-x-4">
                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">Адрес</p>
                        <p class="text-sm leading-tight">Воскресенская набережная, вл. 43</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">комнат</p>
                        <p class="text-sm uppercase">Студия</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">Этаж</p>
                        <p class="text-sm">5</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">площадь</p>
                        <p class="text-sm font-medium">43.2 м²</p>
                    </div>

                </div>

                <div class="mt-10">
                    <button
                        class="text-[10px] uppercase tracking-widest border-b border-black pb-1 hover:text-gray-500 hover:border-gray-500 transition">
                        Посмотреть технический план →
                    </button>
                </div>
            </div>
            <div class="p-8 max-w-2xl py-20">
                <div class="flex justify-between items-start border-b border-gray-100 pb-6 mb-6">
                    <div>
                        <h2 class="text-xs uppercase tracking-[0.2em] text-gray-400 mb-2">Объект недвижимости
                        </h2>
                        <h3 class="text-2xl font-light uppercase tracking-widest">Машиноместо №15</h3>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] border border-black px-2 py-1 uppercase">Дом LIFE</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-y-8 gap-x-4">
                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">Локация</p>
                        <p class="text-sm leading-tight">Подземный паркинг, уровень -1</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">Секция</p>
                        <p class="text-sm uppercase">2</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">Габариты</p>
                        <p class="text-sm">13.5 м²</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">привязанный
                            автомобиль</p>
                        <p class="text-sm font-medium">А 001 АА 777</p>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase text-gray-400 tracking-tighter mb-1">дополниельно</p>
                        <p class="text-sm font-medium">келлер</p>
                    </div>

                </div>

                <div class="mt-10">
                    <button
                        class="text-[10px] uppercase tracking-widest border-b border-black pb-1 hover:text-gray-500 hover:border-gray-500 transition">
                        Посмотреть технический план →
                    </button>
                </div>
            </div>
        </div>
        <div class="col-span-5 py-20 pl-8">
            <x-mTitle>Документы</x-mTitle>
            <ul class="mt-12 space-y-0">
                <li
                    class="group flex justify-between items-center py-5 border-b border-gray-100 hover:border-black transition-colors duration-300">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-gray-400 uppercase tracking-[0.2em] mb-1">Собственность</span>
                        <p
                            class="text-sm uppercase tracking-widest font-light group-hover:pl-2 transition-all duration-300">
                            Выписка из ЕГРН</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-[9px] text-gray-300 uppercase italic">2.4 MB</span>
                        <a href="#"
                            class="text-[10px] uppercase tracking-tighter border-b border-black pb-0.5 hover:text-gray-500 hover:border-gray-500 transition-all">
                            PDF
                        </a>
                    </div>
                </li>

                <li
                    class="group flex justify-between items-center py-5 border-b border-gray-100 hover:border-black transition-colors duration-300">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-gray-400 uppercase tracking-[0.2em] mb-1">Сделка</span>
                        <p
                            class="text-sm uppercase tracking-widest font-light group-hover:pl-2 transition-all duration-300">
                            Договор купли-продажи</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-[9px] text-gray-300 uppercase italic">5.1 MB</span>
                        <a href="#"
                            class="text-[10px] uppercase tracking-tighter border-b border-black pb-0.5 hover:text-gray-500 hover:border-gray-500 transition-all">
                            PDF
                        </a>
                    </div>
                </li>

                <li
                    class="group flex justify-between items-center py-5 border-b border-gray-100 hover:border-black transition-colors duration-300">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-gray-400 uppercase tracking-[0.2em] mb-1">Управление</span>
                        <p
                            class="text-sm uppercase tracking-widest font-light group-hover:pl-2 transition-all duration-300">
                            Договор управления МКД</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-[9px] text-gray-300 uppercase italic">1.8 MB</span>
                        <a href="#"
                            class="text-[10px] uppercase tracking-tighter border-b border-black pb-0.5 hover:text-gray-500 hover:border-gray-500 transition-all">
                            PDF
                        </a>
                    </div>
                </li>

                <li
                    class="group flex justify-between items-center py-5 border-b border-gray-100 hover:border-black transition-colors duration-300">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-gray-400 uppercase tracking-[0.2em] mb-1">Регламент</span>
                        <p
                            class="text-sm uppercase tracking-widest font-light group-hover:pl-2 transition-all duration-300">
                            Правила проживания в ЖК</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-[9px] text-gray-300 uppercase italic">0.9 MB</span>
                        <a href="#"
                            class="text-[10px] uppercase tracking-tighter border-b border-black pb-0.5 hover:text-gray-500 hover:border-gray-500 transition-all">
                            PDF
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection
