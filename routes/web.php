<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $hello = "Hello world";


    return view('home', [
        'hello' => $hello, 
    ]);
    
});


Route::get('page2', function () {
    $page2 = "Page 2";

    return view('page2', [
        'page2' => $page2, 
    ]);
    
});