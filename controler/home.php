<?php
include 'db_connect.php';

$sql ='SELECT * FROM artikel ORDER BY id DESC LIMIT 4';
$query = mysqli_query($connect,$sql);
?>