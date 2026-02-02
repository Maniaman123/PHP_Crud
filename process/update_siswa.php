<?php

// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id = $_POST['id'];
$siswa = $_POST['siswa'];
$jk = $_POST['jk'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$id_kelas = $_POST['id_kelas'];
$id_jurusan = $_POST['id_jurusan'];
$keterangan = $_POST['keterangan'];

// Update data ke database
mysqli_query($koneksi, "UPDATE siswa SET nama='$siswa', jk='$jk', tgl_lahir='$tanggal_lahir', id_kelas='$id_kelas', id_jurusan='$id_jurusan', keterangan='$keterangan' WHERE id='$id'");

// Mengalihkan halaman kembali ke siswa.php
header("location:../pages/siswa.php");
?>