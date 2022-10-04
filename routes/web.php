<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('/aa', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'function1']);

Route::get('/podstrona{id}', function($id){
    $id = $id+100;
    return "u have $id, i added 100 to it ofc";
    
})->where("id", "[0-9]+");
