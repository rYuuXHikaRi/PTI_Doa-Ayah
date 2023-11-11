<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\TemplateSKController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::resource('arsip', ArsipController::class);
Route::resource('user', UserController::class);
Route::resource('dispost', DisposisiController::class);
Route::get('/arsip/{id}/{file}', [ArsipController::class, 'downloadarsip'])->name('arsipdownload');

Route::resource('suratmasuk',SuratMasukController::class);
Route::get('/suratmasuk/download/{id}/{file}', [SuratMasukController::class, 'downloadsuratmasuk'])->name('suratmasukdownload');

route::resource('suratkeluar', SuratKeluarController::class);
Route::get('/suratkeluar/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('Suratkeluar.download');


route::resource('templateSK', TemplateSKController::class);
Route::get('/templateSk', [TemplateSKController::class, 'showDesk'])->name('templateSK.showDesk');
// Route::post('/templateSk/{id}', [TemplateSKController::class, 'template'])->name('templateSK.template');
// Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeTemplate'])->name('templateSK.storeSK');
Route::post('/templateSk', [TemplateSKController::class, 'storeSKnew'])->name('templateSK.storeSKnew');
Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeSKForm'])->name('templateSK.storeSKForm');
Route::get('/template/priview/{id}', [TemplateSKController::class, 'priview'])->name('templateSK.priview');
// Route::get('/suratkeluar/{id}', [TemplateSKController::class, 'signature'])->name('templateSK.signature');





Route::get('/template', function () {
        return view('admin.TemplateSK.template');
    });

Route::get('/buatsurattemplate', function () {
    return view('buatsurattemplate');
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

Route::get('/daftarpermohonantukarjaga', function () {
    return view('daftarpermohonantukarjaga');
});
Auth::routes();
Route::get('/suratkeluar/download/{id}/{file}', [SuratKeluarController::class, 'downloadSurat'])->name('suratkeluar.download');
Route::get('/formtemplate', [SuratKeluarController::class, 'template'])->name('template');

Route::get('/suratkeluar/approved/{id}', [SuratKeluarController::class,'approve'])->name('suratkeluar.approved');
Route::get('/suratkeluar/rejected/{id}', [SuratKeluarController::class,'reject'])->name('suratkeluar.rejected');
Route::get('/suratkeluar/restored/{id}', [SuratKeluarController::class,'restore'])->name('suratkeluar.restored');

Route::post('/disposisi/add/{id}/{status}', [DisposisiController::class,'store'])->name('disposisi.tambahdisposisi');
// Route::put('/suratkeluar/rejected/{id}', [SuratKeluarController::class,'tolaksurat'])->name('suratkeluar.tolak');


// Route::get('/template', function () {
//     return view('admin.suratkeluar.template');
// });



// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
