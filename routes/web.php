<?php
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin\Buku;
use App\Http\Controllers\Admin\Penerbit;
use App\Http\Controllers\Admin\Pengadaan;
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




Route::get('/admin/penerbit', [Penerbit::class, 'index']);
Route::get('/admin/penerbit/add', [Penerbit::class, 'add']);
Route::post('/admin/penerbit/store', [Penerbit::class, 'store']);
Route::get('/admin/penerbit/edit/{id}', [Penerbit::class, 'edit']);
Route::post('/admin/penerbit/update', [Penerbit::class, 'update']);
Route::get('/admin/penerbit/delete/{id}', [Penerbit::class, 'delete']);

Route::get('/admin/buku', [Buku::class, 'index']);
Route::get('/buku/add', [Buku::class, 'add']);
Route::post('/admin/buku/store', [Buku::class, 'store']);
Route::get('/admin/buku/edit/{id}', [Buku::class, 'edit']);
Route::post('/admin/buku/update', [Buku::class, 'update']);
Route::get('/admin/buku/delete/{id}', [Buku::class, 'delete']);

Route::get('/admin/pengadaan', [Pengadaan::class, 'index']);
Route::get('/admin/pengadaan/updateStok/{id}', [Pengadaan::class, 'updateStok']);
Route::post('/admin/pengadaan/update', [Pengadaan::class, 'update']);

Route::get('/search', [Buku::class, 'search'])->name('buku.search');



