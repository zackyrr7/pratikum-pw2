@extends('layouts.frontend.main')

@section('content')

    

    
    <h1 class = "mt-4">Nama Ketua Jurusan <?= $kajur ?></h1>
    <h2>ID User adalah {{ $id_user }}</h2>
    <p>Email user saat ini adalah {{ $current_user->email }}</p>

    @include('layouts.frontend.partial.navigasi')
    <?php echo $nama_prodi ?>
    <p>Waktu saat ini : {{ time() }} </p>
    @if (5 < 10) <h2> kondisi benar </h2>
        @endif
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus tempore temporibus repellendus fuga soluta mollitia facere consequatur blanditiis! Tempore iure numquam porro voluptatum eligendi, nisi amet vitae distinctio exercitationem!</p>
        <p>Nama universitas : <b> {{ $universitas }}</b></p>
@endsection