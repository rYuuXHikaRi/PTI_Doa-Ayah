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
Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeTemplate'])->name('templateSK.storeSK');



Route::get('/template', function () {
        return view('admin.TemplateSK.template');
    });

Route::get('/buatsurattemplate', function () {
    return view('buatsurattemplate');
});

// Route::get('/arsip', function () {
//     return view('arsip');
// });

Route::get('/dashboardkabag', function () {
    return view('dashboardkabag');
});

// Route::get('/daftarpermohonan', function () {
//     return view('daftarpermohonankabag');
// });

// Route::get('/templatesurat', function () {
//     return view('templatesurat');
// });

Route::get('/kelolasurat', function () {
    return view('kelolasurat');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/isi', function () {
    return view('isifromsuratmobile');
});

Route::get('/mobile', function () {
    return view('homemobile');
});

Route::get('/lihat', function () {
    return view('lihatstatusmobile');
});

Route::get('/daftar', function () {
    return view('daftarpermohonanmobile');
});

Route::get('/profile', function () {
    return view('profilemobile');
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
