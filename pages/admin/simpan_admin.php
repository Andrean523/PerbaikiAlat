<?php

include "../../lib/koneksi.php";

$nama =$_POST['nama'];
$username = $_POST['username'];
$password =$_POST['password'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_admin(nama_admin, username, password) VALUES  ('$nama','$username','$password')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah_bobot.php'; </script>";
            }
