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
    return view('home',[
        "image" => "pepper5.jpg",
        "img"   => "pepper1.jpg"
    ]);

});
Route::get('/about', function () {
    return view('about', [
    	"name" => "BrewTaqi",
    	"email" => "abdullahtaqimahfuz@gmail.com",
    	"image" => "pep.jpg"
    ]);
});
Route::get('/post', function () {
    return view('post');
});
