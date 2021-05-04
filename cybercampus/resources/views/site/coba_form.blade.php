@extends('layouts.frontend.main')

@section('content')
<div class="mt-4">
<form action="prosesform" method="POST">
    @csrf
    <div class="from-group">
        <label for="NIM">NIM</label><br>
        <input class="form-control" type="text" name="nim"><br>
    </div>

    <div class="from-group">
        <label for="NIM">Nama</label><br>
        <input class="form-control" type="text" name="nama"><br>
    </div>
    
    
    <input class="btn btn-primary" type="submit" value="Kirim">
    </form>
</div>
@endsection
    
