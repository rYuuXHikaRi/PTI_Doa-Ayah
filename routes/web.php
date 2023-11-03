<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratMasukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arsip', function () {
    return view('arsip');
});

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
