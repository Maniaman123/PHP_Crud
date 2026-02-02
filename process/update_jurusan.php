<?php

// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form edit
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

// Update data ke database
mysqli_query($koneksi, "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'");

// Mengalihkan halaman kembali ke jurusan.php
header("location:../pages/jurusan.php");
?>
