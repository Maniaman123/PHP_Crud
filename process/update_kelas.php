<?php

// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form edit
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$wali_kelas = $_POST['wali_kelas'];
$jumlah_siswa = $_POST['jumlah_siswa'];

// Update data ke database
mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama_kelas', wali_kelas='$wali_kelas', jumlah_siswa='$jumlah_siswa' WHERE id_kelas='$id_kelas'");

// Mengalihkan halaman kembali ke kelas.php
header("location:../pages/kelas.php");
?>
