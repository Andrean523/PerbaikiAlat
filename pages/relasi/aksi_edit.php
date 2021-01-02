<?php

include "../../lib/koneksi.php";


$id_rule = $_POST['id_rule'];
$gejalaarray = $_POST['cek'];
$gejala = implode("AND", $gejalaarray);
$kerusakan = $_POST['kode_kerusakan'];

$sql = "UPDATE tbl_rule SET maka = '$kerusakan', jika = '$gejala' WHERE id_rule = '$id_rule'";
$result = mysqli_query($koneksi, $sql);


if ($result) {
    echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main.php';
        </script>";
} else {
    header("location:form_edit.php?id_rule=$id_rule");
}
