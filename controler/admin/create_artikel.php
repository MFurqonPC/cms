<?php
include __DIR__.'/../db_connect.php';
// menangkap data yang di kirim dari form
if(isset($_POST['submit'])){
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $folder = "img/artikel/$gambar";
    $tanggal = $_POST['tanggal'];
    $tags = $_POST['tags'];


    move_uploaded_file($tmp, $folder);

    // $tags = $_POST['tags'];
    // menginput data ke database
    mysqli_query($connect, "INSERT INTO artikel
    (penulis, judul, konten, gambar, tanggal, tags) VALUES('$penulis', '$judul', '$konten','$folder','$tanggal','$tags')
    ");
    // mengalihkan halaman kembali ke index.php
    header("location:admin.php?page=tabel-artikel");
}else{
    echo"gagal input";
}

?>