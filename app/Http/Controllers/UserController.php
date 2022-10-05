<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class UserController extends Controller
{
    public function function1()
    {
        $essa = 22;
        return view('home', [
            "data" => $essa,
        ]);
    }
}
