<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratKeluarController;

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

// Route::get('/arsip', function () {
//     return view('arsip');
// });

// Route::get('/templatesurat', function () {
//     return view('templatesurat');
// });

// Route::get('/kelolasuratmasuk', function () {
//     return view('kelolasuratmasuk');
// });

// Route::get('/kelolasuratkeluar', function () {
//     return view('kelolasuratkeluar');
// });

// Route::get('/buatsuratkeluar', function () {
//     return view('buatsuratkeluar');
// });

route::resource('suratkeluar', SuratKeluarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
