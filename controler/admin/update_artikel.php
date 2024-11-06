<?php
include __DIR__.'/../db_connect.php';
$id = $_POST['id'];
$judul = $_POST['penulis'];
$penulis = $_POST['judul'];
$konten = $_POST['konten'];
// input gambar barus
$newgambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// mencari gambar lama
$sql = 'SELECT * FROM artikel WHERE id = '.$id;
$query = mysqli_query($connect, $sql);
$result = mysqli_fetch_assoc($query);
$oldimage = $result['gambar'];
$newpath = $oldimage; //new path sama dengan gambar lama

// jika ada gambat=r baru
if($newgambar){
    // hapus gambar lama
    if(file_exists($oldimage)){
        unlink($oldimage);
    }
    // pathnya diganti dengan path baru
    $newpath = 'img/artikel/'.$newgambar;
    // unggah gambar baru
    move_uploaded_file($tmp, $newpath);
}
// query untuk update data ke dalam database
$sql = "UPDATE artikel SET penulis = '$penulis', judul = '$judul', konten = '$konten', gambar = '$newpath' WHERE id= $id";
$query = mysqli_query($connect, $sql);
if (!$query) {
    echo "gagal update";
}else{
    header("location:admin.php?page=tabel-artikel");
}

?>