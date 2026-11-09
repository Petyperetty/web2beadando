<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MoziController;
use App\Http\Controllers\UzenetekController;

Route::view('/', 'fooldal')->name('fooldal');
Route::get('/diagram', [MoziController::class, 'diagram'])->name('diagram');
Route::view('/bejelentkezes', 'bejelentkezes')->name('bejelentkezes');
Route::view('/regisztracio', 'register')->name('regisztracio');
Route::view('/kapcsolat', 'kapcsolat')->name('kapcsolat');
Route::post('/kapcsolat', [UzenetekController::class, 'store']);
Route::delete('/del/{id}', [MoziController::class, 'del'])->name('mozi.torles');
Route::PUT('/modify/{id}', [MoziController::class, 'modify'])->name('modify');
Route::post('/modify/{id}', [MoziController::class, 'filmListById'])->name('mozi.modify');
Route::view('/kapcsolat', 'kapcsolat')->name('kapcsolat');
Route::get('/uzenetek', [UzenetekController::class, 'show'])->name('uzenetek');
Route::get('/mozik', [MoziController::class, 'mozik'])->name('mozik');
Route::get('/mozik/{id}', [MoziController::class, 'show']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {return Inertia::render('dashboard');})->name('dashboard');
    Route::get('user', function () { return view('user'); })->name("user");
    Route::get('admin', 'App\Http\Controllers\AdminController@adminPage');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('exercise1', function () { return view('view1'); });
Route::get('introduction', function () { return view('introduction'); });

