<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Utama;
use App\Http\Controllers\Login;
use App\Http\Controllers\Order;
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

Route::get('/', 'App\Http\Controllers\Utama@index');

Route::post('/pushData', 'App\Http\Controllers\Utama@store');
Route::get('/Login', 'App\Http\Controllers\Login@index');
Route::post('/Daftar', 'App\Http\Controllers\Login@Register');
Route::post('/Masuk', 'App\Http\Controllers\Login@Masuk');
Route::get('/Keluar', 'App\Http\Controllers\Login@Keluar');
Route::post('/AddCart', 'App\Http\Controllers\Order@Order');
Route::get('/Keranjang', 'App\Http\Controllers\Order@Keranjang');
Route::get('/Checkout', 'App\Http\Controllers\Order@CheckOut');
Route::get('/Checkout_List', 'App\Http\Controllers\Order@Checkout_List');
Route::get('/Confirm', 'App\Http\Controllers\Order@Confirm');
Route::post('/Konfirm', 'App\Http\Controllers\Order@Confirm_Simpan');

