<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
  //  return ['laravel'=> "hell world"];
});

Route::get('/contact', function () {
    return json_encode(['laravel'=> "hell world"]);
    //return view('contact');
});
