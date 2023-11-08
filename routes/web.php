<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratMasukController;

Route::resource('arsip', ArsipController::class);
Route::resource('user', UserController::class);
Route::get('/arsip/{id}/{file}', [ArsipController::class, 'downloadarsip'])->name('arsipdownload');


Route::get('/templatesurat', function () {
    return view('templatesurat');
});

Route::get('/kelolasuratmasuk', function () {
    return view('kelolasuratmasuk');
});

Route::get('/buatsuratmasuk', function () {
    return view('buatsuratmasuk');
});

Route::get('/perubahansuratmasuk', function () {
    return view('perubahansuratmasuk');
});

Route::resource('suratmasuk',SuratMasukController::class);
Route::get('/suratmasuk/{id}/{file}', [SuratMasukController::class, 'downloadsuratmasuk'])->name('suratmasukdownload');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
