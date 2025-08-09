<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/register', function(){
    return view('pages.contact.register');
});

Route::get('/profile', function(){
    return view('pages.about.profile');
});

Route::get('/login', function(){
    return view('pages.auth.login');
});

