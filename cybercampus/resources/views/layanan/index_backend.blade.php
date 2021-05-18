@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Index Backend</h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
                <div class="card-body">
                    Ini merupakan halaman latihan untuk praktikum pemrograman web 2. Lorem ipsum, dolor
                    sit amet consectetur adipisicing elit. Qui eaque quis eius nisi, voluptatem, vero
                    maxime iure harum quasi repellat fuga provident doloremque est minima at delectus
                    nesciunt sit libero.
                </div>
                
                <ul>
                    @foreach ($layanan as $lyn)
                        <li>
                        {{ $lyn->nama_layanan }}
                        <a href="{{route('admin.detail',['id'=>$lyn->id])}}">Detail</a>
                        <a href="{{route('admin.formubah',['id'=>$lyn->id])}}">Ubah</a>
                        <a href="{{route('admin.hapus',['id'=>$lyn->id])}}">Hapus</a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{route('admin.formtambah')}}" class="btn btn-primary">Tambah Layanan</a>
                
            </div>
        </div>
    </div>
</div>
@endsection