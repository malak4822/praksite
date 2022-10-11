@extends('layout')

@section('section_1')
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
@stop
