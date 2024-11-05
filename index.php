<?php
include 'layouts/header.php';
include 'layouts/navigasi.php';

if(!isset($_GET['page'])){
    include 'controler/home.php';
    include 'views/home.php';
    exit;
}
switch($_GET['page']){
    case 'home':
        include 'controler/home.php';
        include 'views/home.php';
        break;
    case 'artikel-show':
        include 'views/artikel_show.php';
        break;    
}

include 'layouts/footer.php';
?>