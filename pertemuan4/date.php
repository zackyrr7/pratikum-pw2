<?php 
    // //date
    // //untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    //time
    //UNIX timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date ("l", time()+60*60*24*100);

    //mktime
    //membuat sendiri detik
    //mktime(0,0,0,0,0,0)
    //jam, menit, detik,bulan,tanggal,tahun
    // echo date ("l", mktime(0,0,0,23,11,2001));

    //strtotime
    echo date("l", strtotime ("25 aug 1985"));

?>