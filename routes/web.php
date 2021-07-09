<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\LoginMobileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home1');
});
Route::get('/Admin', function () {
    return view('admin/layout/master');
});
Route::get('/Admin/users', function () {
    return view('admin/users/index');
});

Route::get('/profile/{user}',[ProfileController::class,'index'])->name('profile');
Route::post('/profile/update/{user}',[ProfileController::class,'update'])->name('profileUpdate');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();
Route::get('/register/index',[UserController::class,'index'])->name('register.index');
Route::post('/register/sendMail',[UserController::class,'sendMail'])->name('register.sendMail');
Route::get('/register/{user}/otp',[UserController::class,'sendOtp'])->name('register.sendOtp');
Route::post('/register/verifyOtp/{user}',[UserController::class,'verify'])->name('register.verifyOtp');

Auth::routes();


Route::get('auth/google',[GoogleController::class,'redirect'])->name('auth.google');
Route::get('auth/google/callback',[GoogleController::class,'callback']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', function () {
    return view('auth/register');
})->name('register');


Route::get('login/mobile',[LoginMobileController::class,'index'])->name('login.mobile');
Route::post('login/mobile/sendSms',[LoginMobileController::class,'sendSms'])->name('login.sendSms');
Route::get('login/mobile/{user}/otp',[LoginMobileController::class,'sendOtp'])->name('login.sendOtp');
Route::post('login/mobile/verifyOtp/{user}',[LoginMobileController::class,'verify'])->name('login.verifyOtp');

Route::get('/Admin/users',[AdminUsersController::class,'index'])->name('AminUsers');

Route::prefix('admin')->group(function (){
    Route::resource('category',CategoryController::class);
});


