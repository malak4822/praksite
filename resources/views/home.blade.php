<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
</head>

<body>
    <h1>Użytkownicy :</h1>
    <h2>
        @unless(count($ludzie) == 0)
            <h2>Lista zawiera elementy, oto one :</h2>

            @foreach ($ludzie as $czlowiek)
                <h3> <a href="user/{{ $czlowiek['id'] }}"> {{ $czlowiek['imie'] }} </a> </h3>
            @endforeach
        @else
            <h2>W liście elementów brak</h2>
        @endunless
    </h2>

</body>

</html>
