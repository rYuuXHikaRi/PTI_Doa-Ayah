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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/TukarJaga', function () {
    return view('formtukarjagamobile');
});

Route::get('/PermohonanCuti', function () {
    return view('formcutimobile');
});

Route::get('/mobile', function () {
    return view('homemobile');
});

Route::get('/PermohonanIzin', function () {
    return view('formizinmobile');
});

Route::get('/lihat', function () {
    return view('lihatstatusmobile');
});

Route::get('/statustukarjagamobile', function () {
    return view('statustukarjagamobile');
});

Route::get('/statusizinmobile', function () {
    return view('statusizinmobile');
});

Route::get('/statuscutimobile', function () {
    return view('statuscutimobile');
});

Route::get('/profilemobile', function () {
    return view('profilemobile');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/tes', function () {
    return view('tes');
});