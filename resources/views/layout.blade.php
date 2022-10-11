<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PraktSite</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="bg-stone-700 text-slate-50">
        <h1 class="text-3xl font-bold text-center">
            Hello world!
        </h1>
        @yield('section_1')

        @yield('header_1')

    </div>
</body>

</html>
