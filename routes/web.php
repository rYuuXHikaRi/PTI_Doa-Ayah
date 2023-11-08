<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\UserController;

Route::resource('arsip', ArsipController::class);
Route::resource('user', UserController::class);
Route::get('/arsip/{id}/{file}', [ArsipController::class, 'downloadarsip'])->name('arsipdownload');

route::resource('suratkeluar', SuratKeluarController::class);
Route::get('/suratkeluar/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('Suratkeluar.download');
Route::get('/formtemplate', [SuratKeluarController::class, 'template'])->name('template');


// Route::get('/template', function () {
//     return view('admin.suratkeluar.template');
// });



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
