<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Larnexous Solutions</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="antialiased bg-white text-gray-900">

        @include('components.navbar')

        <main class="pt-4">
            @yield('content')
        </main>

        @include('components.footer')

    </body>
</html>
