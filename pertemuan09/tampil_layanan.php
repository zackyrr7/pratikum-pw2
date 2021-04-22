<?php 
require_once('koneksi.php');


$query = 'SELECT * FROM layanan';
if($res = $con->query($query)){
    echo "Terdapat ".$res->num_rows. " baris <br/>";
    while($row = $res->fetch_row()){
        echo $row[1]. '<br/>';
    }

}else{
    echo 'gagal mengambil data';
}
?>