@extends('layouts.account')

@section('accountContent')

<div class="py-20 pl-8 max-w-5xl">
    <x-mTitle>Сервис-заявки</x-mTitle>

    <div class="grid grid-cols-12 gap-16 mt-12">

        <!-- Левая колонка: Форма подачи -->
        <div class="col-span-12 lg:col-span-5">
            <h2 class="text-[10px] uppercase tracking-[0.3em] text-gray-400 mb-8 border-b border-black pb-2">Новое обращение</h2>

            <form action="#" method="POST" class="space-y-8">
                <!-- Категория -->
                <div>
                    <label class="text-[9px] uppercase tracking-widest text-gray-400 block mb-2">Категория службы</label>
                    <select class="w-full border-b border-gray-200 py-3 outline-none focus:border-black transition-colors bg-transparent uppercase text-xs tracking-widest cursor-pointer">
                        <option>Сантехнические работы</option>
                        <option>Электромонтажные работы</option>
                        <option>Благоустройство и уборка</option>
                        <option>Домофон и слаботочка</option>
                        <option>Другое</option>
                    </select>
                </div>

                <!-- Описание -->
                <div>
                    <label class="text-[9px] uppercase tracking-widest text-gray-400 block mb-2">Суть проблемы</label>
                    <textarea rows="4" placeholder="ОПИШИТЕ ПОДРОБНОСТИ..."
                        class="w-full border border-gray-100 p-4 outline-none focus:border-black transition-colors text-xs uppercase tracking-widest leading-relaxed resize-none"></textarea>
                </div>

                <!-- Загрузка фото (имитация) -->
                <div class="border-2 border-dashed border-gray-100 p-6 text-center hover:border-black transition-colors cursor-pointer group">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-gray-400 group-hover:text-black">+ Прикрепить фото</p>
                </div>

                <x-account.button>Отправить</x-account.button>
            </form>
        </div>

        <!-- Правая колонка: Список заявок -->
        <div class="col-span-12 lg:col-span-7">
            <h2 class="text-[10px] uppercase tracking-[0.3em] text-gray-400 mb-8 border-b border-gray-100 pb-2">История обращений</h2>

            <div class="space-y-6">
                <!-- Заявка 1 (Активная) -->
                <div class="group border-l-2 border-black pl-6 py-2 transition-all">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] uppercase tracking-widest font-bold">Заявка №2840</span>
                        <span class="text-[9px] uppercase px-2 py-0.5 bg-black text-white italic">В работе</span>
                    </div>
                    <p class="text-xs uppercase tracking-widest mb-3">Засор в системе водоотведения (кухня)</p>
                    <div class="flex justify-between items-center text-[9px] text-gray-400 uppercase">
                        <span>Мастер: Иванов А.В.</span>
                        <span>Создана: 14.02.2026</span>
                    </div>
                </div>

                <!-- Заявка 2 (Завершена) -->
                <div class="group border-l-2 border-gray-100 pl-6 py-2 transition-all opacity-60 hover:opacity-100">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] uppercase tracking-widest font-bold">Заявка №2712</span>
                        <span class="text-[9px] uppercase px-2 py-0.5 border border-gray-200 italic">Выполнена</span>
                    </div>
                    <p class="text-xs uppercase tracking-widest mb-3">Замена ламп освещения в холле</p>
                    <div class="flex justify-between items-center text-[9px] text-gray-400 uppercase">
                        <span class="flex items-center gap-1">Оценка: ★★★★☆</span>
                        <span>02.02.2026</span>
                    </div>
                </div>

                <!-- Заявка 3 (Завершена) -->
                <div class="group border-l-2 border-gray-100 pl-6 py-2 transition-all opacity-60">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] uppercase tracking-widest font-bold">Заявка №2605</span>
                        <span class="text-[9px] uppercase px-2 py-0.5 border border-gray-200 italic">Выполнена</span>
                    </div>
                    <p class="text-xs uppercase tracking-widest mb-3">Регулировка доводчика входной двери</p>
                    <div class="flex justify-between items-center text-[9px] text-gray-400 uppercase">
                        <span>25.01.2026</span>
                    </div>
                </div>
            </div>

            <!-- Ссылка на полный архив -->
            <div class="mt-10">
                <a href="#" class="text-[9px] uppercase tracking-widest border-b border-gray-200 hover:border-black transition-all pb-1">Показать все выполненные работы →</a>
            </div>
        </div>
    </div>
</div>


@endsection
