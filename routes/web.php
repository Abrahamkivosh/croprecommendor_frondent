<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecommendController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard',fn()=>view("recommend.dashboard")) ;
Route::middleware(['auth'])->group(function () {
    
    Route::get('system-users',[HomeController::class,'systemUsers'])->name('system.users');
    Route::post('system-users-register',[HomeController::class,'systemUsersRegister'])->name('register-user');
    Route::get('system-users-destroy',[HomeController::class,'destroy'])->name('destroy.users');

    Route::get('all-recommends',[RecommendController::class,'allRecommends'])->name('recommends.all');
    Route::resource('recommend', RecommendController::class);
});
