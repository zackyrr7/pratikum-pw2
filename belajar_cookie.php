<?php 

$mahasiswa = [
    'nama'=>'Dian Prawira',
    'nim'=>'H1234567',
];

setcookie('nim','H1234567',time() + (86400 * 30), '/');


if (isset($_COOKIE['nim'])) {
    echo $_COOKIE['nim'];
}else{
    echo "Cookiesnya tak ada";
}

?>