<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\SuratIzinController;

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
// Route::get('/SuratIzin', SuratIzinController, 'index')->name('home');
Route::resource('suratizin', SuratIzinController::class);
Route::resource('suratcuti', SuratCutiController::class);



Route::get('/TukarJaga', function () {
    return view('formtukarjagamobile');
});

Route::get('/PermohonanCuti', function () {
    return view('formcutimobile');
});

// Route::get('/mobile', function () {
//     return view('homemobile');
// });

// Route::get('/PermohonanIzin', function () {
//     return view('formizinmobile');
// });

// Route::get('/lihat', function () {
//     return view('lihatstatusmobile');
// });

// Route::get('/statustukarjagamobile', function () {
//     return view('statustukarjagamobile');
// });

// Route::get('/statusizinmobile', function () {
//     return view('statusizinmobile');
// });

// Route::get('/statuscutimobile', function () {
//     return view('statuscutimobile');
// });

// Route::get('/templateizinn', function () {
//     return view('templateizin');
// });
// Route::get('/templateizin', function () {
//     return view('karyawan.SuratIzin.templateizin');
// });
// Route::get('/templatecuti', function () {
//     return view('karyawan.SuratCuti.templatecuti');
// });

// Route::get('/templatecutii', function () {
//     return view('templatecuti');
// });

Route::get('/templatetukarjaga', function () {
    return view('karyawan.SuratTukarJaga.templatetukarjaga');
});

// Route::get('/tes', function () {
//     return view('tes');
// });
