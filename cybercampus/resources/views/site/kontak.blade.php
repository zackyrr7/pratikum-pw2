@extends('layouts.frontend.main')

@section('content')
    

    <h1 class = "mt-4">Kontak kami</h1>
<form>
  <div class="form-group">
  <label for="nama">Nama :</label>
  <input class = "form-control" type="text" id="nama" name="nama">
  </div>
<div class="form-group">
  <label for="email">Email:</label>
  <input class = "form-control" type="text" id="email" name="email">
</div>

<div class="form-group">
  <label for="Tanggapan">Tanggapan:</label> 
  <textarea  class = "form-control" input width = 300px type="text"  id="Tanggapan" name="Tanggapan"> </textarea>
  
</div>
  
<input class = "btn btn-primary"type = "button" name = "kirim" value = "kirim">
  
</form>
@endsection
