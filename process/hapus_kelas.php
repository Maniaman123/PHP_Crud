<?php

// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari URL
$id_kelas = $_GET['id'];

// Hapus data dari database
mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id_kelas'");

// Mengalihkan halaman kembali ke kelas.php
header("location:../pages/kelas.php");
?>
