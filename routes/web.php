<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/arsip', function () {
//     return view('arsip');
// });

// Route::get('/tambaharsip', function () {
//     return view('admin.arsip.create');
// });

Route::resource('arsip', ArsipController::class);
Route::get('/arsip', [ArsipController::class, 'index'])->name('indexarsip');
// Route::get('/tambaharsip', [ArsipController::class, 'create'])->name('createarsip');
// Route::get('/arsip/{id}', [ArsipController::class, 'edit'])->name('editarsip');
Route::delete('/arsip/{id}', [ArsipController::class, 'delete'])->name('destroyarsip');
// route::post('/tambaharsip', [ArsipController::class,'store'])->name('storearsip');




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
