<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public static function enterHome()
    {
        return (array
        (
            array("Bartek", 22, 184),
            array("Marek", 15, 156),
            array("Adrian", 5, 189),
            array("Józek", 17, 138),
        ));
    }
}
