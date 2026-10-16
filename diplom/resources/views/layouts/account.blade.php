@extends('layouts.base')

@section('content')
    <section class="pt-20">

        <div class="flex">
            <aside x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" :class="open ? 'w-64' : 'w-20'"
                class="sticky top-0 h-screen bg-primary-dark text-white transition-all duration-300 z-2">

                <nav class="flex flex-col justify-between min-h-[90vh] py-10">
                    <x-auth.aside route="main" icon="home" label="Моё жильё" />
                    <div>
                        <x-auth.aside route="chart" icon="chart" label="Показания" />
                        <x-auth.aside route="clipboard" icon="clipboard" label="Сервис-заявки" />
                        <x-auth.aside route="credit" icon="credit" label="Счета и платежи" />
                        <x-auth.aside route="board" icon="board" label="Доска объявлений" />
                        <x-auth.aside route="news" icon="news" label="Новости" />
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="w-full flex items-center px-6 py-4 hover:bg-white/10 transition-colors">
                            <div class="min-w-[32px]">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                            </div>
                            <span x-show="open" x-transition:enter="transition opacity duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                class="ml-4 uppercase text-xs tracking-widest whitespace-nowrap">
                                Выход
                            </span>
                        </button>
                    </form>
                </nav>

            </aside>

            <div class="mt-10 mx-auto">
                <div class="ml-8 flex justify-between items-center border-b border-gray-100 pb-6">
                    <h1 class="text-xs uppercase tracking-[0.4em] text-gray-400">Личный кабинет</h1>
                    <p class="text-3xl uppercase tracking-widest">
                        {{ Auth::user()->name }}
                    </p>
                </div>
                @yield('accountContent')
            </div>

        </div>

    </section>
@endsection
