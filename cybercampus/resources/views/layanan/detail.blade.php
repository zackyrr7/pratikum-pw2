@extends('layouts.frontend.main')

@section('content')
    <h1 class="mt-4"> detail layanan</h1>
    Nama Layanan: {{ $layanan->nama_layanan }} <br/>
    Deskripsi layanan: {{ $layanan->deskripsi_layanan }}<br/>
@endsection