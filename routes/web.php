<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::get('/works', function () {
    return 'works page';
})->name('works.get');

Route::get('/blogs', function () {
    return 'blogs page';
})->name('blogs.get');

require __DIR__ . '/auth.php';
