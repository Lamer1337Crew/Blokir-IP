<?php
    include "config.php";
    $target = $_POST['target'];
    if (empty($target)) {
        echo "Anda Belum Menulis Ip Yang Mau Anda Blockir!";
    }
    else{
        $cek_ip = "SELECT * FROM ip_blockir WHERE ip = '$target'";
        $succes = mysqli_query($koneksi, $cek_ip);
        $cek_succes = mysqli_num_rows($succes);
        if ($cek_succes == 0) {
            $block = "INSERT INTO ip_blockir (ip) VALUES('$target')";
            $res = mysqli_query($koneksi, $block);
            if ($res) {
                echo "IP Berhasil Di Blockir!";
            }
            else{
                include "home.php";
            }
        }
    }
 ?>
