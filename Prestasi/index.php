<?php
// Koneksi ke database
require '../functions.php';

// Ambil data dari tabel
$prestasi = query("SELECT * FROM prestasi");

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            
    <title>Prestasi</title>
</head>
<body>
    
    <!-- Navbar -->
    <?php include('../header/header.php'); ?>
<!-- Akhir Navbar -->

<!-- Judul Page Prestasi -->
    <div class="judulprestasi">
        <h1>PRESTASI & BERITA</h1>
    </div>
<!-- Akhir Judul Prestasi -->

<!-- Konten Prestasi -->
<div class="container prestasi">
    
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($prestasi as $row) : ?>
        <div class="col">
        <div class="card">
            <img src="../upload/<?= $row["gambar"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $row["judul"] ?></h5>
            <p class="card-text"><?= $row["keterangan"] ?></p>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
    </div>
    
</div>
<!-- Akhir Konten Prestasi -->



<!-- Tes Disqus -->
<div class="container disqus">
    <div id="disqus_thread"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://thgrg.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>







        <!-- Footer -->

        <?php include('../footer/footer.php'); ?>

        <!-- Akhir Footer -->




    <script src="script.js"></script>
    <script id="dsq-count-scr" src="//thgrg.disqus.com/count.js" async></script>
</body>
</html>