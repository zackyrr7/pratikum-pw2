@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    Daftar Kategori
                    <a href="{{route('kategori.uas.formTambah')}}" class="btn btn-sm btn-primary float-right">Tambah Kategori</a>
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $kat)
                            <tr>
                                <td>{{$kat->id}}</td>
                                <td>{{$kat->nama_kategori}}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection