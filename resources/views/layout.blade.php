<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Test Front')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">
    <nav class="bg-white">
    <div class="container mx-auto xl:max-w-[1280px] 2xl:max-w-[1720px] w-full px-4 md:py-[19px]">
            <img src="{{ asset('images/logo.png') }}" alt="logo"
                class="h-[78px] w-[312px] object-contain" />
        </div>
        <div class="shadow-[0px_3px_14px_#00000029] pt-[42px] pb-[39px]">
            <div class="container mx-auto xl:max-w-[1280px] 2xl:max-w-[1720px] w-full px-4 md:p-0">
                <h1 class="text-[#36578a] ff-b text-2xl xl:text-[33px] font-bold">
                    Test psychotechnique pour permis de conduire à Montgeron
                </h1>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>