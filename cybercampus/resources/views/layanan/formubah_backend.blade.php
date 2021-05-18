@extends('layouts.backend.main')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
           
            <!-- Card Body -->
            <div class="card-body">
<div class="mt-4">
    <form action= "{{ route('admin.ubah',['id'=>$layanan->id]) }}" method="post">
    @csrf
    <div class= "from-group">
        <label for="nama_layanan">Nama layanan</label>
        <input class="form-control" type="text" name="nama_layanan" value="{{ $layanan->nama_layanan }}">
    
    </div>
    <div class="form-group">
        <label for="deskripsi_layanan">Deskripsi Layanan</label>
        <textarea class="form-control" name="deskripsi_layanan" id="" cols="30" rows="10">
            {{$layanan->deskripsi_layanan}}
        </textarea>
    </div>
    <input class="btn btn-primary"type="submit" value="Simpan">
</form>

</div>
@endsection