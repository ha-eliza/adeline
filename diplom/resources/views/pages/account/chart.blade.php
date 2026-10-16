@extends('layouts.account')

@section('accountContent')
    <div class="py-20 pl-8 max-w-4xl">
    <x-mTitle>Показания приборов учета</x-mTitle>

    <!-- Блок подачи показаний -->
    <div class="mt-12">
        <div class="flex justify-between items-end border-b border-black pb-2 mb-8">
            <h2 class="text-[10px] uppercase tracking-[0.3em] text-gray-400">Передача данных за Февраль</h2>
            <span class="text-[9px] uppercase text-red-500 italic">Осталось 3 дня до конца приема</span>
        </div>

        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
            <!-- Счетчик 1 -->
            <div class="group">
                <div class="flex justify-between mb-2">
                    <label class="text-xs uppercase tracking-widest">Холодное водоснабжение</label>
                    <span class="text-[10px] text-gray-400">м³</span>
                </div>
                <input type="number" step="0.001" placeholder="00000.000"
                    class="w-full border-b border-gray-200 py-3 outline-none focus:border-black transition-colors text-xl font-light tracking-tighter">
                <p class="text-[9px] text-gray-400 uppercase mt-2">Предыдущее: 124.450</p>
            </div>

            <!-- Счетчик 2 -->
            <div class="group">
                <div class="flex justify-between mb-2">
                    <label class="text-xs uppercase tracking-widest">Горячее водоснабжение</label>
                    <span class="text-[10px] text-gray-400">м³</span>
                </div>
                <input type="number" step="0.001" placeholder="00000.000"
                    class="w-full border-b border-gray-200 py-3 outline-none focus:border-black transition-colors text-xl font-light tracking-tighter">
                <p class="text-[9px] text-gray-400 uppercase mt-2">Предыдущее: 82.110</p>
            </div>

            <!-- Счетчик 3 -->
            <div class="group">
                <div class="flex justify-between mb-2">
                    <label class="text-xs uppercase tracking-widest">Электроэнергия (День)</label>
                    <span class="text-[10px] text-gray-400">кВт·ч</span>
                </div>
                <input type="number" placeholder="00000"
                    class="w-full border-b border-gray-200 py-3 outline-none focus:border-black transition-colors text-xl font-light tracking-tighter">
                <p class="text-[9px] text-gray-400 uppercase mt-2">Предыдущее: 4520</p>
            </div>

            <div class="md:col-span-2 mt-4">
                <button type="submit" class="w-full border border-black py-4 uppercase text-xs tracking-[0.3em] hover:bg-black hover:text-white transition-all">
                    Отправить показания
                </button>
            </div>
        </form>
    </div>

    <!-- История показаний -->
    <div class="mt-24">
        <h2 class="text-[10px] uppercase tracking-[0.3em] text-gray-400 mb-8">История за 2026 год</h2>

        <div class="space-y-0 text-xs">
            <!-- Шапка таблицы -->
            <div class="grid grid-cols-4 pb-4 border-b border-gray-100 text-[9px] uppercase text-gray-400 tracking-tighter">
                <div>Период</div>
                <div>ХВС (м³)</div>
                <div>ГВС (м³)</div>
                <div class="text-right">Статус</div>
            </div>

            <!-- Строка 1 -->
            <div class="grid grid-cols-4 py-5 border-b border-gray-50 items-center">
                <div class="uppercase tracking-widest">Январь</div>
                <div class="font-light">124.450</div>
                <div class="font-light">82.110</div>
                <div class="text-right text-[10px] uppercase text-green-600">Принято</div>
            </div>

            <!-- Строка 2 -->
            <div class="grid grid-cols-4 py-5 border-b border-gray-50 items-center">
                <div class="uppercase tracking-widest text-gray-400">Декабрь</div>
                <div class="font-light text-gray-400">120.100</div>
                <div class="font-light text-gray-400">79.400</div>
                <div class="text-right text-[10px] uppercase text-gray-300">Архив</div>
            </div>
        </div>
    </div>
</div>

@endsection
