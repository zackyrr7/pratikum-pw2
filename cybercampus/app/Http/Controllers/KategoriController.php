<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function detail($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.detail', compact('kategori'));
    }

    public function formTambah()
    {
        return view('kategori.form_tambah');
    }

    public function tambah(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();
        return redirect()->route('admin.kategori.index');
    }

    public function formUbah($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.form_ubah', compact('kategori'));
    }

    public function ubah(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();
        return redirect()->route('admin.kategori.detail', ['id' => $kategori->id]);
    }

    public function hapus($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('admin.kategori.index');
    }
}