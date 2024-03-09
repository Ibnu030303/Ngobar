<?php 

    $db = mysqli_connect('localhost', 'root', '', 'ngobar');

    if (!$db) {
        die("Gagal Terhubung Ke Database");
    } else {
        echo "Koneksi Berhasil";
    }

?>