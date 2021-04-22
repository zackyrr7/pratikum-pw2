<?php 

$host = 'localhost';
$user = 'root';
$passwd = 'oja12345';
$db = 'cybercampus';
$con = new mysqli($host,$user,$passwd,$db);

if ($con->connect_errno){
    printf('koneksi gagal : %s\n', $con->connect_error());
    exit();
}

?>