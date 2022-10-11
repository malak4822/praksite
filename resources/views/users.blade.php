@extends('layout')

@section('section_2')
    <h1> Imie to {{ $czlowiek['imie'] }}
        a wzrost to {{ $czlowiek['wzrost'] }}</h1>

    <h2>Wzrost to {{ $czlowiek['wiek'] }}</h2>
@endsection
