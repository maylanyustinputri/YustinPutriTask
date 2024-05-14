<?php
$koneksi = mysqli_connect("localhost", "root", "", "pendaftaran_siswa");

if (!$koneksi) {
    die("gagal:".mysqli_connect_error());
}
?>