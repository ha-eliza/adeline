@extends('layouts.account')

@section('accountContent')

<div class="py-20 pl-8 max-w-4xl">
    <x-mTitle>Новости и события</x-mTitle>

    <div class="mt-16 space-y-20">

        <!-- Новость 1 (Важное уведомление) -->
        <article class="group cursor-pointer">
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/3">
                    <span class="text-[9px] uppercase tracking-[0.4em] text-gray-400 block mb-4">26 ФЕВРАЛЯ 2026</span>
                    <div class="aspect-[4/3] bg-black flex items-center justify-center p-8">
                        <span class="text-[10px] uppercase tracking-widest text-white text-center leading-relaxed italic">Плановые технические работы</span>
                    </div>
                </div>
                <div class="md:w-2/3 flex flex-col justify-between py-2">
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="text-[8px] border border-red-500 text-red-500 px-2 py-0.5 uppercase tracking-widest font-bold italic">Важно</span>
                            <span class="text-[9px] uppercase tracking-widest text-gray-400 italic">Инженерная служба</span>
                        </div>
                        <h2 class="text-xl font-light uppercase tracking-widest leading-snug group-hover:text-gray-500 transition-colors">
                            Ограничение подачи ГВС в корпусе №2
                        </h2>
                        <p class="mt-4 text-xs text-gray-500 uppercase tracking-widest leading-relaxed line-clamp-3">
                            В связи с проведением профилактических работ на центральном тепловом пункте, 28 февраля с 10:00 до 16:00 будет временно ограничена подача горячей воды. Приносим извинения за неудобства.
                        </p>
                    </div>
                    <a href="#" class="mt-6 text-[10px] uppercase tracking-widest border-b border-black w-fit pb-1 hover:border-gray-300 transition-all">
                        Читать полностью →
                    </a>
                </div>
            </div>
        </article>

        <!-- Новость 2 (Событие) -->
        <article class="group cursor-pointer">
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/3">
                    <span class="text-[9px] uppercase tracking-[0.4em] text-gray-400 block mb-4">20 ФЕВРАЛЯ 2026</span>
                    <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center border border-gray-100 group-hover:border-black transition-all">
                        <span class="text-[10px] uppercase tracking-widest text-gray-300">Photo: Life Terrace</span>
                    </div>
                </div>
                <div class="md:w-2/3 flex flex-col justify-between py-2">
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="text-[9px] uppercase tracking-widest text-gray-400 italic">События ЖК</span>
                        </div>
                        <h2 class="text-xl font-light uppercase tracking-widest leading-snug group-hover:text-gray-500 transition-colors">
                            Открытие весенней террасы в лобби
                        </h2>
                        <p class="mt-4 text-xs text-gray-500 uppercase tracking-widest leading-relaxed">
                            Приглашаем резидентов на открытие обновленной лаунж-зоны. В программе: дегустация кофе от партнеров, живая музыка и презентация новой системы озеленения внутреннего двора.
                        </p>
                    </div>
                    <a href="#" class="mt-6 text-[10px] uppercase tracking-widest border-b border-black w-fit pb-1 hover:border-gray-300 transition-all">
                        Читать полностью →
                    </a>
                </div>
            </div>
        </article>

        <!-- Новость 3 (Короткая заметка без фото) -->
        <article class="group cursor-pointer border-t border-gray-100 pt-10">
            <div class="flex justify-between items-start">
                <div class="max-w-2xl">
                    <span class="text-[9px] uppercase tracking-[0.4em] text-gray-400 block mb-4">15 ФЕВРАЛЯ 2026</span>
                    <h2 class="text-lg font-light uppercase tracking-widest leading-snug group-hover:pl-4 transition-all duration-500">
                        Обновление регламента парковки для гостевого транспорта
                    </h2>
                </div>
                <span class="text-[9px] uppercase tracking-widest text-gray-300 italic">УК «Дом LIFE»</span>
            </div>
        </article>

    </div>

    <!-- Пагинация (имитация) -->
    <div class="mt-32 flex gap-4 items-center">
        <span class="text-[10px] uppercase tracking-widest border-b border-black">01</span>
        <a href="#" class="text-[10px] uppercase tracking-widest text-gray-300 hover:text-black transition-colors">02</a>
        <a href="#" class="text-[10px] uppercase tracking-widest text-gray-300 hover:text-black transition-colors">03</a>
        <span class="mx-4 text-gray-100">/</span>
        <a href="#" class="text-[10px] uppercase tracking-widest text-gray-400 hover:text-black transition-colors">Архив новостей</a>
    </div>
</div>


@endsection
