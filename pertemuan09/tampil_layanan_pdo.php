<?php
require_once('koneksi_pdo.php');

$stm = $pdo->query('SELECT * FROM layanan');

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {
    echo $row[1]. '<br/>';
}

?>