<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo.svg') }}" type="image/x-icon">
    {{-- Шрифты --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Tenor+Sans&display=swap"
        rel="stylesheet">
    <title>Adeline | {{ $name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            font-family: "Tenor Sans", sans-serif;
        }

        .container {
            max-width: 1120px;
            margin: 0 auto;
        }

        .required:after {
            content: '*';
            color: red;
            margin-left: 3px;
        }
    </style>
</head>

<body>

    <div class="flex flex-col min-h-screen">

        @include('includes.header')

        <main class="grow">

            @yield('content')

        </main>

        @include('includes.footer')

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</html>
