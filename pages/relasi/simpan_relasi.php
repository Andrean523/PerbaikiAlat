<?php

include "../../lib/koneksi.php";


$gejalaarray = $_POST['cek'];
$gejala = implode("AND", $gejalaarray);
$kerusakan = $_POST['kode_kerusakan'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_rule VALUES  ('', '$gejala', '$kerusakan')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah.php'; </script>";
            }


?>