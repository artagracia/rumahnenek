<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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


Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/', [App\Http\Controllers\frontend\FrontendController::class,'index']);     
Route::get('/home/tiket', [App\Http\Controllers\frontend\TiketController::class,'index']);
Route::get('/reservasi', [App\Http\Controllers\frontend\ReservasiController::class,'index']);
Route::get('/backend', [App\Http\Controllers\backend\HomeController::class,'index']);


Route::get('/backend/member', [App\Http\Controllers\backend\MemberController::class,'index']);
Route::get('/backend/member-add', [App\Http\Controllers\backend\MemberController::class,'add']);
Route::post('/backend/proses-member', [App\Http\Controllers\backend\MemberController::class,'proses']);
Route::get('/backend/member-edit/{id}', [App\Http\Controllers\backend\MemberController::class,'edit']);
Route::get('/backend/member-hapus/{id}', [App\Http\Controllers\backend\MemberController::class,'hapus']);

Route::get('/backend/kamar', [App\Http\Controllers\backend\KamarController::class,'index']);
Route::get('/backend/kamar-add', [App\Http\Controllers\backend\KamarController::class,'add']);
Route::post('/backend/proses-kamar', [App\Http\Controllers\backend\KamarController::class,'proses']);
Route::get('/backend/kamar-edit/{id}', [App\Http\Controllers\backend\KamarController::class,'edit']);
Route::get('/backend/kamar-hapus/{id}', [App\Http\Controllers\backend\KamarController::class,'hapus']);

Route::get('/backend/reservasi', [App\Http\Controllers\backend\ReservasiController::class,'index']);
Route::post('/proses-reservasi', [App\Http\Controllers\frontend\ReservasiController::class,'proses']);

