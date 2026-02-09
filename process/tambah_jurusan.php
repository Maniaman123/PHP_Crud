<?php

//koneksi database
include '../koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO jurusan VALUES('$id_jurusan','$nama_jurusan')");

//mengalihkan halaman kembali ke jurusan.php
header("location:../pages/jurusan.php");
?>
