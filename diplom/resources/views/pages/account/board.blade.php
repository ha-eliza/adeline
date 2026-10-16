@extends('layouts.account')

@section('accountContent')

    <div class="py-20 pl-8 max-w-5xl" x-data="{ tab: 'all' }">
    <div class="flex justify-between items-end mb-12">
        <x-mTitle>Доска объявлений</x-mTitle>
        <button class="border border-black px-6 py-2 uppercase text-[10px] tracking-[0.2em] hover:bg-black hover:text-white transition-all">
            + Создать объявление
        </button>
    </div>

    <!-- Навигация по категориям -->
    <div class="flex gap-8 border-b border-gray-100 mb-12 pb-4">
        <button @click="tab = 'all'" :class="tab === 'all' ? 'text-black border-b border-black' : 'text-gray-400 border-transparent'" class="pb-4 uppercase text-[9px] tracking-[0.3em] transition-all">Все</button>
        <button @click="tab = 'market'" :class="tab === 'market' ? 'text-black border-b border-black' : 'text-gray-400 border-transparent'" class="pb-4 uppercase text-[9px] tracking-[0.3em] transition-all">Маркетплейс</button>
        <button @click="tab = 'services'" :class="tab === 'services' ? 'text-black border-b border-black' : 'text-gray-400 border-transparent'" class="pb-4 uppercase text-[9px] tracking-[0.3em] transition-all">Услуги</button>
        <button @click="tab = 'lost'" :class="tab === 'lost' ? 'text-black border-b border-black' : 'text-gray-400 border-transparent'" class="pb-4 uppercase text-[9px] tracking-[0.3em] transition-all">Находки</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16">

        <!-- Объявление 1 -->
        <div class="group cursor-pointer">
            <div class="aspect-video bg-gray-50 mb-6 overflow-hidden flex items-center justify-center text-gray-200 uppercase text-[10px] tracking-widest border border-gray-100 group-hover:border-black transition-all">
                [ Изображение объекта ]
            </div>
            <div class="flex justify-between items-start mb-2">
                <span class="text-[9px] uppercase tracking-widest text-gray-400 italic">Маркетплейс</span>
                <span class="text-xs font-medium uppercase tracking-tighter">15 000 ₽</span>
            </div>
            <h3 class="text-sm uppercase tracking-widest leading-relaxed mb-4 group-hover:pl-2 transition-all">Детское автокресло Britax Römer</h3>
            <div class="flex justify-between items-center text-[9px] uppercase text-gray-400 tracking-tighter border-t border-gray-50 pt-4">
                <span>Квартира 142</span>
                <span>Сегодня, 12:40</span>
            </div>
        </div>

        <!-- Объявление 2 -->
        <div class="group cursor-pointer">
            <div class="aspect-video bg-gray-50 mb-6 overflow-hidden flex items-center justify-center text-gray-200 uppercase text-[10px] tracking-widest border border-gray-100 group-hover:border-black transition-all">
                [ Изображение услуги ]
            </div>
            <div class="flex justify-between items-start mb-2">
                <span class="text-[9px] uppercase tracking-widest text-gray-400 italic">Услуги</span>
                <span class="text-xs font-medium uppercase tracking-tighter">от 1 500 ₽</span>
            </div>
            <h3 class="text-sm uppercase tracking-widest leading-relaxed mb-4 group-hover:pl-2 transition-all">Профессиональный клининг окон и лоджий</h3>
            <div class="flex justify-between items-center text-[9px] uppercase text-gray-400 tracking-tighter border-t border-gray-50 pt-4">
                <span>Квартира 08</span>
                <span>Вчера, 18:15</span>
            </div>
        </div>

        <!-- Объявление 3 (Без фото) -->
        <div class="group cursor-pointer border-l-2 border-black pl-6 py-2 flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-2">
                    <span class="text-[9px] uppercase tracking-widest text-gray-400 italic">Находки</span>
                </div>
                <h3 class="text-sm uppercase tracking-widest leading-relaxed mb-4 group-hover:pl-2 transition-all">Найдены ключи от автомобиля во дворе дома</h3>
            </div>
            <div class="flex justify-between items-center text-[9px] uppercase text-gray-400 tracking-tighter border-t border-gray-50 pt-4">
                <span>Охрана, пост №1</span>
                <span>20 Февраля</span>
            </div>
        </div>

        <!-- Объявление 4 -->
        <div class="group cursor-pointer">
            <div class="aspect-video bg-gray-50 mb-6 overflow-hidden flex items-center justify-center text-gray-200 uppercase text-[10px] tracking-widest border border-gray-100 group-hover:border-black transition-all">
                [ Изображение объекта ]
            </div>
            <div class="flex justify-between items-start mb-2">
                <span class="text-[9px] uppercase tracking-widest text-gray-400 italic">Маркетплейс</span>
                <span class="text-xs font-medium uppercase tracking-tighter">Бесплатно</span>
            </div>
            <h3 class="text-sm uppercase tracking-widest leading-relaxed mb-4 group-hover:pl-2 transition-all">Стеллаж IKEA (самовывоз)</h3>
            <div class="flex justify-between items-center text-[9px] uppercase text-gray-400 tracking-tighter border-t border-gray-50 pt-4">
                <span>Машиноместо 15</span>
                <span>19 Февраля</span>
            </div>
        </div>

    </div>
</div>


@endsection
