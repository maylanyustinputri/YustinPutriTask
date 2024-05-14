<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

  
    if( $query ){
        echo('data terhapus');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

echo "<a href='barang-tambah.php'>back</a>";
?>