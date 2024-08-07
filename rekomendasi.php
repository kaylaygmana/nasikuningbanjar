<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="style.css">
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
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php#fakta">Fakta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="resep.php">Resep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#rekomendasi">Rekomendasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php

include 'koneksi.php';

$rekomendasi = mysqli_query($koneksi, "SELECT * FROM rekomendasi ORDER BY id DESC");
?>


<h1 style="margin-top:20px;">REKOMENDASI NASI KUNING BANJAR DI SAMARINDA</h1>
<div class="container">
    <div class="row row-rekomendasi justify-content-center">
        <?php while ($row = mysqli_fetch_assoc($rekomendasi)) : ?>
            <div class="coll-lg-3 mx-auto">
                <div class="cardrekomendasi">
                    <img class="cardrekomendasi-foto" src="<?php echo htmlspecialchars($row['link']); ?>" alt="Deskripsi Gambar">
                    <p class="heading"><?php echo htmlspecialchars($row['nama']); ?></p>
                    <p class="description"><?php echo htmlspecialchars($row['alamat']); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlLycU4itmxpqS5TXj5f7VZ8wBfn+1jRQXRZcEXe1i/n/gRTQczk5TX+Y6W" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG8+ybPgsIf2cFghHGjGhk5i8vuz9j7l1bYZZjzE2RaBQ+11YyR7O5E2I8T" crossorigin="anonymous"></script>
<script src="js.js"></script>
</body>
</html>
