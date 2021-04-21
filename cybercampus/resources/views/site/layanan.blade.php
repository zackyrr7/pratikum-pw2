<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo semua</title> 
</head>
<body>

    <h1>Layanan</h1>
    <p>Layanan Program studi Sistem Informasi meliputi : </p>
    <ol>
       @foreach ($list_layanan as $ls)
       <li>{{ $ls }}</li>
       @endforeach
    </ol>

    

</body>
</html>