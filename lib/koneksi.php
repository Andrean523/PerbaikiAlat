<?php 
// definisikan koneksi ke database
$server ="localhost";
$username ="root";
$password ="";
$database ="perbaikialat";

// konekasi dan memilih database di server
$baseUrl = 'http://localhost/PerbaikiAlat1/';
$koneksi = mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL". mysqli_connect_errno();
    exit();
}

?>