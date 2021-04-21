<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function tentang()
    {
        $nama_prodi = 'sistem informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('site.tentang',['nama_prodi' => $nama_prodi,
        'universitas'=>$universitas,
        'kajur'=>$kajur] );
    }

    public function kontak()
    {
        return view('site.kontak');
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
}
 ?>