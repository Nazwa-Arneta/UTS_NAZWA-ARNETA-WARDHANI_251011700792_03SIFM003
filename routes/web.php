<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGearController;

Route::get('/', [CampGearController::class, 'index'])->name('home');

Route::get('/catalog', [CampGearController::class, 'catalog'])->name('catalog');

Route::get('/camp-gears/{id}', [CampGearController::class, 'show'])
    ->whereNumber('id')
    ->name('camp-gears.show');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
