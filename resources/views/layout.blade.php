<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PraktSite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body onload="hideSearchBar(), hideMenu()">

    @include('commonHeader')
    <div class="box">
        @include('searchbar')
        {{-- czym się różni @yield('topHeader') od 
        @include i czemu nie mogę go używać wszędzie --}}
        @include('home')
        @include('contentList')
    </div>
    @include('footer')

</body>

</html>
