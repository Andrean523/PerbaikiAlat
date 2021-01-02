<?php 

    include "../../lib/koneksi.php";


    $id_gejala = $_POST['id_gejala'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
 

    $sql = "UPDATE tbl_gejala SET kode_gejala ='$kode', nama_gejala ='$nama' WHERE id_gejala='$id_gejala'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main.php';
        </script>";
    } else {
        header("location:form_edit.php?id_gejala=$id_gejala");
    }
    


?>