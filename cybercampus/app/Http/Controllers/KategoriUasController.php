<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriUasController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategoriuas.index', compact('kategori'));
    }
    public function formTambah()
    {
        return view('kategoriuas.form_tambah');
    }

    public function tambah(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect()->route('kategori.uas.index');
    }
}
