<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\pegawai;

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

Route::get('/', [Home::class, 'index']);
Route::get('/pegawai', [pegawai::class, 'index']);
Route::post('/simpanData', [pegawai::class, 'simpanData']);
Route::get('/lihatData', [pegawai::class,'lihatData']);
Route::get('/editData/{ID}', [pegawai::class,'editData']);
Route::post('/pegawai/update/{ID}', [pegawai::class,'updateData'])->name('pegawai.update');
Route::get('/hapusData/{ID}', [pegawai::class, 'hapusData']);