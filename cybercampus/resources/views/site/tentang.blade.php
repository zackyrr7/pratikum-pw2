<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>
<body>
    
    <h1>Nama Ketua Jurusan <?= $kajur ?></h1>
    <?php echo $nama_prodi ?>
    <p>Waktu saat ini : {{ time() }} </p>
    @if (5 < 10) <h2> kondisi benar </h2>
        @endif
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus tempore temporibus repellendus fuga soluta mollitia facere consequatur blanditiis! Tempore iure numquam porro voluptatum eligendi, nisi amet vitae distinctio exercitationem!</p>
        <p>Nama universitas : <b> {{ $universitas }}</b></p>
</body>
</html>