<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    $user = "NICOLE";
    $arr = ["MANGO", 2, 6];
    //dd($user, $arr);//die and dump s'affiche et s'arrête
    ddd($user, $arr, "");
    return "<h1>WELCOME  $user </h1>🤩!";
});
