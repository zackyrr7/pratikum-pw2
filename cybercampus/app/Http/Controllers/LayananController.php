<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function detail($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.detail',compact('layanan'));
    }

    public function tambah()
    {
        echo "Fungsi Tambah";
        $layanan = new Layanan();
        $layanan->nama_layanan = 'Antar jemput anak sekolah';
        $layanan->deskripsi_layanan = 'Mengantar dan menjemput anak sekolahan yang ada';
        $layanan->save();
    }

    public function ubah($id)
    {
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = 'penelitian dan pengembangan';
        $layanan->save();
        echo "sudah diubah";
    }

    public function hapus($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        echo 'Sudah terhapus';
    }
}
