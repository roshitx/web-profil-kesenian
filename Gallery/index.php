<?php
// Koneksi ke database
require '../functions2.php';

// Ambil data dari tabel
$gallery = query("SELECT * FROM gallery");

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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            
    <title>Gallery</title>
</head>
<body>
    
    <!-- Navbar -->
    <?php include('../header/header.php'); ?>
<!-- Akhir Navbar -->

<!-- Scroll To Top -->
<div class="scrollToTop" onclick="scrollKeatas()">
    <i class="bi bi-arrow-up fa-lg"></i>
</div>
<!-- Akhir Scroll To Top -->

<!-- Judul Page Gallery -->
    <div class="judulgallery">
        <h1>GALLERY</h1>
    </div>
<!-- Akhir Judul Gallery -->

<!-- Content Gallery -->

<section class="gallery min-vh-100">
    <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?php foreach ($gallery as $row) : ?>
            <div class="col">
                <img src="../upload2/<?= $row["gambar"] ?>" class="gallery-item">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="/Img/Gallery/drumband1.png" class="modal-img" alt="modal img">
        </div>
      </div>
    </div>
  </div>


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
    <script src="main.js"></script>

</body>
</html>