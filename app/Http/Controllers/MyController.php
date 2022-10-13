<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public static function enterHome()
    {
        return (
            view("layout")
        );
    }
}
