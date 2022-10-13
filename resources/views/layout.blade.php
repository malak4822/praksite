<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PraktSite</title>
    <script></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('commonHeader')
    @include('searchbar')
    @yield('topHeader')
    @include('contentList')
    @include('footer')
    {{$srata}}

</body>

</html>
