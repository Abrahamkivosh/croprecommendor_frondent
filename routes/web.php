<?php

use App\Http\Controllers\RecommendController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard',fn()=>view("recommend.dashboard")) ;
Route::middleware(['auth'])->group(function () {
    Route::resource('recommend', RecommendController::class);
    Route::resource('users', UserController::class);
});
