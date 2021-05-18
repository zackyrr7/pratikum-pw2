@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">detail layanan</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   
                    <!-- Card Body -->
                    <div class="card-body">
                    Nama Layanan: {{ $layanan->nama_layanan }} <br/>
                    Deskripsi layanan: {{ $layanan->deskripsi_layanan }}<br/>
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>
@endsection