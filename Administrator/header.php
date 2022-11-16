<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <link rel="stylesheet" href="header.css?v=<?= time(); ?>">
    <title>Document</title>
</head>
<body>
<div class="container pembungkus">
        <div class="row">
            <div class="col-2">
                <div class="sidebar">
                    <div class="logo-sidebar">
                        <a href="../Home/index.php">
                            <img src="../Img/SMK-LOGO.png" alt="Logo SMK N 1 Bantul">
                        </a>
                    </div>
                    <div class="list-sidebar">
                        <ul>
                            <div class="prestasi-berita">
                                <li><a href="../Administrator/prestasi.php">Prestasi & Berita</a></li>
                            </div>
                            <br>
                            <div class="gallery">
                                <li><a href="../Administrator/gallery.php">Gallery</a></li>
                            </div>
                            <br>
                            <div class="back">
                                <li><a href="../Home/index.php">Landing Page</a></li>
                            </div>
                        </ul>
                    </div>
                    <!-- Default dropend button -->
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Ekstra
                        </button>
                    <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Drumband/admin.php">Drumband</a></li>
                            <li><a class="dropdown-item" href="../Karawitan/admin.php">Karawitan</a></li>
                            <li><a class="dropdown-item" href="../Menjahit/admin.php">Menjahit</a></li>
                            <li><a class="dropdown-item" href="../Padus/admin.php">Padus</a></li>
                            <li><a class="dropdown-item" href="../Tari/admin.php">Tari</a></li>
                            <li><a class="dropdown-item" href="../Teater/admin.php">Teater</a></li>
                    </ul>
                    </div>

                    <div class="button-logout">
                        <a class="btn btn-danger" href="../logout.php" role="button"><i class="bi bi-box-arrow-left"></i> Logout</a>
                    </div>
                    <!-- Copyright -->
                    <div class="copyright">
                        <p><?php date_default_timezone_set('Asia/Jakarta');
                            echo date('H:i:s a'); // menampilkan jam sekarang
                            echo "<br/>";
                            echo date('l, d-m-Y'); //kombinasi jam dan tanggal
                            ?></p>
                    </div>
                </div>
            </div>




            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>