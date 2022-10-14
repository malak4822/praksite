<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MyController extends Controller
{

    public static function enterHome()
    {
        // WYŚWIETLANIE KOLUMN KOLUMN KOLUMN 
        $kolumnauthora = DB::table('thumbnailContent')->pluck('author');

        return (view("layout", [
            "kolumnas" => $kolumnauthora,
        ])
        );
    }
}
