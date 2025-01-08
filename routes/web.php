<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('contact')->group(function () {
    Route::get('/', function () {
        return view('contact');
    })->name('contact.index');
    Route::post('/submit', function () {
        return redirect()->route('contact.index')->with('success', 'Tin nhắn của bạn đã được gửi!');
    })->name('contact.submit');
});