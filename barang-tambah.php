<h3>Daftar Siswa Baru</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="128">ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><input type="text" name="agama"></td>
        </tr>
        <tr>
            <td>Sekolah Asal</td>
            <td><input type="text" name="sekolah_asal"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="daftar" value="Daftar"></td>
        </tr>
    </table>
</form>

<?php
include ("koneksi.php");

if(isset($_POST['daftar'])){
    mysqli_query($koneksi,"insert into calon_siswa set
    id = '$_POST[id]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    agama = '$_POST[agama]',
    sekolah_asal = '$_POST[sekolah_asal]'");

    echo "Siswa Telah Terdaftar";
}

?>


<h3>Data Siswa Baru</h3>

<table border="1">
    <tr>
        <td>no</td>
        <td>id</td>
        <td>nama</td>
        <td>alamat</td>
        <td>jenis kelamin</td>
        <td>agama</td>
        <td>sekolah asal</td>
        <td>Aksi</td>
    </tr>

    <?php
    include ("koneksi.php");

    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from calon_siswa");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$tampil['id']."</td>";
        echo "<td>".$tampil['nama']."</td>";
        echo "<td>".$tampil['alamat']."</td>";
        echo "<td>".$tampil['jenis_kelamin']."</td>";
        echo "<td>".$tampil['agama']."</td>";
        echo "<td>".$tampil['sekolah_asal']."</td>";
        echo "<td>";
        echo "<a href='proses-edit.php?id=".$tampil['id']."'>Ubah</a>";
        echo "<a href='hapus.php?id=".$tampil['id']."'>Hapus</a>"; 
        echo "</tr>";
        $no++;
    }
    ?>
</table>