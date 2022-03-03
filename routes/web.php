<?php

use App\Http\Controllers\UtamaController;
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

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Route::get('/', [UtamaController:: class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [UtamaController::class, 'cat1']);
    Route::get('/marbel-and-friends-kids-games', [UtamaController::class, 'cat2']);
    Route::get('/riri-story-books', [UtamaController::class, 'cat3']);
    Route::get('/kolak-kids-songs', [UtamaController::class, 'cat4']);
});

Route::get('/news', [UtamaController::class, 'news']);

Route::prefix('program')->group(function(){
    Route::get('/karir', [UtamaController::class, 'program1']);
    Route::get('/magang', [UtamaController::class, 'program2']);
    Route::get('/kunjungan-industri', [UtamaController::class, 'program3']);
});

Route::get('/about-us', [UtamaController:: class, 'aboutUs']);

Route::get('/contact-us', [UtamaController::class, 'contactUs']);