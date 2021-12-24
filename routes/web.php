<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('detail/{id}', [App\Http\Controllers\DetailController::class, 'index']);
Route::post('detail/{id}', [App\Http\Controllers\DetailController::class, 'pesan']);
Route::get('check-out', [App\Http\Controllers\DetailController::class, 'check_out']);
Route::delete('check-out/{id}', [App\Http\Controllers\DetailController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\DetailController::class, 'konfirmasi']);
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);
Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail']);

Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('edukasi', [App\Http\Controllers\EdukasiController::class, 'index'])->name('edukasi');
Route::get('berita/{id}', [App\Http\Controllers\BeritaController::class, 'detail']);
Route::get('edukasi/{id}', [App\Http\Controllers\EdukasiController::class, 'detail']);
