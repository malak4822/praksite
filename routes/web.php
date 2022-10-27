<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\DB;
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



Route::get("/event/{id}", function ($id) {

    $all = DB::table('thumbnailContent');

    return view('events', [
        'eventId' => $id,
        'all' => $all,
    ]);
});

Route::get("/", [
    MyController::class, "enterHome",
]);
