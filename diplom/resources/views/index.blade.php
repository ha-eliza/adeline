@extends('layouts.base')

@section('content')

    <x-dark containerType="mx-50">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-12 max-w-7xl mx-auto">

            <x-menu.menu number="01" title="Главная">
                LEGACY — премиальное наследие столицы
            </x-menu.menu>

            <x-menu.menu number="03" title="Архитектура">
                Бюро «СПИЧ», Tchoban Voss Architekten
            </x-menu.menu>

            <x-menu.menu number="02" title="Локация">
                50 метров до Москвы-реки
            </x-menu.menu>

            <x-menu.menu number="04" title="Инфраструктура">
                Развитая инфраструктура квартала
            </x-menu.menu>

            <x-menu.menu number="05" title="AMENTIES">
                Ваш комфорт — наш приоритет
            </x-menu.menu>

            <x-menu.menu number="06" title="HOME PARK">
                Жизнь в объятиях природы
            </x-menu.menu>

            <x-menu.menu number="07" title="Ваша квартира">
                С панорамными окнами, балконами и террасами
            </x-menu.menu>

            <x-menu.menu number="08" title="Отделка">
                2 вида отделки
            </x-menu.menu>

            <x-menu.menu number="09" title="Инженерия">
                Интеллектуальные инженерные сети
            </x-menu.menu>

        </div>

    </x-dark>

@endsection
