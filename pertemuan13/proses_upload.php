<?php

$nama_file = $_FILES['gambar']['name'];
$nama_sementara = $_FILES['gambar']['tmp_name'];
$tipe_file = $_FILES['gambar']['type'];
$folder_tujuan = 'gambar/';
echo $tipe_file. '<br>';
$nama = date('Ymd').basename($nama_file);
echo 'isi basename '.$nama;

move_uploaded_file($nama_sementara,$folder_tujuan.$nama)


?>