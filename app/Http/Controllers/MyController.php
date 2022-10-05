<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public static function enterHome()
    {

        return view(
            "home",
            [
                "auta" => array(
                    array("Volvo", 22, 18),
                    array("BMW", 15, 13),
                    array("Saab", 5, 2),
                    array("Land Rover", 17, 15)
                ),
            ]
        );
    }
}
