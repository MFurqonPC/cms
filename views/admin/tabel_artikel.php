
<div class="container-fluid">
    <h1 class="text-center">
        Artikel
    </h1>
    <a class="btn btn-primary mb-2" href="http://localhost/cms/admin.php?page=tambah-artikel" role="button">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Penulis</th>
      <th scope="col">Judul</th>
      <th scope="col">Konten</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;
    while($data = mysqli_fetch_assoc($query)){
    ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $data['penulis'] ?></td>
      <td><?= $data['judul'] ?></td>
      <td><?= $data['konten'] ?></td>
      
      <td><a href="?page=delete-artikel&id=<?=$data['id']?>" class="btn btn-danger "onclick="return confirm('Apakah anda ingin menghapus data ini')">Hapus</a>|<a href="?page=edit-artikel&id=<?=$data['id']?>" class="btn btn-primary">Edit</a></td>
    </tr>
    <?php
    $no++;
      } ?>
  </tbody>
</table>
</div>