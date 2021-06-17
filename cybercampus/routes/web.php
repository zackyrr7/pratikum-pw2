<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\SiteBackendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Layanan;
use App\Http\Controllers\KategoriUasController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BukuController;
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

Route::get('/tentang',[SiteController::class,'tentang'])->middleware(['auth', 'permission:menambahkan-berita']);

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

//backend
Route::get('/admin/dashboard', [SiteBackendController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/layanan', [LayananController::class, 'indexBackend'])->name('admin.layanan')->middleware('auth');
Route::get('/admin/detailBackend/{id}',[LayananController::class,'detailBackend'])->name('admin.detail')->middleware('auth');
Route::get('/admin/layanan/formubahbackend/{id}',[LayananController::class,'formUbahBackend'])->name('admin.formubah')->middleware('auth');
Route::post('/admin/layanan/ubah/{id}',[LayananController::class,'ubahBackend'])->name('admin.ubah')->middleware('auth');
Route::get('/admin/layanan/hapus/{id}',[LayananController::class,'hapusBackend'])->name('admin.hapus')->middleware('auth');
Route::get('/admin/layanan/formtambah',[LayananController::class,'formTambahBackend'])->name('admin.formtambah')->middleware('auth');
Route::post('/admin/layanan/tambah',[LayananController::class,'tambahbackend'])->name('admin.tambah')->middleware('auth');

//kategori
Route::get('/admin/kategori/index', [KategoriController::class, 'index'])->name('admin.kategori.index')->middleware('auth');
Route::get('/admin/kategori/formtambah', [KategoriController::class, 'formTambah'])->name('admin.kategori.formTambah')->middleware('auth');
Route::get('/admin/kategori/formubah/{id}', [KategoriController::class, 'formUbah'])->name('admin.kategori.formUbah')->middleware('auth');
Route::post('/admin/kategori/tambah', [KategoriController::class, 'tambah'])->name('admin.kategori.tambah')->middleware('auth');
Route::post('/admin/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('admin.kategori.ubah')->middleware('auth');
Route::get('/admin/kategori/detail/{id}', [KategoriController::class, 'detail'])->name('admin.kategori.detail')->middleware('auth');
Route::get('/admin/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('admin.kategori.hapus')->middleware('auth');


//berita
Route::get('/admin/berita/index', [BeritaController::class, 'index'])->name('admin.berita.index')->middleware(['auth', 'permission:index-berita']);
Route::get('/admin/berita/detail/{id}', [BeritaController::class, 'detail'])->name('admin.berita.detail')->middleware(['auth', 'permission:detail-berita']);
Route::get('/admin/berita/formtambah', [BeritaController::class, 'formTambah'])->name('admin.berita.formtambah')->middleware(['auth', 'permission:menambahkan-berita']);
Route::post('/admin/berita/tambah/', [BeritaController::class, 'tambah'])->name('admin.berita.tambah')->middleware(['auth', 'permission:menambahkan-berita']);
Route::get('/admin/berita/formubah/{id}', [BeritaController::class, 'formUbah'])->name('admin.berita.formubah')->middleware(['auth', 'permission:edit-berita']);
Route::post('/admin/berita/ubah/{id}', [BeritaController::class, 'ubah'])->name('admin.berita.ubah')->middleware(['auth', 'permission:edit-berita']);
Route::get('/admin/berita/hapus/{id}', [BeritaController::class, 'hapus'])->name('admin.berita.hapus')->middleware(['auth', 'permission:hapus-berita']);


//Gallery
Route::get('/gallery/upload', [GalleryController::class, 'formUpload'])->name('gallery.upload');
Route::post('/gallery/proses-upload', [GalleryController::class, 'prosesUpload'])->name('gallery.prosesUpload');
Route::get('/gallery/view-gallery/{id}', [GalleryController::class, 'viewGallery'])->name('gallery.viewGallery');


//kategoriuas
Route::get('/kategoriuas/index', [KategoriUasController::class, 'index'])->name('kategori.uas.index');
Route::get('/kategoriuas/formtambah', [KategoriUasController::class, 'formTambah'])->name('kategori.uas.formTambah');
Route::post('/kategoriuas/tambah', [KategoriUasController::class, 'tambah'])->name('kategori.uas.tambah');
?>