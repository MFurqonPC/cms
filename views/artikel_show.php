<section class="container">
        
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <img src="<?= $data['gambar']?>" alt="">
                <p class="col p-3 text-secondary"><?= $data['penulis']?>|<?= $data['tanggal']?></p>
                <h2><?= $data['judul']?></h2>
                  <p><?=$data['konten']?></p>
        <div class="row row-cols row-cols-3">
            <div class="col-2">
                <h5><Table>TAGS:</Table></h5>
            </div>
            <div class="col-6">
                <b><?=$data['tags']?></b>
            </div>
            <div class="col-4 ">
            <i class="bi bi-facebook ms-2"></i>
            <i class="bi bi-whatsapp ms-2"></i>
            <i class="bi bi-twitter ms-2"></i>
            <i class="bi bi-messenger ms-2"></i>
            </div>
        </div>
</section>
    <section class="container">
        <div class="row mt-4 container">
            <div class="col">
                <h3>COMMENTS</h3>
            <div class="row  shadow-sm p-3 m-2 bg-body-tertiary rounded">
                <div class="col">
                    <b>namacomenta 7 januari 2024</b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam cupiditate provident ipsum commodi error esse qui obcaecati deleniti natus. Dolorem harum repellat odit dolorum, dolor consectetur? Hic similique odio voluptatibus?</p>
                </div>
            </div>
            <div class="row  shadow-sm p-3 m-2 bg-body-tertiary rounded">
                <div class="col">
                    <b>namacomenta 7 januari 2024</b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam cupiditate provident ipsum commodi error esse qui obcaecati deleniti natus. Dolorem harum repellat odit dolorum, dolor consectetur? Hic similique odio voluptatibus?</p>
                </div>
            </div>
            <div class="row  shadow-sm p-3 m-2 bg-body-tertiary rounded">
                <div class="col">
                    <b>namacomenta 7 januari 2024</b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam cupiditate provident ipsum commodi error esse qui obcaecati deleniti natus. Dolorem harum repellat odit dolorum, dolor consectetur? Hic similique odio voluptatibus?</p>
                </div>
            </div>
            </div>
        </div>
    </section>
<section class="container">
    <div class="row">
    <h1>LEAVE A REPLY</h1>
    </div>
    <div class="row">
    <form action="#">
      <div class="col">
        <textarea id="w3review" name="w3review" rows="4" cols="100">Command</textarea>
      </div>
    </div>
      <div class="row">
    <form action="#">
      <div class="col">
        <textarea id="w3review" name="w3review" rows="1" cols="50">Command</textarea>
      </div>
      <div class="col">
        <textarea id="w3review" name="w3review" rows="1" cols="50">Command</textarea>
      </div>
    </div>
      <input type="submit" value="LEAVE A REPLY">
    </form>

    
</section>