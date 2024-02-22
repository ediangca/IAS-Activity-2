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

Route::get('/account/{name?}', function($name = "404"){
    if($name == "404"){
        return view("404");
    }else{
        return view("account");
    }
})->name("account-name");

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/aboutus', function () {
    return view('aboutus');
})->name("aboutus");

Route::get('/services', function () {
    return view('services');
})->name("services");

Route::get('/contactus', function () {
    return view('contactus');
})->name("contactus");


Route::name('dashboard.')->group(function () {
    Route::get('/admin', function () {
       return view("account");
    })->name('admin');
    Route::get('/user', function () {
       return view("account");
    })->name('user');
});