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
    return view('welcome');
});

Route::get('/arsip', function () {
    return view('arsip');
});

Route::get('/dashboardkabag', function () {
    return view('dashboardkabag');
});

Route::get('/daftarpermohonansuratmasuk', function () {
    return view('daftarpermohonansuratmasuk');
});

Route::get('/daftarpermohonansuratkeluar', function () {
    return view('daftarpermohonansuratkeluar');
});

Route::get('/daftarpermohonanizin', function () {
    return view('daftarpermohonanizin');
});

Route::get('/daftarpermohonancuti', function () {
    return view('daftarpermohonancuti');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
