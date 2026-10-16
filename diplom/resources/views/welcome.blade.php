@extends('layouts.base')

@section('content')
    @include('includes.video')

    <x-dark containerType="mx-50">
        <div class="flex gap-[15%] justify-between items-start">

            <x-title :dark="true" class="text-5xl leading-[1.2] self-start mt-0">
                Цифры <br> проекта
            </x-title>

            <div class="relative w-full overflow-hidden">
                <div class="swiper statsSwiper ">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">14-17</div>
                                <div class="mline"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end pr-10">
                                    Этажей </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">89</div>
                                <div class="line"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    квартир </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">3</div>
                                <div class="line"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    клубных <br> дома </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">100%</div>
                                <div class="mline"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    видовые <br> квартиры</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">до 7м</div>
                                <div class="mline"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    высота <br> потолков</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">6</div>
                                <div class="line"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    лотов с <br> террасами </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">900м²</div>
                                <div class="mline"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    общественного <br> пространства</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-32 flex flex-col justify-between">
                                <div class="text-left text-7xl leading-none">10</div>
                                <div class="line"></div>
                                <div
                                    class="text-right uppercase text-[10px] tracking-[0.2em] leading-tight text-white/80 self-end">
                                    знаковых <br> объектов </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex items-center gap-10 mt-16 px-20">
                    <button class="stats-prev cursor-pointer hover:opacity-50 transition-opacity">
                        <svg width="50" height="50" viewBox="0 0 60 20" fill="none" stroke="currentColor">
                            <path d="M10 1L1 10L10 19" stroke-width="1.5" />
                            <path d="M1 10H60" stroke-width="1.5" />
                        </svg>
                    </button>

                    <button class="stats-next cursor-pointer hover:opacity-50 transition-opacity">
                        <svg width="50" height="50" viewBox="0 0 60 20" fill="none" stroke="currentColor">
                            <path d="M50 1L59 10L50 19" stroke-width="1.5" />
                            <path d="M0 10H59" stroke-width="1.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        </div>
    </x-dark>

    <x-dark containerType="max-w">

        <x-mTitle>
            Adeline
        </x-mTitle>
        <x-title :dark="true">
            ЭСТЕТИКА ВЫСОКОЙ КЛАССИКИ <i class="lowercase"> на</i> ВОСКРЕСЕНСКОЙ НАБЕРЕЖНОЙ
        </x-title>
        <x-p>
            Adeline — это манифест современной архитектуры, возведенный на стыке великой истории и футуристичных
            видов. Проект, где строгие линии неоклассицизма растворяются в масштабном панорамном остеклении,
            открывая резидентам бесконечную перспективу на Неву и разводные мосты. Это дом с безупречной осанкой и
            тонким чувством стиля. <br>
            В камерном пространстве Adeline сосредоточено всего 38 резиденций, включая эксклюзивные лоты с зенитными
            окнами и террасами, парящими над крышами Петербурга. Здесь приватность возведена в абсолют, а каждый
            метр пространства пронизан светом, воздухом и философией «тихой роскоши».
        </x-p>
        <x-button :dark="true">
            Галерея
        </x-button>

    </x-dark>

    <x-light containerType="mx-50" id="2">

        <div class="flex justify-between">
            <div class="w-[50%]">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181782/arch_s58hbe.jpg" class="" alt="architecture">
            </div>

            <div class="w-[50%]">
                <x-mTitle>
                    Архитектура
                </x-mTitle>
                <x-title :dark="false">
                    МОНУМЕНТАЛЬНОСТЬ ВЕКОВ
                </x-title>
                <x-p>
                    Adeline — это архитектурный диалог между монументальностью прошлого и прозрачностью будущего. Лаконичный
                    облик
                    дома искусно сочетает в себе благородство натурального камня и бесконечность панорамного остекления.
                    Фасад,
                    выполненный из юрского мрамора, деликатно вписывает проект в исторический контекст набережной, сохраняя
                    при
                    этом
                    свою художественную исключительность.
                    Преемственность поколений буквально отражена в геометрии дома: строгий ритм каменных пилонов чередуется
                    с
                    «живыми» отражениями Петербурга в зеркальных поверхностях. Adeline — это архитектура, которая не спорит
                    с
                    городом, а становится его новой, самой изысканной частью.

                </x-p>
            </div>
        </div>

    </x-light>

    <x-slaider.right :images="['https://res.cloudinary.com/dg4najz1s/image/upload/v1772181788/img2_o4tr1i.jpg', 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181782/img3_zhu1af.jpg']">
        <x-slot name="title">
            Запоминающийся облик зданий формируется за счёт органичного сочетания современных облицовочных материалов
        </x-slot>

        Баланс, симметрия и гармония нашли отражение в органической форме зданий. Плавность, элегантность и лаконичность
        прослеживаются в каждом элементе: от теплых и натуральных цветов фасадов до обтекаемой геометрии балконов,
        повторяющих изгибы протекающей рядом реки Сетунь.
    </x-slaider.right>

    <x-light containerType="mx-50" class="pt-60" id="3">
        <div class="flex justify-between items-center">
            <div class="flex-1">
                <x-mTitle>
                    Место
                </x-mTitle>
                <x-title :dark="false" class="mt-[70px]">
                    ГАРМОНИЯ ЧЕТЫРЕХ КАНАЛОВ И ВЕЛИКОЙ МУЗЫКИ
                </x-title>
                <x-p>
                    Мариинский театр и Никольский собор, изгибы Крюкова канала и Новая Голландия, старинные особняки Большой
                    Морской и дух Юсуповского сада — неподвластное времени соседство ADELINE, пронизанное
                    вдохновением и тишиной.
                </x-p>
            </div>
            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181807/place_mi5acs.webp" class="" alt="place">
            </div>
        </div>
    </x-light>

    <x-light containerType="mx-50">
        <div class="relative w-full overflow-visible">
            <div class="absolute right-20 top-0">
                <x-title class="text-6xl">Окружение</x-title>
            </div>
            <div class="w-full">
                <svg viewBox="0 0 1858 457" class="w-full h-auto drop-shadow-lg" fill="none" xmlns="http://www.w3.org">
                    <path fill="#bec6cb"
                        d="M1820.8 456.557H36.6019C16.3985 456.557 0.00146484 440.161 0.00146484 419.959V36.5962C0.00146484 14.4545 19.5095 -2.59998 41.4332 0.327852L1825.63 238.141C1843.82 240.556 1857.4 256.074 1857.4 274.409V419.959C1857.4 440.161 1841.01 456.557 1820.8 456.557Z">
                    </path>
                </svg>
            </div>
            <div class="absolute inset-0 flex items-center pt-[55px] px-10 pointer-events-none">
                <div class="max-w-[60%] md:max-w-[45%] text-[#311213] pointer-events-auto">
                    <x-span>
                        Жизнь рядом с центром — это близость к знаковым объектам истории и культуры,
                        а также доступность разнообразных развлечений для любого возраста.
                        Культурный код проекта обеспечивает Мариинский театр, Новая Голландия, Река Мойка и Синий мост,
                        Исаакиевская площадь и Исаакиевский собор,
                        Дворцовый мост и другие знаковые места.
                    </x-span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-[600px] w-full p-4">

            <div class="grid grid-rows-2 gap-4 md:col-span-1">
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181803/place1_xmswcj.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181807/place2_qnlasm.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
            </div>

            <div class="md:col-span-2 overflow-hidden rounded-3xl">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181807/place3_qordwq.jpg"
                    class="w-full h-full object-cover hover:scale-105 transition" alt="">
            </div>

            <div class="grid grid-rows-2 gap-4 md:col-span-1">
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181807/place4_kd4img.jpg"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181807/place5_szayfl.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
            </div>

        </div>

    </x-light>

    <x-light containerType="mx-50" id="4">
        <div class="flex justify-between items-center">
            <div class="flex-1">
                <x-mTitle>
                    внутри
                </x-mTitle>
                <x-title :dark="false" class="mt-[70px]">
                    КАМЕРНЫЙ САД
                </x-title>
                <br><br>
                <x-p>
                    Живой ландшафт, меняющийся вместе с настроением города. Это гармония строгих линий и
                    природной мягкости, где утренняя роса на траве и вечерняя игра теней на фасадах создают атмосферу
                    загородного поместья в самом сердце Петербурга. Место, где природа становится частью вашей личной
                    истории
                </x-p>
            </div>
            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181809/sad_qmfa2v.jpg" class="" alt="place">
            </div>
        </div>
    </x-light>

    <x-slaider.left :images="['https://res.cloudinary.com/dg4najz1s/image/upload/v1772181802/imgS2_pow6vq.jpg', 'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181803/imgS4_ohl7dk.jpg']">
        <x-slot name="title">
            Концепция двора подчинена идеи гармонии
        </x-slot>
        Она сочетает в себе чёткую геометрию и плавную рукотворность. Во дворе есть две точки притяжения: арт-объект и
        водная гладь.Для детской зоны было разработано уникальное игровое оборудование на развитие воображения и ловкости
        юных резидентов.
    </x-slaider.left>

    <x-light containerType="mx-50" class="pt-60" id="5">
        <h1 class="text-4xl">ИНФРАСТУКТУРА</h1>

        <div x-data="{ activeTab: 'public' }" class="mt-3">
            <div class="flex justify-between" x-data="{
                activeInfr: window.infrastructureData.piazza,

                updateInfr(category) {
                    this.activeInfr = window.infrastructureData[category];

                    this.$nextTick(() => {
                        if (window.mySwiper) {
                            window.mySwiper.update();
                            window.mySwiper.slideTo(0, 0);
                        }
                    });
                }
            }">
                <div class="w-[30%]">
                    <x-accordion.tabs />
                    <div x-data="{ active: 'piazza' }">
                        <div x-show="activeTab === 'public'">
                            <div class="py-4">
                                <h3 class="text-[12px] uppercase text-gray-500">Public – городская премиальная
                                    инфраструктура
                                </h3>
                            </div>
                            <div class="pr-10">
                                <x-accordion.desc title="Piazza" id="piazza" titleClass="text-[18px] text-[#640d14]"
                                    itemClass="pt-5" @click="updateInfr('piazza')">
                                    Роскошная и просторная городская площадь
                                </x-accordion.desc>
                                <x-accordion.line />

                                <x-accordion.desc title="Ритейл-галерея" id="retail"
                                    titleClass="text-[18px] text-[#640d14]" itemClass="pt-5"
                                    @click="updateInfr('retail')">
                                    авторские рестораны, премиальные бутики, фермерские магазины, салоны красоты и
                                    медицинские
                                    центры
                                </x-accordion.desc>
                                <x-accordion.line />

                                <x-accordion.desc title="Культурно-развлекательный центр"
                                    titleClass="text-[18px] text-[#640d14]" id="center" itemClass="pt-5"
                                    @click="updateInfr('centre')">
                                    приватные залы для кинопросмотра, арт-пространства и детский развлекательный центр
                                </x-accordion.desc>
                                <x-accordion.line />

                                <x-accordion.desc title="home-park" id="park"
                                    titleClass="text-[18px] text-[#640d14]" itemClass="pt-5" @click="updateInfr('park')">
                                    Спортивные, детские и площадки для отдыха
                                </x-accordion.desc>
                                <x-accordion.line />
                            </div>
                        </div>
                        <div x-show="activeTab === 'personal'">
                            <div class="py-4">
                                <h3 class="text-[12px] uppercase text-gray-500">Personal – внутренняя инфраструктура
                                    только
                                    для
                                    резидентов ADELINE</h3>
                            </div>

                            <div class="pr-10 h-[382px] overflow-y-auto">
                                {{-- Паркинг --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('Паркинг') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="Priority паркинг" id="priority_parking"
                                        @click="updateInfr('priority_parking')">
                                        drop-off и паркинг −1 уровня только для резидентов клубных домов LIFE <br>
                                        Резидентам комплекса доступны специальные парковочные места для электромобилей.
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="Quality паркинг" id="quality_parking"
                                        @click="updateInfr('quality_parking')">
                                        На подземном уровне организован паркинг, способный вместить 620 автомобилей.
                                        Двухуровневый паркинг с дизайнерской отделкой и системой распознавания номеров.
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- Amenities --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('Amenities') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="Priority Amenities" id="priority_amenties"
                                        @click="updateInfr('priority_amenities')">
                                        инфраструктура только для резидентов клубных домов LIFE - создано особое
                                        пространство для жизни и общения — ваш личный центр притяжения с безупречным
                                        сервисом и атмосферой приватности.
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="Quality Amenities" id="quality_amenities"
                                        @click="updateInfr('quality_amenities')">
                                        Инфраструктура для всех резидентов клубных домов
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- Келлеры --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('Келлеры') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="Priority келлеры" id="priority_kellers"
                                        @click="updateInfr('priority_kellers')">
                                        Дополнительно на подземном уровне предусмотрены специальные места для мотоциклов и
                                        велопарковка.
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="Quality келлеры" id="quality_kellers"
                                        @click="updateInfr('quality_kellers')">
                                        Келлеры от 2 до 9 м² на подземном уровне — храните сезонные вещи, спортивный
                                        инвентарь и все, чем редко пользуетесь дома.
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[60%] h-[500px] mt-4">
                    <div class="swiper-wrapper">
                        <template x-for="(img, index) in activeInfr" :key="img + index">
                            <img :src="img" class="w-full h-full object-cover">
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </x-light>

    {{-- Детям --}}
    <x-dark containerType="mx-50" id="6">
        <div class="flex justify-between">
            <div class="w-[50%]">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181787/child_sbibwb.webp" alt="child">
            </div>
            <div class="w-[50%]">
                <x-mTitle>
                    Детям
                </x-mTitle>
                <x-title :dark="true">
                    Всё для счастья <br>
                    детей
                </x-title>
                <x-p>
                    Разнообразие инфраструктуры для младших резидентов ADELINE наполнит любой день новыми открытиями,
                    увлекательными приключениями, а во дворе всегда будет звучать искренний детский смех.
                </x-p>
            </div>
        </div>
        <x-Title :dark="true" class="!text-2xl text-primary-light py-20">
            Мы считаем ранний возраст крайне важным для развития каждого человека и высоко ценим наших маленьких
            резидентов
        </x-Title>
        <div class="flex justify-between">
            <div class="w-[40%] flex justify-between flex-col">
                <x-mTitle class="text-primary-light">
                    поэтому
                </x-mTitle>
                <x-p>
                    детская инфраструктура реализована так, чтобы весёлый смех не стихал, счастливые улыбки не
                    сходили с лиц, а свобода выбора начиналась с первых лет жизни.
                </x-p>
            </div>
            <div class="flex-1">
                <div class="flex justify-between">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181784/img2_eewbek.webp" alt="child">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181785/img3_psxnsa.webp" alt="child">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181785/img4_bg1550.webp" alt="child">
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-10 flex-wrap pt-20 my-10">
            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181786/img8_qkv5q7.jpg" alt="child">
            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181786/img6_rjnbju.jpg" alt="child">
            <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181786/img7_dymx21.jpg" alt="child">
        </div>
        <div class="flex justify-between py-20 my-10 gap-20">
            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181788/img5_zyleh7.jpg" alt="child">
            </div>
            <div class="w-[40%]">
                <x-mTitle class="text-primary-light">
                    время быть вместе
                </x-mTitle>
                <p class="py-10">Провести время с семьей в River Park Кутузовский интересно, удобно и не придется тратить
                    время на дорогу. В вашем распоряжении много возможностей.</p>
                <x-p>
                    <ul class="list-disc pl-4">
                        <li>Home park для прогулок в 2 Га</li>
                        <li>Две детские площадки</li>
                        <li>Детский игровой клуб – 220 м2, потолки 6 м</li>
                        <li>Спортивная игровая площадка</li>
                        <li>Семейные вечера на крышах с беседками и грилями</li>
                        <li>Party-lounge для праздников и просмотров кино</li>
                        <li>Гольф-симулятор</li>
                        <li>Караоке</li>
                        <li>Прибрежный парк для прогулок</li>
                    </ul>
                </x-p>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="w-[40%]">
                <x-mTitle>
                    собственная школа
                </x-mTitle>
                <x-title :dark="true">
                    Твой путь в образовании
                </x-title>
                <x-p>
                    ШКОЛА – 460 МЕСТ <br>
                    ДЕТСКИЙ САД – 200 мест <br><br>
                    Садик и школа буквально во дворе. Можно поспать подольше и не бояться опоздать, а если забыли дома
                    любимую игрушку — за ней легко сбегать на перемене.
                </x-p>
            </div>
            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181786/img9_k4tqop.webp" alt="">
            </div>
        </div>
    </x-dark>

    {{-- Лобби --}}
    <x-light containerType="mx-50" id="7">
        <div class="flex justify-between items-center">
            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181801/lobi_bdwfil.png" class="" alt="place">
            </div>
            <div class="flex-1">
                <x-mTitle>
                    лобби
                </x-mTitle>
                <x-title :dark="false" class="mt-[70px]">
                    Как в лучших
                    отелях мира
                </x-title>
                <br><br>
                <x-p>
                    Окунитесь в атмосферу дизайнерского лобби от именитого бюро, которое знаменито своими работами для
                    премиальных отелей и ресторанов по всей планете.
                </x-p>
            </div>
        </div>
    </x-light>

    <x-light containerType="mx-50">
        <div class="relative w-full overflow-visible">
            <div class="absolute left-0 top-0">
                <x-title class="text-6xl">Галерея</x-title>
            </div>
            <div class="w-full">
                <svg viewBox="0 0 1858 457" class="w-full h-auto drop-shadow-lg -scale-x-100" fill="none"
                    xmlns="http://www.w3.org">
                    <path fill="#bec6cb"
                        d="M1820.8 456.557H36.6019C16.3985 456.557 0.00146484 440.161 0.00146484 419.959V36.5962C0.00146484 14.4545 19.5095 -2.59998 41.4332 0.327852L1825.63 238.141C1843.82 240.556 1857.4 256.074 1857.4 274.409V419.959C1857.4 440.161 1841.01 456.557 1820.8 456.557Z">
                    </path>
                </svg>
            </div>
            <div class="absolute inset-0 flex justify-end items-center pt-[55px] px-5 pointer-events-none">
                <div class="max-w-[60%] md:max-w-[45%] text-[#311213] pointer-events-auto">
                    <x-span>
                        Лобби впечатляют не только своим видом, но и продуманной логистикой. Здесь предусмотрены отдельный
                        вход через помещение для колясок, возможность оставлять посылки в почтовых комнатах и дополнительный
                        сервисный лифт с отдельным коридором, позволяющий разделить движение обслуживающего персонала и
                        резидентов и также мягкая зона с библиотекой.
                    </x-span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-[600px] w-full p-4">

            <div class="grid grid-rows-2 gap-4 md:col-span-1">
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181801/lobi_bdwfil.png"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181800/img2_l91ete.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
            </div>

            <div class="md:col-span-2 overflow-hidden rounded-3xl">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181801/img5_bhnovd.jpg"
                    class="w-full h-full object-cover hover:scale-105 transition" alt="">
            </div>

            <div class="grid grid-rows-2 gap-4 md:col-span-1">
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181799/img3_w9gngn.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181801/img4_stqggy.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
            </div>

        </div>
    </x-light>

    {{-- Amenities --}}
    <x-light containerType="mx-50" class="pt-60" id="8">
        <h1 class="text-4xl">AMENITIES</h1>

        <div x-data="{ activeTab: 'central' }" class="mt-3">
            <div class="flex justify-between" x-data="{
                activeInfr: window.infrastructureData.piazza,

                updateInfr(category) {
                    this.activeInfr = window.infrastructureData[category];

                    this.$nextTick(() => {
                        if (window.mySwiper) {
                            window.mySwiper.update();
                            window.mySwiper.slideTo(0, 0);
                        }
                    });
                }
            }">
                <div class="w-[30%]">
                    <x-accordion.tabs tab1="central" tab2="priority" activeTab="central" />
                    <div x-data="{ active: 'fitness-room' }">
                        <div x-show="activeTab === 'central'">
                            <div class="py-4">
                                <h3 class="text-[12px] uppercase text-gray-500">Central amenities - для резидентов всех
                                    домов ADELINE
                                </h3>
                            </div>
                            <div class="pr-10 h-[382px] overflow-y-auto">
                                {{-- Для спорта и красоты --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('Для спорта и красоты') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="fitness-room" id="fitness-room"
                                        @click="updateInfr('fitnessRoom')">
                                        Студия для персональных занятий самостоятельно или с личным тренером
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="gym-room" id="gym-room" @click="updateInfr('sportRoom')">
                                        Тренажёрные залы, укомплектованные современным оборудованием с набором кардио- и
                                        силовых тренажеров, а&nbspтакже свободных весов
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="beauty-room" id="beauty-room"
                                        @click="updateInfr('beautyRoom')">
                                        Продуманные до мелочей студии, куда резидент может пригласить личного стилиста,
                                        визажиста или массажиста
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- для бизнеса --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('для бизнеса') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="Business-room" id="business-room"
                                        @click="updateInfr('businessRoom')">
                                        Комфортные и оборудованные переговорные для проведения встреч, работы в тишине или
                                        место, чтобы провести занятия с репетитором
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- для отдыха --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('для отдыха') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="multimedia-room" id="multimedia-room"
                                        @click="updateInfr('multimediaRoom')">
                                        Оборудованная студия для записи подкастов, интервью, reels, вебинаров, проведения
                                        телемостов. Зона хромакея позволит создавать не только аудио-, но и видео-шедевры
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="play-room" id="play-room" @click="updateInfr('playRoom')">
                                        современный игровой центр для РС и VR, оснащенный удобной мебелью и новейшим
                                        оборудованием. Для любителей уютных киновечеров здесь возможно организовать просмотр
                                        любимого фильма
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="lounge-room" id="lounge-room"
                                        @click="updateInfr('loungeRoom')">
                                        Гостиная для проведения уютных вечеров с соседями или приватных мероприятий, в
                                        составе пространства предусмотрена chef”s kitchen – оборудованная открытая кухня
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- для детей --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('для детей') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="kids-club" id="kids-club" @click="updateInfr('kidsClub')">
                                        всесезонное трансформируемое пространство для детского развития и творчества, а
                                        также для проведения детских мероприятия, мастер-классов и просмотра мультиков в
                                        компании маленьких соседей. Для удобства резидентов в Kids-club будут размещены
                                        комнаты матери и ребёнка
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'priority'">
                            <div class="py-4">
                                <h3 class="text-[12px] uppercase text-gray-500">Priority amenities - только для резидентов
                                    клубных домов LIFE, в которых они расположены.</h3>
                            </div>

                            <div class="pr-10 h-[382px] overflow-y-auto">
                                <div>
                                    <x-accordion.title>
                                        {{ __('Для спорта и красоты') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="gym-room" id="gym-room" @click="updateInfr('gymRoom2')">
                                        пространство, в составе которого объединены тренажерный зал и студия персональных
                                        тренировок
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                    <x-accordion.desc title="beauty-room" id="beauty-room"
                                        @click="updateInfr('beautyRoom2')">
                                        Продуманные до мелочей студии, куда резидент может пригласить личного стилиста,
                                        визажиста или массажиста
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- для бизнеса --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('для бизнеса') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="Business-room" id="business-room"
                                        @click="updateInfr('businessRoom')">
                                        Комфортные и оборудованные переговорные для проведения встреч, работы в тишине или
                                        место, чтобы провести занятия с репетитором
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- для отдыха --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('для отдыха') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="lounge-room" id="lounge-room"
                                        @click="updateInfr('loungeRoom')">
                                        гостиная для проведения уютных вечеров с соседями или приватных мероприятий, в
                                        составе пространства предусмотрена chef”s kitchen – оборудованная открытая кухня
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                                {{-- для детей --}}
                                <div>
                                    <x-accordion.title>
                                        {{ __('для детей') }}
                                    </x-accordion.title>
                                    <x-accordion.desc title="kids-club" id="kids-club" @click="updateInfr('kidsClub')">
                                        Детская комната для игр и развития
                                    </x-accordion.desc>
                                    <x-accordion.line />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[60%] h-[500px] mt-4">
                    <template x-for="(img, index) in activeInfr" :key="img + index">
                        <img :src="img" class="w-full h-full object-cover">
                    </template>
                </div>
            </div>
        </div>
    </x-light>

    {{-- ART --}}
    <x-light containerType="mx-50" id="9">

        <div class="flex justify-between items-center">
            <div class="w-[50%]">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181783/art_fgx6s2.jpg" class="" alt="art">
            </div>

            <div class="w-[50%]">
                <x-mTitle>
                    искусство
                </x-mTitle>
                <x-title :dark="false" class="font-cinzel">
                    ART <i class="font-cinzel text-lg">de</i> VIVRE
                </x-title>
                <x-p>
                    ADELINE – это не только исключительное место для жизни, но и уникальная возможность начать
                    путешествие в мир искусства. Команда арт-консьержей LOBBY будет курировать домашнюю коллекцию
                    произведений искусства и библиотеку дома, а также организовывать закрытые мероприятия, возрождая
                    традиции интеллектуальных салонов, которые были популярны в Пречистенских особняках в начале XX века.
                </x-p>
                <x-button :dark="false">Коллекция искусства</x-button>
            </div>
        </div>

    </x-light>

    {{-- Apartament --}}
    <x-light containerType="mx-50" id="10">

        <div class="flex justify-between items-center">

            <div class="w-[50%]">
                <x-mTitle>
                    апартаменты
                </x-mTitle>
                <x-title :dark="false">
                    ИДЕАЛЬНЫЕ <br>
                    ПРОПОРЦИИ
                </x-title>
                <x-p>
                    Высокие потолки от 3,5м метров, простое и функциональное зонирование, органичное разделение на приватные
                    и
                    гостевые зоны помогают избежать утомительного поиска гениальных планировочных решений. Мастер-спальни с
                    просторными ванными и гардеробными с окнами – как единое приватное пространство владельцев. От двух до
                    четырех апартаментов в одном лифтовом холле гарантируют ощущение уединенности и исключительности.
                </x-p>
                <x-button :dark="false">Выбрать квартиру</x-button>
            </div>

            <div class="w-[50%]">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181785/apart_nyextz.webp" class="" alt="art">
            </div>
        </div>

    </x-light>

    <x-slaider.center :images="[
        'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181784/img1_kxaiw5.jpg',
        'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181784/img3_qducax.jpg',
        'https://res.cloudinary.com/dg4najz1s/image/upload/v1772181785/img4_rnuen3.jpg'
    ]">
        <x-slot name="title">
            от студий до пентхаусов
        </x-slot>
        Коллекция интерьеров ADELINE включает варианты в элегантной классической и в броской современной стилистике. Для
        реализации индивидуальных дизайнерских концепций предусмотрена опция White Box Deluxe — новое прочтение предчистовой
        отделки.
        Потрясающий выбор форматов
        с прекрасными видами:
        <ul class="list-disc pl-4">
            <li>Квартиры с балконами и террасами</li>
            <li>эффектными радиусными окнами</li>
            <li>пентхаусы</li>
        </ul>
    </x-slaider.center>

    {{-- FINISH --}}
    <x-dark containerType="max-w" class="pt-60" id="11">
        <x-mTitle>
            New Luxury Aesthetics
        </x-mTitle>
        <x-title :dark="true" class="text-6xl">Финишная отделка</x-title>
        <x-p class="text-lg">
            Изысканные коллекции финишной отделки подобраны так, чтобы идеально дополнить уникальные пространства квартир
        </x-p>
    </x-dark>

    <x-dark containerType="mx-50 py-20">
        <div class="flex gap-10 overflow-hidden" x-data="{ active: null }">

            <div class="flex-1 relative transition-all duration-700" @mouseenter="active = 1" @mouseleave="active = null"
                :class="active !== null && active !== 1 ? 'brightness-[0.4]' : 'brightness-100'">

                <x-mTitle class="absolute top-10 left-1/2 -translate-x-1/2 text-[10px]">Dark & Light
                </x-mTitle>
                <x-title class="absolute top-14 left-1/2 -translate-x-1/2">Classic</x-title>

                <img class="w-full h-[600px] object-cover" src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181787/img1_kwvyfb.webp" alt="">

            </div>

            <div class="flex-1 relative transition-all duration-700" @mouseenter="active = 2" @mouseleave="active = null"
                :class="active !== null && active !== 2 ? 'brightness-[0.4]' : 'brightness-100'">

                <x-mTitle class="absolute top-10 left-1/2 -translate-x-1/2 text-[10px]">Dark & Light
                </x-mTitle>
                <x-title class="absolute top-14 left-1/2 -translate-x-1/2">Modern</x-title>

                <img class="w-full h-[600px] object-cover" src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181788/img2_cgplog.webp" alt="">

            </div>

            <div class="flex-1 relative transition-all duration-700" @mouseenter="active = 3" @mouseleave="active = null"
                :class="active !== null && active !== 3 ? 'brightness-[0.4]' : 'brightness-100'">

                <x-title class="absolute top-14 left-1/2 -translate-x-1/2">Timeless</x-title>

                <img class="w-full h-[600px] object-cover" src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181788/img3_hb0trz.webp" alt="">

            </div>

        </div>
    </x-dark>

    <x-dark containerType="mx-50">

        <div class="flex justify-between gap-10 items-center">
            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181788/img4_dzpohe.webp" class="" alt="art">
            </div>

            <div class="flex-1">
                <x-mTitle>
                    white box deluxe
                </x-mTitle>
                <x-title :dark="true">
                    Предчистовая отделка
                </x-title>
                <x-p>
                    Концептуальный подход к подготовке квартир в предчистовой отделке White Box Deluxe, выполненной на самом
                    высоком уровне, соответствует классу проекта. Он основан на исключительных архитектурных и интерьерных
                    решениях и на применении премиальной Smart-инженерии и оборудовании.
                    <br><br>
                    White Box Deluxe дает возможность адаптировать пространство квартиры под личные потребности и
                    индивидуальный дизайн-проект самого высокого уровня.
                </x-p>
            </div>
        </div>

    </x-dark>

    {{-- Parking --}}
    <x-light containerType="mx-50" id="12">

        <div class="flex justify-between items-center">
            <div class="flex-1">
                <x-mTitle>
                    паркинг
                </x-mTitle>
                <x-title :dark="false">
                    по вашим правилам
                </x-title>
                <x-p>
                    Футуристичный robot-parking припаркует вашу машину самостоятельно.
                    <br><br>
                    Лифт на -2 уровне считает BLE- метку или гос.номер и откроет двери. Оставьте свой автомобиль в лифте,
                    приложите ключ- карту к считывателю и ваш автомобиль будет автоматически припаркован на -3 уровне
                    паркинга.
                </x-p>
            </div>

            <div class="flex-1">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181792/pparking1_vnijyt.webp" class="" alt="parking">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-[600px] w-full p-4 mt-20">

            <div class="grid grid-rows-2 gap-4 md:col-span-1">
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181798/qparking2_sj1ti0.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181792/pparking3_v6rw6z.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
            </div>

            <div class="md:col-span-2 overflow-hidden rounded-3xl">
                <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181799/qparking3_rfiidd.webp"
                    class="w-full h-full object-cover hover:scale-105 transition" alt="">
            </div>

            <div class="grid grid-rows-2 gap-4 md:col-span-1">
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181792/pparking2_dhqzym.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
                <div class="overflow-hidden rounded-3xl">
                    <img src="https://res.cloudinary.com/dg4najz1s/image/upload/v1772181798/qparking1_aikmli.webp"
                        class="w-full h-full object-cover hover:scale-105 transition" alt="">
                </div>
            </div>

        </div>

    </x-light>

    <x-light containerType="max-w">
        <x-mTitle>
            Adeline: Invisible Perfection
        </x-mTitle>
        <x-title :dark="false" class="text-6xl">ТЕХНОЛОГИИ НА СЛУЖБЕ ВАШИХ ЦЕННОСТЕЙ</x-title>

        <div class="flex justify-between gap-20 mx-20 text-lg">
            <p>
                Создание особой атмосферы в стенах ADELINE обеспечивают ряд современных инженерных систем. Умная система
                приточно-вытяжной вентиляции от Swegon (Швеция) очищает, нагревает (или охлаждает в летний сезон) и
                увлажняет
                воздух, поступающий в апартаменты. Индивидуальное мультизональное кондиционирование от DAIKIN (Япония)
                позволяет
                задать оптимальную температуру в каждом помещении.
            </p>
            <p>
                Очистная станция Grunbeck (Германия) превращает всю воду, попадающую в дом, в питьевую, – смягчая и убирая
                излишки железа. Современные конвекторы от ведущих европейских производителей JAGA (Бельгия) и Kermi
                (Германия)
                позволяет сохранять комфортные +20 – +22°С, а также регулировать температуру персонально.
            </p>
        </div>
    </x-light>

    <x-light containerType="max-w" id="13">
        <div class="flex justify-between">
            <div class="">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Aebb15b49b3c20d133eadc90e35fb690ce5208f1527c64b71862a7031df7b4971&amp;source=constructor"
                    width="508" height="448" frameborder="0"></iframe>
            </div>
            <div class="team-container">
                <h2 class="team-title text-primary-dark font-semibold">КОМАНДА</h2> <br>

                <div class="team-grid">
                    <div class="team-item">
                        <p class="label pb-2 text-[#640d14]">ДЕВЕЛОПЕР ПРОЕКТА</p>
                        <p class="value">ООО «СПЕЦИАЛИЗИРОВАННЫЙ ЗАСТРОЙЩИК <br> «ТОРГОВЫЙ ДОМ ШАТЕР»</p>
                    </div> <br>

                    <div class="team-item">
                        <p class="label pb-2 text-[#640d14]">АРХИТЕКТОР ПРОЕКТА</p>
                        <p class="value">АРХИТЕКТУРНОЕ БЮРО SPEECH</p>
                    </div> <br>

                    <div class="team-item">
                        <p class="label pb-2 text-[#640d14]">ЛАНДШАФТНЫЙ ДИЗАЙН</p>
                        <p class="value">АРХИТЕКТУРНОЕ БЮРО ADM</p>
                    </div> <br>

                    <h2 class="team-title text-primary-dark font-semibold">КОНТАКТЫ</h2> <br>
                    <div class="team-item contacts">
                        <div class="value">
                            <p class="pb-2">Воскресенская набережная, вл.43</p>
                            <p class="pb-2"><a href="tel:+79373967290">+7 (937) 396 72 90</a></p>
                            <p><a href="mailto:info@adeline.com">info@adeline.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </x-light>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const headers = document.querySelectorAll('.accordion-header');

        headers.forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.classList.toggle('hidden');
                const icon = header.querySelector('.accordion-icon');
                icon.textContent = content.classList.contains('hidden') ? '+' : '−';
            });
        });
    });
</script>
