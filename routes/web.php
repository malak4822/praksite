<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ludzie;
use App\Http\Controllers\MyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("home", [
        "ludzie" => Ludzie::all()
    ]);
});

Route::get("/user/{id}", function ($id) {
    return view("users", [
        "czlowiek" => Ludzie::find($id),
    ]);
});
