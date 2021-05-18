<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Facades\Auth;

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

    public function formTambah()
    {
        return view('layanan.form_tambah');
    }

    public function tambah(Request $request)
    {
        
        $layanan = new Layanan();
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('layanan.index');
    }

    public function formUbah($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.formubah',compact('layanan'));
    }

    public function ubah(Request $request,$id)
    {
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan= $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('layanan.detail',['id'=>$layanan->id]);
    }

    public function hapus($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        return redirect()->route('layanan.index');
    }

    public function indexBackend()
    {
        $layanan = Layanan::all();
        return view('layanan.index_backend', compact('layanan'));
    }

    public function detailBackend($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.detail_backend',compact('layanan'));
    }
    public function formUbahBAckend($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.formubah_backend',compact('layanan'));
    }
    public function ubahBackend(Request $request,$id)
    {
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan= $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('admin.detail',['id'=>$layanan->id]);
    }
    public function hapusBackend($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        return redirect()->route('admin.layanan');
    }
    public function formTambahBackend()
    {
        return view('layanan.form_tambah_backend');
    }

    public function tambahBackend(Request $request)
    {
        
        $layanan = new Layanan();
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('admin.layanan');
    }
}

