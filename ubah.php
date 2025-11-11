<?php
include 'koneksi.php';

$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update form set nama_mahasiswa='$nama_mahasiswa', nim='$nim', jurusan='$jurusan', alamat='$alamat' where kode_mahasiswa='$kode_mahasiswa'");

header("location:index.php");

?>