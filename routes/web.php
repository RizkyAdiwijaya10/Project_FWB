<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamananController;


// Route::get('/', function () {
//     return view('HalamanUtama.index');
// });


// Route:: get('/index', [HalamananController::class, 'index']);
// Route:: get('/home', [HalamananController::class, 'home']);
// Route:: get('/about', [HalamananController::class, 'about']);
// Route:: get('/event', [HalamananController::class, 'event']);
// Route:: get('/galery', [HalamananController::class, 'galery']);
// Route:: get('/contact', [HalamananController::class, 'contact']);
// Route:: get('/chef', [HalamananController::class, 'chef']);
// Route:: get('/booking', [HalamananController::class, 'booking']);

Route::controller(HalamananController::class)->group(function () {
    // Route::get('/', '')->name('index');
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/event', 'event')->name('event');
    Route::get('/galery', 'galery')->name('galery');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/chef', 'chef')->name('chef');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/menu', 'menu')->name('menu');
});