<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MyController extends Controller
{

    public static function enterHome()
    {
        // WYŚWIETLANIE KOLUMN KOLUMN KOLUMN 
        $kolumnauthora = DB::table('thumbnailcontent')->pluck('author');

        // WYŚWIETLANIE WIERSZY WIERSZY WIERSZY
        $idk = 1;

        while ($idk < 3) {
             $idk++;
        }

        $user = DB::table('thumbnailcontent')->find($idk);

        return (view("layout", [
            "kolumnas" => $kolumnauthora,
            "idNum" => $idk,
            "wiersze" => $user,
        ])
        );
    }
}
