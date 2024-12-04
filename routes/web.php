<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\suratKeluarController;
use App\Http\Controllers\admin\suratMasukController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\dashBoardController::class, 'index'])->name('home')->middleware('auth');
Route::resource('category', categoryController::class)->middleware('auth');
Route::resource('masuk', suratMasukController::class)->middleware('auth');
Route::resource('keluar', suratKeluarController::class)->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\profileController::class, 'index'])->name('profile');
    Route::get('/create-profile', [\App\Http\Controllers\profileController::class, 'createProfile'])->name('createprofile');
    Route::post('/store-profile', [\App\Http\Controllers\profileController::class, 'storeProfile'])->name('storeprofile');
    Route::get('/edit-profile', [\App\Http\Controllers\profileController::class, 'editProfile'])->name(('editProfile'));
    Route::put('/update-profile/{id}', [\App\Http\Controllers\profileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/change-password', [\App\Http\Controllers\profileController::class, 'changePassword'])->name('profile.change-password');
    Route::put('/update-password', [\App\Http\Controllers\profileController::class, 'updatePassword'])->name('profile.update-password');
});
