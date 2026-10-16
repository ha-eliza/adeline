@if (Request::is('/'))
    <div x-data="{ scrolled: false, open: false }" @scroll.window="scrolled = window.scrollY > 1" x-init="$watch('open', value => value ? document.body.classList.add('no-scroll') : document.body.classList.remove('no-scroll'))" class="relative">

        <nav id="navbar"
            :class="{
                'bg-[#24292E] border-b border-white/20 backdrop-blur-sm': scrolled || open,
                'bg-transparent': !scrolled && !open
            }"
            class="fixed top-0 left-0 w-full z-[60] transition-all duration-500 h-20 flex items-center">

            <div class="mx-auto px-9 sm:px-6 lg:px-[55px] w-full">
                <div class="flex items-center justify-between">

                    <div class="flex items-center space-x-6 flex-1 text-white">
                        <button @click="open = !open"
                            class="flex flex-col items-center justify-center w-[50px] h-10 space-y-1.5 group outline-none">
                            <span :class="open ? 'rotate-45 translate-y-[7px] w-full' : 'w-2/4 self-start'"
                                class="block h-[1px] bg-current transition-all duration-300"></span>
                            <span :class="open ? 'opacity-0' : 'opacity-100'"
                                class="block w-full h-[1px] bg-current transition-all duration-300"></span>
                            <span :class="open ? '-rotate-45 -translate-y-[7px] w-full' : 'w-2/4 self-end'"
                                class="block h-[1px] bg-current transition-all duration-300"></span>
                        </button>

                        <a href="#" class="transition-all duration-300">
                            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181787/favorite_lnu6lw.svg" alt="favorite">
                        </a>
                        <a href="{{ route('login') }}" class="transition-all duration-300">
                            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181810/user_bwqa55.svg" alt="user">
                        </a>
                    </div>

                    <div :class="(scrolled || open) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                        class="duration-500 transition-all">
                        <a href="/" class="text-2xl font-cinzel text-white tracking-[0.3em] uppercase"> ADELINE
                        </a>
                    </div>

                    <div class="flex items-center justify-end space-x-8 flex-1 text-white">
                        <div class="flex gap-2 items-center group cursor-pointer">
                            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181799/key_bwytqg.svg" alt="key">
                            <a href="{{ route('pages.apartaments') }}"
                                class="text-[10px] uppercase tracking-[0.2em]">Выбрать квартиру</a>
                        </div>
                        <span class="text-[11px] tracking-[0.15em]">+7 937 396 72 90</span>
                    </div>
                </div>
            </div>
        </nav>

        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
            class="fixed pt-[7rem] pb-5 inset-0 bg-[#24292E] z-50 flex flex-col justify-between px-9 sm:px-6 lg:px-[55px] w-full text-white">

            <div class="flex justify-between gap-16">
                <div class="grid grid-cols-3 gap-y-5 gap-x-12 flex-[3]">
                    <x-menu.menu number="01" title="Главная" href="/">ADELINE - дом на воскресенской
                        набережной</x-menu.menu>
                    <x-menu.menu number="03" title="Архитектура" href="#2">Бюро «СПИЧ», Tchoban Voss
                        Architekten</x-menu.menu>
                    <x-menu.menu number="02" title="Локация" href="#3">Новая Голландия, Река Мойка и др.
                        знаковые
                        места.</x-menu.menu>

                    <x-menu.menu number="04" title="HOME PARK" href="#4">КАМЕРНЫЙ САД - жизнь в объятиях
                        природы</x-menu.menu>
                    <x-menu.menu number="05" title="Инфрастуктура" href="#5">Развитая инфрастуктура
                        квартала</x-menu.menu>
                    <x-menu.menu number="06" title="Детям" href="#6">Всё для счастья детей</x-menu.menu>

                    <x-menu.menu number="07" title="Лобби" href="#7">Как в лучших отелях мира</x-menu.menu>
                    <x-menu.menu number="08" title="AMENITIES" href="#8">Ваш комфорт - наш
                        приоритет</x-menu.menu>
                    <x-menu.menu number="09" title="Искусство" href="#9">путешествие в мир искусства</x-menu.menu>

                    <x-menu.menu number="10" title="апартаменты" href="#10">от студий до пентхаусов</x-menu.menu>
                    <x-menu.menu number="11" title="Отделка" href="#11">финишная отделка и white-box
                        deluxe</x-menu.menu>
                    <x-menu.menu number="12" title="Паркинг" href="#12">по вашим правилам</x-menu.menu>
                </div>

                <div class="flex flex-col justify-between py-10 border-white/10 pl-10 flex-1 max-w-[250px]">
                    <div class="flex flex-col space-y-4 text-[11px] uppercase tracking-widest">
                        <a href="#" class="hover:text-gray-400">Выбрать квартиру</a>
                        <a href="#" class="hover:text-gray-400">Записаться в офис</a>
                        <a href="#" class="hover:text-gray-400">Избранное</a>
                    </div>
                    <div class="flex flex-col space-y-4 text-[14px] tracking-wider font-light">
                        <a href="#" class="hover:text-gray-300">Галерея</a>
                        <a href="#13" class="hover:text-gray-300">Команда</a>
                        <a href="#13" class="hover:text-gray-300">Контакты</a>
                        <a href="#13" class="hover:text-gray-300">Документы</a>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-end text-[12px] text-gray-500">
                <div>© 2021-2026 Абсолют Недвижимость. Все права защищены</div>
            </div>
        </div>

    </div>
