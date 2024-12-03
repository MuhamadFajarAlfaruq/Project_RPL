<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\MasyarakatController::class, 'index'])->name('masyarakat.index');

//Login
Route::get('/register',[RegisterController::class, 'RegisterFormMasyarakat'])->name('masyarakat.register.form');
Route::post('/register/store', [RegisterController::class, 'RegisterMasyarakat'])->name('masyarakat.register');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'FormLoginMasyarakat']);
Route::post('login/post', [App\Http\Controllers\Auth\LoginController::class, 'LoginMasyarakat'])->name('masyarakat.login');

Route::middleware('masyarakat')->group(function(){
    Route::get('/pengaduan', [App\Http\Controllers\MasyarakatController::class, 'formPengaduan'])->name('masyarakat.pengaduan.form');
});