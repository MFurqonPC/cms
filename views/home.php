<!-- hero -->
<section class="header text-bg-primary p-5">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col p-5">
            <h1>Hallo, saya M Furqon</h1>
            <p class="lead">Saya adalah seorang profesional <strong>Network Administrator Junior</strong> dan sedang berkuliah di jurusan <strong> Teknik Informatika</strong> Klik tombol dibawah untuk mengetahui saya lebih lanjut</p>
            <a href="aboutme.html" class="btn btn-outline-light">About Us</a>
        </div>
        <div class="col">
            <img src="user.png" class="img-fluid" alt="">

        </div>
     </section>
    <!-- content -->
<section class="container text-center" >
    <div class="row p-5">
       <div class="col">
           <h1 class="display-4">My Skill</h1>
           <p>Dibawah ini adalah skill atau kemampuan yang saya miliki dari sekolah,pelatihan,dan kursus</p>
       </div>
    </div>
</section>
<section class="container ">
    <div class="row row-cols-1 row-cols-md-2">
        <?php
        while($data = mysqli_fetch_assoc($query)){
            ?>
      
        <div class="col-6 my-3">
            <img src="<?=$data['gambar']?>" alt="" class="img-fluid">
            <h3 class="my-3"><?=$data['judul']?></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, illum.</p>
            <b><i class="bi bi-person">Suparman, SPd.</i></b>
            <p><i class="bi bi-calendar-date">18 September 2022</i></p>
            <a href="#">klik untuk selengkapnya</a>
        </div>
        <?php } ?>
    </div>
</section>