@else
    <div x-data="{ scrolled: false, open: false }" @scroll.window="scrolled = window.scrollY > 1" x-init="$watch('open', value => value ? document.body.classList.add('no-scroll') : document.body.classList.remove('no-scroll'))"
        class="relative">

        <nav id="navbar" class="fixed bg-[#24292E] border-b border-white/20 backdrop-blur-sm top-0 left-0 w-full z-[60] transition-all duration-500 h-20 flex items-center">
            <div class="mx-auto px-9 sm:px-6 lg:px-[55px] w-full">
                <div class="flex items-center justify-between">

                    <div class="flex items-center space-x-6 flex-1 text-white">
                        <button @click="open = !open"
                            class="flex flex-col items-center justify-center w-[50px] h-10 space-y-1.5 group outline-none">
                            <span :class="open ? 'rotate-45 translate-y-[7px] w-full' : 'w-2/4 self-start'"
                                class="block h-[1px] bg-current transition-all duration-300"></span>
                            <span :class="open ? 'opacity-0' : 'opacity-100'"
                                class="block w-full h-[1px] bg-current transition-all duration-300"></span>
                            <span :class="open ? '-rotate-45 -translate-y-[7px] w-full' : 'w-2/4 self-end'"
                                class="block h-[1px] bg-current transition-all duration-300"></span>
                        </button>

                        <a href="#"><img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181787/favorite_lnu6lw.svg" alt="favorite"></a>
                        <a href="{{ route('login') }}"><img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181810/user_bwqa55.svg" alt="user"></a>
                    </div>

                    <div class="flex-1 flex justify-center">
                        <a href="/" class="text-2xl font-cinzel text-white tracking-[0.3em] uppercase"> ADELINE
                        </a>
                    </div>

                    <div class="flex items-center justify-end space-x-8 flex-1 text-white">
                        <div class="flex gap-2 items-center group cursor-pointer">
                            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181799/key_bwytqg.svg" alt="key">
                            <a href="{{ route('pages.apartaments') }}"
                                class="text-[10px] uppercase tracking-[0.2em]">Выбрать квартиру</a>
                        </div>
                        <span class="text-[11px] tracking-[0.15em]">+7 937 396 72 90</span>
                    </div>
                </div>
            </div>
        </nav>

        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
            class="fixed pt-[7rem] pb-5 inset-0 bg-[#24292E] z-50 flex flex-col justify-between px-9 sm:px-6 lg:px-[55px] w-full text-white">

            <div class="flex justify-between gap-16">
                <div class="grid grid-cols-3 gap-y-5 gap-x-12 flex-[3]">
                    <x-menu.menu number="01" title="Главная" href="/">ADELINE - дом на воскресенской
                        набережной</x-menu.menu>
                    <x-menu.menu number="03" title="Архитектура" href="#2">Бюро «СПИЧ», Tchoban Voss
                        Architekten</x-menu.menu>
                    <x-menu.menu number="02" title="Локация" href="#3">Новая Голландия, Река Мойка и др.
                        знаковые
                        места.</x-menu.menu>

                    <x-menu.menu number="04" title="HOME PARK" href="#4">КАМЕРНЫЙ САД - жизнь в объятиях
                        природы</x-menu.menu>
                    <x-menu.menu number="05" title="Инфрастуктура" href="#5">Развитая инфрастуктура
                        квартала</x-menu.menu>
                    <x-menu.menu number="06" title="Детям" href="#6">Всё для счастья детей</x-menu.menu>

                    <x-menu.menu number="07" title="Лобби" href="#7">Как в лучших отелях мира</x-menu.menu>
                    <x-menu.menu number="08" title="AMENITIES" href="#8">Ваш комфорт - наш
                        приоритет</x-menu.menu>
                    <x-menu.menu number="09" title="Искусство" href="#9">путешествие в мир искусства</x-menu.menu>

                    <x-menu.menu number="10" title="апартаменты" href="#10">от студий до пентхаусов</x-menu.menu>
                    <x-menu.menu number="11" title="Отделка" href="#11">финишная отделка и white-box
                        deluxe</x-menu.menu>
                    <x-menu.menu number="12" title="Паркинг" href="#12">по вашим правилам</x-menu.menu>
                </div>

                <div class="flex flex-col justify-between py-10 border-white/10 pl-10 flex-1 max-w-[250px]">
                    <div class="flex flex-col space-y-4 text-[11px] uppercase tracking-widest">
                        <a href="#" class="hover:text-gray-400">Выбрать по параметрам</a>
                        <a href="#" class="hover:text-gray-400">Записаться в офис</a>
                        <a href="#" class="hover:text-gray-400">Избранное</a>
                    </div>
                    <div class="flex flex-col space-y-4 text-[11px] uppercase tracking-widest">
                        <a href="#" class="hover:text-gray-300">Галерея</a>
                        <a href="#13" class="hover:text-gray-300">Команда</a>
                        <a href="#13" class="hover:text-gray-300">Контакты</a>
                        <a href="#13" class="hover:text-gray-300">Документы</a>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-end text-[12px] text-gray-500">
                <div>© 2021-2026 Абсолют Недвижимость. Все права защищены</div>
            </div>
        </div>
    </div>
@endif
