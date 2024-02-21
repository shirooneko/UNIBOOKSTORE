<?php
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin\Buku;
use App\Http\Controllers\Admin\Penerbit;
use App\Http\Controllers\Pengadaan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [Home::class, 'index']);



Route::get('/admin/buku', [Buku::class, 'index']);

Route::get('/admin/penerbit', [Penerbit::class, 'index']);
Route::get('/admin/penerbit/add', [Penerbit::class, 'add']);
Route::post('/admin/penerbit/store', [Penerbit::class, 'store']);
Route::get('/admin/penerbit/edit/{id}', [Penerbit::class, 'edit']);
Route::post('/admin/penerbit/update', [Penerbit::class, 'update']);



Route::get('/buku/add', [Buku::class, 'add']);
Route::get('/penerbit/add', [Penerbit::class, 'add']);

