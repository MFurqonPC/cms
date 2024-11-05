<?php
include __DIR__.'/../db_connect.php';
$sql = "SELECT * FROM artikel ORDER BY id DESC";
$query = mysqli_query($connect, $sql);

?>