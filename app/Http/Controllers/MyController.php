<?php

namespace App\Http\Controllers;

class MyController extends Controller
{

    public static function enterHome()
    {
        $ue = 232323232;
        return (view("layout", [
            "srata" => $ue,
        ])
        );
    }
}
