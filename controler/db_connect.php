<?php
// membuat variabel servername, username, password, dan dbname
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cms";


$connect = mysqli_connect($servername, $username, $password, $dbname);

if ($connect->connect_error){
    die("Koneksi gagal: " . $conn->connect_error);
}else{
    // echo"Koneksi sukses";
}

?>