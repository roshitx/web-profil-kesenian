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

    <!-- Link Icon CDN -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Link CSS Biasa -->
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Navbar</title>
</head>
<body>
    
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <a href="#"><img src="../Img/logo-smk.png" alt="Logo SMK N 1 Bantul"></a>
        </div>
            <ul>
                <!-- Home -->
                <div class="home">
                    <li>
                        <a href="../home/index.php" id="home">HOME</a>
                    </li>
                </div>
                <!-- Dropdown Navbar **EXTRA** -->
                <div class="dropdown">
                    <li><a class="dropBtn" href="#">EXTRA</a></li>
                    <div class="drop-content">
                        <a href="../Drumband/index.php">Drumband</a>
                        <a href="../Karawitan/index.php">Karawitan</a>
                        <a href="../Menjahit/index.php">Menjahit</a>
                        <a href="../Padus/index.php">Padus</a>
                        <a href="../Tari/index.php">Tari</a>
                        <a href="../Teater/index.php">Teater</a>
                    </div>
                </div>
                    <!-- Prestasi -->
                    <div class="prestasi">
                        <li>
                            <a href="../Prestasi/index.php">ACHIEVEMENT</a>
                        </li>
                </div>
                    <!-- Akhir Prestasi -->

                    <!-- Gallery -->
                    <div class="galery">
                        <li>
                            <a href="../Gallery/index.php">GALLERY</a>
                        </li>
                    </div>
                    <!-- Akhir Gallery -->
            </ul>
            <!-- Button Login -->
            <a class="btn btn-outline-primary" href="../login.php" role="button" target="_blank"><i class="bi bi-box-arrow-right" ></i> Login</a>
            <!-- Akhir Button Login -->

        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
<!-- Akhir Navbar -->

    <script src="script.js"></script>
</body>
</html>