<?php
include __DIR__.'/../db_connect.php';
$id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM artikel WHERE id = $id");

if($delete){
    header('location:admin.php?page=tabel-artikel');
}
?>