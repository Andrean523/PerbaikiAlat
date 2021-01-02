<?php
include "lib/koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$nama = $_POST['nama'];
$perusahaan = $_POST['perusahaan'];
$tanggal = date('Y/m/d/');

session_start();
$_SESSION['nama'] = $nama; //nyimpen session nama
$_SESSION['perusahaan'] = $perusahaan; //nyimpen session nama
header('location:question.php');

$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_user(nama_user, perusahaan, tanggal) VALUES  ('$nama','$perusahaan','$tanggal')");
if ($querySimpan) {
    echo "<script> alert('Data Berhasil Masuk'); window.location='diagnosa.php';</script>";
} else {
    echo "<script> alert('Data  Gagal Dimasukkan'); window.location='diagnosa.php'; </script>";
}
