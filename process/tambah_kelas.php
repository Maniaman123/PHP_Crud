<?php

//koneksi database
include '../koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$wali_kelas = $_POST['wali_kelas'];
$jumlah_siswa = $_POST['jumlah_siswa'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO kelas VALUES('$id_kelas','$nama_kelas','$wali_kelas','$jumlah_siswa')");

//mengalihkan halaman kembali ke kelas.php
header("location:../pages/kelas.php");
?>
