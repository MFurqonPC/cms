<?php
include __DIR__.'/../db_connect.php';
$id = $_POST['id'];
$judul = $_POST['penulis'];
$penulis = $_POST['judul'];
$konten = $_POST['konten'];

$query = mysqli_query($connect, $sql);
$result = mysqli_fetch_assoc($show);

//periksa gambar ada file gambar baru yang di upload//
if(isset($_FILES['gambar'])) {

    //hapus gambar lama jika ada//
    if (file_exists($result['gambar']));
    }
$gambar = $_FILES['gambar']['name'];
$tmpname = $_FILES['gambar']['tmp_name'];
$folder = $file . $gambar;


$sql = "UPDATE artikel SET penulis = '$penulis', judul = '$judul', konten = '$konten' WHERE id= $id";
$query = mysqli_query($connect, $sql);
if (!$query) {
    echo "gagal update";
}else{
    header("location:admin.php?page=tabel-artikel");
}

?>