<?php 

    include "../../lib/koneksi.php";


    $id_admin = $_POST['id_admin'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 

    $sql = "UPDATE tbl_admin SET nama_admin ='$nama', username ='$username' , password ='$password' WHERE id_admin='$id_admin'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main.php';
        </script>";
    } else {
        header("location:form_edit_admin.php?id_admin=$id_admin");
    }
