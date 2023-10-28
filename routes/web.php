<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/arsip', function () {
    return view('arsip');
});

Route::get('/dashboardkabag', function () {
    return view('dashboardkabag');
});

Route::get('/daftarpermohonan', function () {
    return view('daftarpermohonankabag');
});

Route::get('/templatesurat', function () {
    return view('templatesurat');
});

Route::get('/kelolasurat', function () {
    return view('kelolasurat');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');