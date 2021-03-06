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
    return view('landing-page.index');
});

Route::get('/gallery', function () {
    return view('landing-page.gallery');
});

Route::get('/product', function () {
    return view('landing-page.product_details');
});

Route::get('/about', function () {
    return view('landing-page.about');
});

Route::get('/contact', function () {
    return view('landing-page.contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
