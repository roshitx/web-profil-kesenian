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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Link Icon CDN -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Link CSS Biasa -->
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Ekstrakurikuler Kesenian</title>
</head>


<body>

    <!-- Navbar -->
    <?php include ('../header/header.php') ?>
<!-- Akhir Navbar -->


<!-- Banner -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"  data-bs-interval="1000">
        <img src="../Img/banner-fix.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        <h5>Ekstrakurikuler Seni</h5>
        </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000">
        <img src="../Img/Banner/Banner.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        <h5>Marching Band</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/banner/Banner-2.png" class="d-block w-100" data-bs-interval="1000">
        <div class="carousel-caption d-none d-md-block">
        <h5>Karawitan</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/banner/Banner-3.png" class="d-block w-100" data-bs-interval="1000">
        <div class="carousel-caption d-none d-md-block">
        <h5>Menjahit</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/banner/Banner-4.png" class="d-block w-100" data-bs-interval="1000">
        <div class="carousel-caption d-none d-md-block">
        <h5>Paduan Suara</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/banner/Banner-5.png" class="d-block w-100" data-bs-interval="1000">
        <div class="carousel-caption d-none d-md-block">
        <h5>Tari</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/banner/Banner-6.png" class="d-block w-100" data-bs-interval="1000">
        <div class="carousel-caption d-none d-md-block">
        <h5>Teater</h5>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Akhir Banner -->

<!-- Scroll To Top -->
<div class="scrollToTop" onclick="scrollKeatas()">
    <i class="bi bi-arrow-up fa-lg"></i>
</div>
<!-- Akhir Scroll To Top -->

<!-- Content -->


    <!-- Judul 1 -->
    <div class="judul-1">
        <div class="ekstrakurikuler" data-aos="fade-down">
            <h4>EKSTRAKURIKULER</h4>
        </div>
        <div class="wrapper-hr1" data-aos="fade-up">
            <div class="hr-1"></div>
        </div>
    </div>
    <!-- Akhir Judul 1 -->

    <!-- 6 Ekstrakurikuler -->
    <div class="container-content">
        <div class="item" data-aos="fade-down-right">
            <img src="../Img/Drumband Rectangle.png">
            <h1><a href="../Drumband/index.php">Drumband</a></h1>
        </div>
        <div class="item" data-aos="fade-in">
            <img src="../Img/KarawitanRectangle.png">
            <h1><a href="../Karawitan/index.php">Karawitan</a></h1>
        </div>
        <div class="item" data-aos="fade-down-left">
            <img src="../Img/Menjahit Rectangle.png">
            <h1><a href="../Menjahit/index.php">Menjahit</a></h1>
        </div>
        <div class="item" data-aos="fade-up-right">
            <img src="../Img/Padus Rectangle.png">
            <h1><a href="../Padus/index.php">Padus</a></h1>
        </div>
        <div class="item" data-aos="fade-in">
            <img src="Img/Tari Rectangle.png">
            <h1><a href="../Tari/index.php">Tari</a></h1>
        </div>
        <div class="item" data-aos="fade-up-left">
            <img src="../Img/Teater Rectangle.png">
            <h1><a href="../Teater/index.php">Teater</a></h1>
        </div>
    </div>
    <!-- Akhir 6 Ekstrakurikuler -->

    <!-- Berita Terkini -->

        <!-- Judul 2 -->
        <div class="judul-2">
            <div class="berita-terkini" data-aos="fade-down">
                <h4>BERITA TERKINI</h4>
            </div>
            <div class="wrapper-hr2" data-aos="fade-up">
                <div class="hr-2"></div>
            </div>
        </div>
        <!-- Akhir Judul 2 -->

        <!-- Carousel Berita Terkini -->
    <div class="berita">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-aos="fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('../Img/beritaTerkini1.jpg')">
                    <div class="container">
                        <h1>Lomba Tari Kelompok FSPN 2022</h1>
                        <p>Kelompok Tari SMK N 1 Bantul mengikuti Festival Seni Pelajar Nasional tingkat Prov DIY, dengan menampilkan tari Merak Ngigel</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: #bbb;">">
                    <div class="container">
                        <h1>News</h1>
                        <p>Ini penjelasan berita</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-color: #bbb;">
                    <div class="container">
                        <h1>News</h1>
                        <p>Ini penjelasan berita</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
        <!-- Akhir Carousel Berita Terkini -->

    <!-- Gallery -->

        <!-- Judul 3 Gallery -->

        <div class="judul-3">
            <div class="gallery" data-aos="fade-down">
                <h4>GALLERY</h4>
            </div>
            <div class="wrapper-hr3" data-aos="fade-up">
                <div class="hr-3"></div>
            </div>
        </div>
        <!-- Akhir Judul 3 Gallery -->

        <!-- Gallery -->

        <div class="gallery-content">
                <div class="kotak1" style="background-image: url(../Img/gallery-content1.png);" data-aos="fade-right">
            </div>
                <div class="kotak2" style="background-image: url(../Img/gallery-content2.png);" data-aos="fade-in">
            </div>
                <div class="kotak3" style="background-image: url(../Img/gallery-content3.png);" data-aos="fade-left">
            </div>
        </div>

        <div class="button-gallery" data-aos="fade-down">
            <div class="Btn">
                <h1><a href="Gallery/index.html">Selengkapnya</a></h1>
            </div>
        </div>
        <!-- Akhir Gallery -->

        <!-- Footer -->

        <?php include('../footer/footer.php'); ?>

        <!-- Akhir Footer -->

    <!-- Scroll To Top -->
    <script>
        function scrollKeatas () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        }
    </script>
    <!-- Akhir Scroll To Top -->


    <script src="script.js"></script>
    
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>
</html>