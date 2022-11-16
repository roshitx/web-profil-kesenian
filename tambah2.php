<?php  

    require 'functions2.php';





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Data Gallery</title>
</head>
<body>
    <?php  
    
    if ( isset($_POST["submit"]) ) {
        

        // Cek keberhasilan data ditambahkan gagal atau tidak
        if ( tambah($_POST) > 0 ) {
            echo "
            <script>
            Swal.fire(
                'Berhasil!',
                'Data berhasil ditambahkan.',
                'success'
            )
                setTimeout(function(){
                    window.location.href = 'Administrator/gallery.php';
                }, 2000);
            </script>
            ";
        } else {
            echo "
            <script>
            Swal.fire(
                'Gagal!',
                'Data gagal ditambahkan.',
                'error'
            )
            </script>
            ";
        }
    }
    
    
    ?>
    <div class="container">
        <h1>Tambah Data Gallery</h1>
    

        <form action="" method="POST" enctype="multipart/form-data">

        <!-- Gambar -->
        <div class="mb-3 row">
                <label for="inputGambar" class="col-sm-2 col-form-label"><p>Gambar :</p></label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputGambar" name="gambar">
            </div>
        </div>


        <div class="container submit">
            <a class="btn btn-primary" href="Administrator/gallery.php" role="button"><i class="bi bi-arrow-left"></i> Kembali</a>
            <button type="submit" name="submit" class="btn btn-success"><i class="bi bi-plus-square"></i> Tambah Data</button>
        </div>


        </form>
    </div>


</body>
</html>