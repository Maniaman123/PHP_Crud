<?php

// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari URL
$id_jurusan = $_GET['id'];

// Hapus data dari database
mysqli_query($koneksi, "DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'");

// Mengalihkan halaman kembali ke jurusan.php
header("location:../pages/jurusan.php");
?>
