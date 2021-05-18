<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataku;
use DB;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('site.beranda');
    }

    public function tentang()
    {
        $nama_prodi = 'sistem informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';
        $id_user = Auth::id();
        $current_user = Auth::user();

        return view('site.tentang',compact('nama_prodi','universitas','kajur','id_user','current_user') );
    }

    public function kontak()
    {
        return view('site.kontak');
    }

    public function percontohan()
    {
        $dataku = new Dataku();
        $dt = $dataku->semuaData();
        return view('site.percontohan', compact('dt'));
    }

    public function tampilLayananRaw()
    {
        $layanan = DB::select('select * from layanan');
        return view('site.tampil_layanan_raw',compact('layanan'));
    }

    public function layanan()
    {
        $list_layanan = [
            'Pendidikan dan pengajaran',
            'bakti pada masyarakat',
            'Penelitian',
            'pengembangan aplikasi',
            'analisis data'
        ];
        return view('site.layanan', compact('list_layanan'));
    }

    

    public function listDosen($tahun)
    {
        echo "Ini adalah halaman List dosen". $tahun;
    }

    public function cobaForm()
    {
        return view('site.coba_form');
    }
    public function prosesForm(Request $request)
    {
        
        $nama = $request->nama;
        //disini ada proses masukkan nama ke database

        //setelah diproses dilempar ke halaman lain
        return redirect()->route('kontak');
    }
}
 ?>