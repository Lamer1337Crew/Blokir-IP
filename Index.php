<?php
   
    include "config.php";
    $ip_users = $_SERVER['REMOTE_ADDR'];
    $blockir = "SELECT * FROM ip_blockir WHERE ip = '$ip_users'";
    $res = mysqli_query($koneksi, $blockir);
    $cek_res = mysqli_num_rows($res);
    if ($cek_res <> 0) {
        echo "Ip <b>$ip_users</b> Telah Di blockir Mass Broo!!";
    }
    else{
        echo "Ip <b>127.0.0.1</b> Berhasil Di blockir!";
    }
 ?>
