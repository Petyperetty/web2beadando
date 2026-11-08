<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MoziController;

Route::view('/', 'fooldal')->name('fooldal');
Route::view('/diagram', 'diagram')->name('diagram');
Route::view('/bejelentkezes', 'bejelentkezes')->name('bejelentkezes');
Route::view('/regisztracio', 'register')->name('regisztracio');
Route::view('/crud', 'crud')->name('crud');
Route::view('/kapcsolat', 'kapcsolat')->name('kapcsolat');
Route::view('/uzenetkuldes', 'uzenetkuldes')->name('uzenetkuldes');
Route::get('/adatbazis', [MoziController::class, 'adatbazis'])->name('adatbazis');
Route::get('/adatbazis/{id}', [MoziController::class, 'show']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {return Inertia::render('dashboard');})->name('dashboard');
    Route::get('user', function () { return view('user'); })->name("user");
    Route::get('admin', 'App\Http\Controllers\AdminController@adminPage');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('exercise1', function () { return view('view1'); });
Route::get('introduction', function () { return view('introduction'); });

