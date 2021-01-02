<?php

include "../../lib/koneksi.php";

$kode =$_POST['kode'];
$nama =$_POST['nama'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_gejala(kode_gejala, nama_gejala) VALUES  ('$kode', '$nama')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah.php'; </script>";
            }


?>