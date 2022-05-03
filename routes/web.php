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
    $nav_links = [
        
        [
            "name" => "Laracast",
            "link" => "https://laracasts.com",
        ],

        [
            "name" => "Docs",
            "link" => "https://laravel.com/docs",
        ],

        [
            "name" => "News",
            "link" => "https://laravel-news.com",
        ],

        [
            "name" => "Blog",
            "link" => "https://blog.laravel.com",
        ],

        
        [
            "name" => "Nova",
            "link" => "https://nova.laravel.com",
        ],

        
        [
            "name" => "Forge",
            "link" => "https://forge.laravel.com",
        ],

        
        [
            "name" => "Vapor",
            "link" => "https://vapor.laravel.com",
        ],

        
        [
            "name" => "Github",
            "link" => "https://github.com/laravel/laravel",
        ],

    ]; 

    $array_links = ["links" => $nav_links];

    return view('home',$array_links);
});

Route::get('/custom',function(){
    return view('custom');
})->name('custom');


