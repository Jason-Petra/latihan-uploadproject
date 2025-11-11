<?php
include 'koneksi.php';

$kode_mahasiswa = $_GET['kode_mahasiswa'];

mysqli_query($koneksi, "delete from form where kode_mahasiswa='$kode_mahasiswa'");

header("location:index.php");

?>