<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {

    include "../../lib/koneksi.php";

    //kesalahan disini
    $id_admin = $_GET['id_admin'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_admin WHERE id_admin = '$id_admin'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location='main.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = 'main.php';
        </script>";
    }
}
