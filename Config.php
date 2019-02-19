<?php
$koneksi = mysqli_connect("localhost", "root", "", "testing");
if (mysqli_connect_errno()) {
    echo "koneksi Gagal! :" . mysqli_connect_errno();
}
 ?>
