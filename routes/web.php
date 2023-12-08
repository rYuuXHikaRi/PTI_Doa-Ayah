<?php

use App\Http\Controllers\Karyawan\ProfileKaryawanController;
use App\Http\Controllers\Karyawan\StatusSuratController;
use App\Http\Controllers\ListRequestLetterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\Admin\TemplateSKController;
use App\Http\Controllers\Admin\DisposisiController;
use App\Http\Controllers\Admin\SuratMasukController;
use App\Http\Controllers\Admin\SuratKeluarController;
use App\Http\Controllers\KepalaBagian\KBDisposisiController;
use App\Http\Controllers\KepalaBagian\KBSuratMasukController;
use App\Http\Controllers\KepalaBagian\KBSuratKeluarController;
use App\Http\Controllers\KepalaBagian\KBTemplateSKController;


use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\SuratTukarJagaController;
use App\Models\ListRequestLetter;


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
    Route::put('/template/sign/{id}', [TemplateSKController::class, 'Sign'])->name('templateSK.Sign');
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


    route::resource('kbtemplateSK', TemplateSKController::class);
    Route::get('/kbtemplateSk/show', [TemplateSKController::class, 'showDesk'])->name('kbtemplateSK.showDesk');
    // Route::post('/templateSk/{id}', [TemplateSKController::class, 'template'])->name('templateSK.template');
    // Route::post('/templateSk/{id}', [TemplateSKController::class, 'storeTemplate'])->name('templateSK.storeSK');
    Route::post('/kbtemplateSk/storenew', [TemplateSKController::class, 'storeSKnew'])->name('kbtemplateSK.storeSKnew');
    Route::post('/kbtemplateSk', [TemplateSKController::class, 'storeSKForm'])->name('kbtemplateSK.storeSKForm');
    Route::get('/kbtemplate/priview/{id}', [TemplateSKController::class, 'priview'])->name('kbtemplateSK.priview');
    Route::put('/kbtemplate/sign/{id}', [TemplateSKController::class, 'Sign'])->name('kbtemplateSK.Sign');


   
    Route::get('/suratizin/priview/{id}', [SuratIzinController::class, 'priview'])->name('PermohonanIzin.priview');
    Route::put('/suratizin/sign/{id}', [SuratIzinController::class, 'Sign'])->name('PermohonanIzin.Sign');
    Route::get('/suratizin/{id}/{file}', [SuratIzinController::class, 'downloadSuratIzin'])->name('PermohonanIzin.download');

  
    Route::get('/suratcuti/priview/{id}', [SuratCutiController::class, 'priview'])->name('PermohonanCuti.priview');
    Route::put('/suratcuti/sign/{id}', [SuratCutiController::class, 'Sign'])->name('PermohonanCuti.Sign');
    Route::get('/suratcuti/{id}/{file}', [SuratCutiController::class, 'downloadSuratCuti'])->name('PermohonanCuti.download');

    
    Route::get('/surattukarjaga/priview/{id}', [SuratTukarJagaController::class, 'priview'])->name('PermohonanTukarJaga.priview');
    Route::put('/surattukarjaga/sign/{id}/{jenis}', [SuratTukarJagaController::class, 'Sign'])->name('PermohonanTukarJaga.Sign');
    Route::get('/surattukarjaga/{id}/{file}', [SuratTukarJagaController::class, 'downloadSuratTukarJaga'])->name('PermohonanTukarJaga.download');

    Route::resource('DaftarPermohonan', ListRequestLetterController::class);
    Route::get('/DaftarPermohonanCuti', [ListRequestLetterController::class, 'indexCuti'])->name('DaftarPermohonan.indexCuti');
    Route::get('/DaftarPermohonanTukarJaga', [ListRequestLetterController::class, 'indexTukarJaga'])->name('DaftarPermohonan.indexTukarJaga');
    Route::get('/DaftarPermohonanIzin', [ListRequestLetterController::class, 'indexIzin'])->name('DaftarPermohonan.indexIzin');

    

});


Route::middleware(['auth','role:3'])->group(function () { 
    Route::resource('suratizin', SuratIzinController::class);
    Route::resource('suratcuti', SuratCutiController::class);
    Route::resource('surattukarjaga', SuratTukarJagaController::class);
    Route::get('/statuscuti/{id}', [StatusSuratController::class, 'statuscuti'])->name('status.cuti');
    Route::get('/statusizin/{id}', [StatusSuratController::class, 'statusizin'])->name('status.izin');
    Route::get('/statustukarjaga/{id}', [StatusSuratController::class, 'statustukarjaga'])->name('status.tukarjaga');
    Route::get('/statuscuti/download/{id}/{file}', [StatusSuratController::class, 'downloadSuratCuti'])->name('statuscuti.download');
    Route::get('/statusizin/download/{id}/{file}', [StatusSuratController::class, 'downloadSuratIzin'])->name('statusizin.download');
    Route::get('/statustukarjaga/download/{id}/{file}', [StatusSuratController::class, 'downloadSuratTukarJaga'])->name('statustukarjaga.download');
    Route::delete('statuscuti/destroy/{id}',[StatusSuratController::class,'destroyCuti'])->name('statuscuti.destroy');
    Route::delete('statusizin/destroy/{id}',[StatusSuratController::class,'destroyIzin'])->name('statusizin.destroy');
    Route::delete('statustukarjaga/destroy/{id}',[StatusSuratController::class,'destroyTukarJaga'])->name('statustukarjaga.destroy');
    Route::post('/changepassword', [ProfileKaryawanController::class, 'changePassword'])->name('change.password');

    

    Route::get('/home',function(){
        return view('karyawan.index');
    });
    Route::get('/status',function(){
        return view('karyawan.lihatstatusmobile');
    });
    Route::get('/profile',function(){
        return view('karyawan.profilemobile');
    });

    Route::get('/tukarjaga',function(){
        return view('karyawan.statustukarjagamobile');
    });
    Route::get('/cuti',function(){
        return view('karyawan.statuscutimobile');
    });
    Route::get('/izin',function(){
        return view('karyawan.statusizinmobile');
    });
    Route::get('/permintaan',function(){
        return view('karyawan.permintaan');
    });
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
