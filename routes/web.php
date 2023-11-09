<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\TemplateSKController;
use App\Http\Controllers\UserController;

Route::resource('arsip', ArsipController::class);
Route::resource('user', UserController::class);
Route::get('/arsip/{id}/{file}', [ArsipController::class, 'downloadarsip'])->name('arsipdownload');

route::resource('suratkeluar', SuratKeluarController::class);
Route::get('/suratkeluar/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('Suratkeluar.download');

route::resource('templateSK', TemplateSKController::class);
Route::get('/templateSk/{id}', [TemplateSKController::class, 'show'])->name('templateSK.show');
Route::post('/templateSk/{id}', [TemplateSKController::class, 'template'])->name('templateSK.template');
Route::post('/templateSk/{id}', [TemplateSKController::class, 'SavePDF'])->name('templateSK.savePDF');


Route::get('/kelolaSK', function () {
        return view('kelolasuratkeluar');
    });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
