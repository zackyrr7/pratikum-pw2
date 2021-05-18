<?php
session_start();

$_SESSION['nama'] = 'Dian Prawira';
$_SESSION['alamat'] = 'Jl. purnama';
$_SESSION['nohp'] = '081345697771';

echo "Alamat saya adalah pada ". $_SESSION['alamat'];
?>