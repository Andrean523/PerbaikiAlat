<?php 

    include "../../lib/koneksi.php";


    $id_kerusakan = $_POST['id_kerusakan'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $solusi = $_POST['solusi'];
 

    $sql = "UPDATE tbl_kerusakan SET kode_kerusakan = '$kode', nama_kerusakan = '$nama', solusi_kerusakan = '$solusi' WHERE id_kerusakan = '$id_kerusakan'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main.php';
        </script>";
    } else {
        header("location:form_edit.php?id_kerusakan=$id_kerusakan");
    }
