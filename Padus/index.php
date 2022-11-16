<?php
// Koneksi ke database
require 'functions.php';

// Ambil data dari tabel
$padus = query("SELECT * FROM paduan_suara");

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
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Paduan Suara</title>
</head>
<body>
    
    <!-- Navbar -->
    <?php include('../header/header.php'); ?>
<!-- Akhir Navbar -->

<!-- Banner -->
<div class="container-fluid banner">
    <div class="container banner-content col-lg-8">
        <div class="text-center text-judul">
            <p class="fs-1 fw-bold"><a href="">PADUAN SUARA</a></p>
        </div>
    </div>
</div>
<!-- Akhir Banner -->

    <!-- Scroll To Top -->
    <div class="scrollToTop" onclick="scrollKeatas()">
        <i class="bi bi-arrow-up fa-lg"></i>
    </div>
    <!-- Akhir Scroll To Top -->




<!-- Penjelasan Eskul -->
<div class="penjelasan">
    <div class="container-fluid">
        <p>Program ekstrakurikuler paduan suara merupakan tempat siswa/siswi untuk belajar dan melatih kekompakan dalam bernyanyi secara berkelompok maupun perorangan. Didalam ekstrakurikuler paduan suara kita dilatih untuk dapat mewujudkan sebuah teori dengan praktek yang real atau nyata.</p>
    </div>
</div>
<div class="container-hr">
    <div class="hr-penjelasan"></div>
</div>
<!-- Akhir Penjelasan Eskul -->

<!-- Tujuan -->
<div class="judul-tujuan">
    <h1>TUJUAN</h1>
</div>

<div class="tujuan">
    <div class="container-fluid">
        <p>Melatih olah suara bagi siswa-siswa yang mempunyai bakat dan minat dalam bernyanyi, sehingga bakat 
        dan minat dapat disalurkan dengan tepat.</p>
    </div>
</div>
<!-- Akhir Tujuan -->

<!-- Visi & Misi -->
    <!-- Visi -->
        <div class="visi-misi">
            <h1>VISI & MISI</h1>
        </div>

        <div class="visi">
            <h1>VISI</h1>
        </div>

        <div class="visi-text">
            <div class="container-fluid">
                <p>Menjadikan wadah bagi siswa yang mempunyai minat maupun bakat dalam bernyanyi.</p>
            </div>
        </div>
    
    <!-- Misi -->
        <div class="misi">
            <h1>MISI</h1>
        </div>

        <div class="misi-text">
            <div class="container-misi">
                <ul>
                    <li>Meningkatkan penguasaan dalam teknik vokal dan kepaduan bernyanyi.</li>
                    <li>Menciptakan nilai estetika dalam seni suara dengan menguasai notasi lagu.</li>
                    <li>Memupuk bakat dan kemampuan bernyanyi.</li>
                    <li>Meningkatkan kepercayaan diri dan daya saing dalam perlombaan-perlombaan bernyanyi.</li>
                    <li>Memupuk rasa persaudaraan dan menjalin kerja sama antar anggota paduan suara tanpa membedakan suku,agama,ras dan bahasa.</li>
                    <li>Menghasilkan vokalis yang berkualitas,profesional,dan berjiwa sosial.</li>
                    <li>Menjalin kerja sama yang baik dengan siswa lain.</li>
                </ul>
            </div>
        </div>
<!-- Akhir Visi & Misi -->

<!-- Pembimbing -->
<div class="pembimbing">
    <h1>PEMBIMBING</h1>
</div>


<?php foreach ($padus as $row) : ?>
<div class="pembimbing-img">
    <img src="upload/<?= $row["foto_pembimbing"] ?>">
</div>

<div class="nama-pembimbing">
    <h1><?= $row["nama_pembimbing"] ?></h1>
</div>
<?php endforeach; ?>

<!-- Akhir Pembimbing -->

<!-- Jadwal Ekstra -->
<div class="jadwal-kegiatan">
    <h1>JADWAL KEGIATAN</h1>
</div>


<div class="jadwal-eskul">
    <h1><?= $row["jadwal"] ?></h1>
</div>











<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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


    <script src="script.js"></script>

</body>
</html>