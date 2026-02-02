<?php

// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari URL
$id = $_GET['id'];

// Hapus data dari database
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

// Mengalihkan halaman kembali ke siswa.php
header("location:../pages/siswa.php");
?>