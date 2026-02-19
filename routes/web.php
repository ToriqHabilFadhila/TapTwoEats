<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function () {
    return view('menu.index');
})->name('menu.all');

Route::get('/menu/popular', function () {
    return view('menu.popular');
})->name('menu.popular');

Route::get('/menu/new', function () {
    return view('menu.new');
})->name('menu.new');

Route::get('/menu/deals', function () {
    return view('menu.deals');
})->name('menu.deals');

Route::get('/restaurants', function () {
    return view('restaurants.index');
})->name('restaurants');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cart', function () {
    return view('cart.index');
})->name('cart');
