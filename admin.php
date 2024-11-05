<?php
include 'layouts/admin/header.php';
include 'layouts/admin/sidebar.php';
include 'layouts/admin/navbar.php';

if(!isset($_GET['page'])){
    include 'views/admin/dashboard.php';
    exit;
}


switch($_GET['page']){
    case 'tabel-artikel':
        include 'controler/admin/tabel_artikel.php';
        include 'views/admin/tabel_artikel.php';
        break;
    case 'tambah-artikel':
        include 'views/admin/tambah_artikel.php';
        break;
    case 'store-artikel':
        include 'controler/admin/create_artikel.php';
        break;
    case 'delete-artikel':
        include 'controler/admin/delete.php';
        break;
    case 'edit-artikel':
        include 'controler/admin/edit_artikel.php';
        include 'views/admin/edit_artikel.php';
        break;
    case 'update-artikel':
        include 'controler/admin/update_artikel.php';
        
}
include 'layouts/admin/footer.php';

?>