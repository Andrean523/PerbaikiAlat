<?php

include "../../lib/koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$solusi = $_POST['solusi'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kerusakan(kode_kerusakan, nama_kerusakan, solusi_kerusakan) VALUES  ('$kode','$nama', '$solusi')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah.php'; </script>";
            }


?>