
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <h1>Tambah Artikel</h1>
<form action="?page=update-artikel" method="POST" enctype="multipart/form-data>
<input type="hidden" name="id" value="<?= $data['id']?>">
        </div>
            <div class="mb-3">
            <label for="penulis" class="form-label">penulis</label>
    <input type="teks" class="form-control" id="form-control" id="penulis" name="penulis" value="<?= $data['penulis']?>">
  </div>
  <div class="mb-3">
    <label for="judul" class="form-label">judul</label>
    <input type="teks" class="form-control" id="judul" name="judul" value="<?= $data['judul']?>">
  </div>
  <div class="mb-3 " ows="4" cols="100">
            <label for="konten" class="form-label" >konten</label>
    <input type="teks" class="form-control" id="form-control" id="konten" name="konten" value="<?= $data['konten']?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Tambahkkan Gambar untuk artikelmu</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
  <div class="col">
    <img src="<?= $data['gambar']?>" alt="form-control">
  </div>
  <div class="mb-3">
            <label for="tags" class="form-label">tanggal</label>
    <input type="date" class="form-control" id="form-control" id="tags" name="tanggal" value="<?= $data['tanggal']?>">
  </div>
  <div class="mb-3">
            <label for="tags" class="form-label">tags</label>
    <input type="teks" class="form-control" id="form-control" id="tags" name="tags" value="<?=$data['tags']?>">
  </div>
  <div>
  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
  </form>
    </div>

</body>
</html>