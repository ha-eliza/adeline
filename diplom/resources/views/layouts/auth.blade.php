<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo.svg') }}" type="image/x-icon">
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

    <div class="flex min-h-screen">
        <div class="w-full lg:w-1/2 flex flex-col p-8 md:p-16">
            <a href="/" class="text-gray-500 mb-12 flex items-center gap-2">
                <span>&lt;</span> назад
            </a>

            <div class="max-w-md w-full mx-auto my-auto">
                @yield('content')
            </div>
        </div>

        <div class=""
            style="background-image: url('https://res.cloudinary.com/dg4najz1s/image/upload/v1772181792/fon_fm0ned.png');">
        </div>
    </div>

</body>

</html>
