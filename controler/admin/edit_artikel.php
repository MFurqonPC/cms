<?php
include __DIR__.'/../db_connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM artikel WHERE id = $id";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);
?>