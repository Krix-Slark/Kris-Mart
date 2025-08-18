<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/home', function () {
    return view('Home.index');
});
