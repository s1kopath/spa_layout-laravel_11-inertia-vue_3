<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');
Route::get('/features', function () {
    sleep(2);
    return Inertia::render('Features');
})->name('features');

Route::get('/pricing', function () {
    return Inertia::render('Pricing');
})->name('pricing');

Route::get('/faqs', function () {
    return Inertia::render('FAQs');
})->name('faqs');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');
