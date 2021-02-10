<?php 
$mahasiswa = [
    ["Hazacky Ramadhan", "H1101191024", "Sistem Informasi", "Hazacky.ramadhan@student.untan.ac.id"],
    ["Doddy ferdiansyah", "H1101191025", "Sistem Informasi", "dody@student.untan.ac.id"],
    [ "H1101191026", "zack", "Sistem Informasi", "dody@student.untan.ac.id"]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>

<ul>
        <li>Nama: <?=$mhs[0]; ?></li>
        <li>NIM: <?=$mhs[1]; ?></li>
        <li>Jurusan: <?=$mhs[2]; ?></li>
        <li>Email: <?=$mhs[3]; ?></li>
        
   
</ul>
<?php endforeach; ?>
    
</body>
</html>