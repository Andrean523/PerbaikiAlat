<?php
	include "../lib/koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!ctype_alnum($username) or !ctype_alnum($password)) {
    echo "Login Gagal,<a href=../> Kembali</a>";
    } else {
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");
    $login = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);

    if ($login == 1) {
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
        }
    }
    ?>