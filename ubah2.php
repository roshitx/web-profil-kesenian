<?php

require 'functions2.php';

// ambil data di URL
$id = $_GET["id"];

// query data prestasi berdasarkan id

$gallery = query("SELECT * FROM gallery WHERE id = $id")[0];










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
    <title>Ubah Data Gallery</title>
</head>

<body>
    <?php

    if (isset($_POST["submit"])) {

        // query insert data

        // Cek keberhasilan data diubah gagal atau tidak
        if (ubah($_POST) > 0) {
            echo "
            <script>
            Swal.fire(
                'Berhasil!',
                'Data berhasil diubah.',
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
                'Data gagal diubah.',
                'error'
            )
            </script>
            ";
        }
    }


    ?>
    <div class="container">
        <h1>Ubah Data Gallery</h1>


        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $gallery["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $gallery["gambar"]; ?>">

            <div class="mb-3 row">
                <label for="inputGambar" class="col-sm-2 col-form-label">
                    <p>Gambar :</p>
                </label>
                <div class="col-sm-10">
                    <img src="upload2/<?= $gallery['gambar']; ?>" width="100px">
                    <input type="file" class="form-control" id="inputGambar" name="gambar">
                </div>
            </div>


            <div class="container submit">
                <a class="btn btn-primary" href="Administrator/gallery.php" role="button"><i class="bi bi-arrow-left"></i> Kembali</a>
                <button type="submit" name="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Ubah Data</button>
            </div>


        </form>
    </div>


</body>

</html>