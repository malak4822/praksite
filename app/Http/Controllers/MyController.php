<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public static function enterHome()
    {
        return view("home");
    }
}
