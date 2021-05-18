<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\LayananController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[SiteController::class,'beranda'])->name('beranda');

Route::get('/tentang',[SiteController::class,'tentang'])->middleware('auth');

Route::get('/percontohan', [SiteController::class, 'percontohan']);

Route::get('/site/kontak',[SiteController::class,'kontak'])->name('kontak');

Route::get('/layanan',[SiteController::class,'layanan']);

Route::get('/list-dosen/{tahun}',[SiteController::class,'listDosen']);

Route::get('/layanan-raw',[SiteController::class,'tampilLayananRaw']);

Route::get('/layanan/index',[LayananController::class,'index'])->name('layanan.index');

Route::get('/layanan/detail/{id}',[LayananController::class,'detail'])->name('layanan.detail');

Route::get('/layanan/formtambah',[LayananController::class,'formTambah'])->name('layanan.formtambah');

Route::post('/layanan/tambah',[LayananController::class,'tambah'])->name('layanan.tambah');

Route::get('/layanan/formubah/{id}',[LayananController::class,'formUbah'])->name('layanan.formubah');

Route::post('/layanan/ubah/{id}',[LayananController::class,'ubah'])->name('layanan.ubah');

Route::get('/layanan/hapus/{id}',[LayananController::class,'hapus'])->name('layanan.hapus');

Route::get('/cobaform',[SiteController::class,'cobaForm'])->name('cobaform');

Route::post('/prosesform',[SiteController::class,'prosesForm'])->name('prosesform');


Route::get('/admin/dashboard', [SiteBackendController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/layanan', [LayananController::class, 'indexBackend'])->name('admin.layanan')->middleware('auth');
Route::get('/admin/detailBackend/{id}',[LayananController::class,'detailBackend'])->name('admin.detail');
Route::get('/admin/layanan/formubahbackend/{id}',[LayananController::class,'formUbahBackend'])->name('admin.formubah');
Route::post('/admin/layanan/ubah/{id}',[LayananController::class,'ubahBackend'])->name('admin.ubah');
Route::get('/admin/layanan/hapus/{id}',[LayananController::class,'hapusBackend'])->name('admin.hapus');
Route::get('/admin/layanan/formtambah',[LayananController::class,'formTambahBackend'])->name('admin.formtambah');
Route::post('/admin/layanan/tambah',[LayananController::class,'tambahbackend'])->name('admin.tambah');