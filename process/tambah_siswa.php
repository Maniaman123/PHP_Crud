<?php

//koneksi database
include '../koneksi.php';

//menangkap sebuah data yang dikirim dari form
$siswa = $_POST['siswa'];
$jk = $_POST['jk'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$id_kelas = $_POST['id_kelas'];
$id_jurusan = $_POST['id_jurusan'];
$keterangan = $_POST['keterangan'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO siswa (nama, jk, tgl_lahir, id_kelas, id_jurusan, keterangan) VALUES('$siswa','$jk','$tanggal_lahir','$id_kelas','$id_jurusan','$keterangan')");
//mengalihkan halaman kembali ke siswa.php
header("location:../pages/siswa.php");
?>
