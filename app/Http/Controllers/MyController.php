<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class MyController extends Controller
{

    public static function enterHome()
    {
        $all = DB::table('thumbnailContent')->get();

        return (view("layout", [
            "all" => $all,
        ])
        );
    }
}
