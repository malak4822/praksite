<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function function1()
    {
        $essa = 22;
        return view('home', [
            "data" => $essa,
            "ludzie" => [
                1 => [
                    "imie" => "Wojtek",
                    "wiek" => 45,
                    "wzrost" => 179,
                    "opis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
                ],
                2 => [
                    "imie" => "Rafał",
                    "wiek" => 15,
                    "wzrost" => 184,
                    "opis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
                ]
            ]
        ]);
    }
}
