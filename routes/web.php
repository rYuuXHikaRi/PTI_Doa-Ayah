<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::middleware(['auth','role:1'])->group(function () {
    Route::resource('arsip', ArsipController::class);
    Route::get('/arsip/{id}/{file}', [ArsipController::class, 'downloadarsip'])->name('arsipdownload');

    Route::resource('suratmasuk',SuratMasukController::class);
    Route::get('/suratmasuk/download/{id}/{file}', [SuratMasukController::class, 'downloadsuratmasuk'])->name('suratmasukdownload');

    
    Route::resource('user', UserController::class);
    Route::resource('dispost', DisposisiController::class);
    Route::post('/disposisi/add/{id}/{status}', [DisposisiController::class,'store'])->name('disposisi.tambahdisposisi');

    
    Route::resource('suratkeluar', SuratKeluarController::class);
    Route::get('/suratkeluar/download/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('suratkeluar.download');
    Route::get('/formtemplate', [SuratKeluarController::class, 'template'])->name('template');
    Route::get('/suratkeluar/approved/{id}', [SuratKeluarController::class,'approve'])->name('suratkeluar.approved');
    Route::get('/suratkeluar/rejected/{id}', [SuratKeluarController::class,'reject'])->name('suratkeluar.rejected');
    Route::get('/suratkeluar/restored/{id}', [SuratKeluarController::class,'restore'])->name('suratkeluar.restored');
});

Route::middleware(['auth','role:2'])->group(function () {
    Route::resource('arsip', ArsipController::class);
    Route::resource('user', UserController::class);
});











// Route::put('/suratkeluar/rejected/{id}', [SuratKeluarController::class,'tolaksurat'])->name('suratkeluar.tolak');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/template', function () {
//     return view('admin.suratkeluar.template');
// });



Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
