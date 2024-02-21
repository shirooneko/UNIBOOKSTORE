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

Route::resource('penerbit', Penerbit::class)->only([
    'index', 'store', 'edit', 'update', 'delete'
]);

Route::get('/admin/buku', [Buku::class, 'index']);
Route::get('/buku/add', [Buku::class, 'add']);
Route::get('/admin/penerbit', [Penerbit::class, 'index']);
Route::get('/penerbit/add', [Penerbit::class, 'add']);

