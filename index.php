<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasi Kuning Banjar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="style.css">
    <style>
   

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#fakta">Fakta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="resep.php">Resep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="rekomendasi.php">Rekomendasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="darken-background">
    <h1 style="text-align: center; color: white;">Nasi Kuning Banjar</h1>
    <h3 style="text-align: center; color: white;">Nikmatnya Tradisi di Setiap Sajian</h3>
    <button id="learnMoreButton" class="learn-more">
        <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
        </span>
        <span class="button-text">Mulai Baca  </span>
    </button>
</div>

<!-- js untuk klik baca -->
<script>
    document.getElementById('learnMoreButton').addEventListener('click', function() {
        document.getElementById('penjelasan').scrollIntoView({ behavior: 'smooth' });
    });
</script>

<section id="penjelasan" style="padding-top: 100px;">
<div class="container">
<h1 style="margin-bottom: 40px;">Apa itu Nasi Kuning Banjar?</h1>
              
    <div class="row">
        <div class="col-md-8">
            <div class="content">
            <p>
               Nasi kuning Banjar adalah salah satu hidangan kuliner yang menjadi kebanggaan masyarakat Banjarmasin, Kalimantan Selatan. Hidangan ini tidak hanya menjadi menu andalan untuk sarapan pagi, tetapi juga kerap hadir dalam berbagai acara syukuran dan perayaan. Berbeda dengan nasi kuning yang ditemukan di berbagai daerah lain di Indonesia, nasi kuning Banjar memiliki cita rasa dan penyajian yang khas, terutama pada lauk pauk yang menyertainya. <br><br>Lauk Nasi Kuning Banjar dibalur dengan Sambal habang, atau sambal merah, merupakan elemen penting dalam nasi kuning Banjar. Terbuat dari cabe merah kering, bawang merah, bawang putih, jahe, terasi, gula, dan garam, sambal ini memberikan rasa pedas manis yang khas dan berbeda dari sambal pada umumnya.
            </p>
            </div>
        </div>
        <div class="col-md-4">
            <!-- <div class="book-cover"> -->
                <img class= fotopenjelasan src="img/fotokayla.jpeg" alt="Drained Book Cover">
            </div>
        </div>
    </div>
</div>
</section>

<?php
include 'koneksi.php'; // Pastikan file ini ada dan berisi koneksi ke database

$fotofakta = mysqli_query($koneksi, "SELECT * FROM fotofakta ORDER BY id DESC");
?>

<section id="fakta" style="padding-top: 30px; margin-bottom:80px">
    <h1 style="text-align: center; margin-top: 80px; margin-bottom: 20px;">FAKTA NASI KUNING</h1>
    <div class="row justify-content-center" style="margin-left: 50px;">
        <?php while ($row = mysqli_fetch_assoc($fotofakta)) : ?>
            <div class="col-lg-3 mx-auto">
                <div class="card">
                    <div class="bg"></div>
                    <div class="blob"></div>
                    <div class="card-content">                    
                        <img src="<?php echo htmlspecialchars($row['link']); ?>" alt="Deskripsi Gambar" class='fotocard' style="width: 100%;">   
                        <h4><?php echo htmlspecialchars($row['h4']); ?></h4>
                        <p><?php echo htmlspecialchars($row['p']); ?></p>              
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>


        <!-- Gambar-gambar yang ditentukan secara statis -->
        <!-- <div class="col-lg-3 mx-auto">
            <div class="card">
                <div class="bg"></div>
                <div class="blob"></div>
                <div class="card-content">
                    <img src="/img/1.png" alt="Deskripsi Gambar" class='fotocard'>
                    <h4 style="color: #000000;">Simbol Kejayaan</h4>   
                    <p>Warna kuning pada nasi kuning melambangkan kemakmuran, kebahagiaan, dan keberuntungan dalam budaya Indonesia.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mx-auto">
            <div class="card">
                <div class="bg"></div>
                <div class="blob"></div>
                <div class="card-content">
                    <img src="/img/3.jpg" alt="Deskripsi Gambar" class='fotocard'>
                    <h4 style="color: #000000;">Bumbu Habang</h4>   
                    <p>Perbedaan utama Nasi Kuning Banjar terdapat pada lauknya yang dibalur dengan bumbu habang.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mx-auto">
            <div class="card">
                <div class="bg"></div>
                <div class="blob"></div>
                <div class="card-content">
                    <img src="/img/4.jpg" alt="Deskripsi Gambar" class='fotocard'>
                    <h4 style="color: #000000;">Menu sarapan</h4>   
                    <p>Selain menjadi menu pada acara besar, makanan ini juga kerap disajikan sebagai menu sarapan andalan.</p>
                </div>
            </div>
        </div>
    </div> -->



      
        <!-- <section id="rekomendasi" style="padding-top: 30px;">
            <h1 style="margin-top: 50px;">REKOMENDASI NASI KUNING BANJAR</h1>
            <h1 style="text-align: center; font-weight: bold; color: #000000; margin-bottom: 4px;">DI SAMARINDA</h1>
      -->
           
       
        






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-+lkRjTQAtqJl5gY0EMGUjsWe3gE1z5S+Ukg9Uj23/L5irMHImaPJkOAPFEq1W5xh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-0pi7o4pe0jPG0VycV9LOqqhFe33+PeRc5uqsAJa7E9xPqz4rL2rQ2j01wSHOjg27" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js.js"></script>
</body>
</html>
