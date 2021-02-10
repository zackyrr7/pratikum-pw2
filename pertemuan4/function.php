<?php
function salam($waktu = "datang", $nama = "admin") {
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= salam("pagi", "hazacky"); ?></h1>
</body>
</html>