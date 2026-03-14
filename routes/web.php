<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return inertia('Auth/Login');
});

Route::get('/register', function () {
    return inertia('Auth/Register');
});
