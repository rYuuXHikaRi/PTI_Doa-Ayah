<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\TemplateSKController;
use App\Http\Controllers\Admin\DisposisiController;
use App\Http\Controllers\Admin\SuratMasukController;
use App\Http\Controllers\Admin\SuratKeluarController;
use App\Http\Controllers\KepalaBagian\KBDisposisiController;
use App\Http\Controllers\KepalaBagian\KBSuratMasukController;
use App\Http\Controllers\KepalaBagian\KBSuratKeluarController;


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',function(){
    return view('auth.login');
});


Route::middleware(['auth','role:1'])->group(function () {
    Route::resource('arsip', ArsipController::class);
    Route::get('/arsip/{id}/{file}', [ArsipController::class, 'downloadarsip'])->name('arsipdownload');

    Route::resource('suratmasuk',SuratMasukController::class);
    Route::get('/suratmasuk/download/{id}/{file}', [SuratMasukController::class, 'downloadsuratmasuk'])->name('suratmasukdownload');

    
    Route::resource('user', UserController::class);
    Route::resource('disposisi', DisposisiController::class);
    Route::get('/disposisi/add/{id}/{jenis}', [DisposisiController::class,'tambah'])->name('disposisi.tambah');
    Route::post('/disposisi/store/{id}/{jenis}', [DisposisiController::class,'store'])->name('disposisi.tambahdisposisi');
    Route::get('/disposisi/showsurat/{id}/{nama}', [DisposisiController::class,'showsurat'])->name('disposisi.showsurat');
   

    Route::resource('suratkeluar', SuratKeluarController::class);
    Route::get('/suratkeluar/download/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('suratkeluar.download');
    Route::get('/formtemplate', [SuratKeluarController::class, 'template'])->name('template');
    

    route::resource('templateSK', TemplateSKController::class);
    Route::get('/templateSk/show', [TemplateSKController::class, 'showDesk'])->name('templateSK.showDesk');
    // Route::post('/templateSk/{id}', [TemplateSKController::class, 'template'])->name('templateSK.template');
    // Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeTemplate'])->name('templateSK.storeSK');
    Route::post('/templateSk/storenew', [TemplateSKController::class, 'storeSKnew'])->name('templateSK.storeSKnew');
    Route::post('/templateSk', [TemplateSKController::class, 'storeSKForm'])->name('templateSK.storeSKForm');
    Route::get('/template/priview/{id}', [TemplateSKController::class, 'priview'])->name('templateSK.priview');
    Route::put('/template/priview/{id}', [TemplateSKController::class, 'Sign'])->name('templateSK.Sign');
    // Route::get('/suratkeluar/{id}', [TemplateSKController::class, 'signature'])->name('templateSK.signature');
});

Route::middleware(['auth','role:2'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::resource('kbsuratkeluar', KBSuratKeluarController::class);
    Route::resource('kbdisposisi',KBDisposisiController::class);
    Route::get('/kbdisposisi/add/{id}/{jenis}', [KBDisposisiController::class,'tambah'])->name('kbdisposisi.tambah');
    Route::get('/kbdisposisi/showsurat/{id}/{nama}', [KBDisposisiController::class,'showsurat'])->name('kbdisposisi.showsurat');
    Route::post('/kbdisposisi/store/{id}/{jenis}', [KBDisposisiController::class,'store'])->name('kbdisposisi.tambahdisposisi');
    
    Route::get('/kbsuratkeluar/download/{id}/{file}', [KBSuratKeluarController::class, 'downloadSurat'])->name('kbsuratkeluar.download');

    Route::resource('kbsuratmasuk',KBSuratMasukController::class);
    Route::get('/kbsuratmasuk/download/{id}/{file}', [KBSuratMasukController::class, 'downloadsuratmasuk'])->name('kbsuratmasukdownload');

});

// route::resource('suratkeluar', SuratKeluarController::class);
// Route::get('/suratkeluar/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('Suratkeluar.download');


// route::resource('templateSK', TemplateSKController::class);
// Route::get('/templateSk', [TemplateSKController::class, 'showDesk'])->name('templateSK.showDesk');
// // Route::post('/templateSk/{id}', [TemplateSKController::class, 'template'])->name('templateSK.template');
// // Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeTemplate'])->name('templateSK.storeSK');
// Route::post('/templateSk', [TemplateSKController::class, 'storeSKnew'])->name('templateSK.storeSKnew');
// Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeSKForm'])->name('templateSK.storeSKForm');
// Route::get('/template/priview/{id}', [TemplateSKController::class, 'priview'])->name('templateSK.priview');
// Route::put('/template/priview/{id}', [TemplateSKController::class, 'Sign'])->name('templateSK.Sign');
// // Route::get('/suratkeluar/{id}', [TemplateSKController::class, 'signature'])->name('templateSK.signature');







