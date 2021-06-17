@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    <a href="{{route('kategori.uas.index')}}" class="btn btn-sm btn-success float-right">Kembali</a>
                    Tambah Kategori
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('kategori.uas.tambah')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">nama</label>
                            <textarea name="nama" id="" cols="30" rows="10" class="form-control" name="nama"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection