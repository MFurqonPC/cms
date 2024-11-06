
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <h1>Tambah Artikel</h1>
<form action="?page=store-artikel" method="POST" enctype="multipart/form-data">
        </div>
            <div class="mb-3">
            <label for="penulis" class="form-label">penulis</label>
    <input type="teks" class="form-control" id="form-control" id="penulis" name="penulis">
  </div>
  <div class="mb-3">
    <label for="judul" class="form-label">judul</label>
    <input type="teks" class="form-control" id="judul" name="judul">
  </div>
  <div class="mb-3 " ows="4" cols="100">
            <label for="konten" rows="10" class="form-label" >konten</label>
            <textarea name="konten" id="summernote"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Tambahkkan Gambar untuk artikelmu</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
  <div class="mb-3">
            <label for="tags" class="form-label">tanggal</label>
    <input type="date" class="form-control" id="form-control" id="tags" name="tanggal">
  </div>

  <div class="mb-3">
            <label for="tags" class="form-label">tags</label>
    <input type="teks" class="form-control" id="form-control" id="tags" name="tags">
  </div>
  <div>
  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
  </form>
    </div>

</body>
</html>