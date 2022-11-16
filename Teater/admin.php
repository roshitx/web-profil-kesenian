<?php
// Koneksi ke database
require 'functions.php';

// Ambil data dari tabel
$teater = query("SELECT * FROM teater");

?>


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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <link rel="stylesheet" href="admin.css?v=<?= time(); ?>">
    <title>Administrator</title>
</head>
<body>
        <!-- Navbar -->
        <?php include('../Administrator/header.php'); ?>

        <div class="col-10">
            <!-- Judul Utama -->
            <div class="judul">
                    <h1 class="judul-admin">Selamat Datang, Administrator!</h1>
            </div>

            <div class="container-sm">
                <h4>Teater</h4>
            </div>

            <!-- Button Tambah -->
            <div class="container tambah">
                <div class="fitur-tambah">
                    <a class="btn btn-success" href="tambah.php" role="button"><i class="bi bi-plus-square"></i> Tambah Data</a>
                </div>
            </div>
            <br>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Foto Pembimbing</th>
                    <th scope="col">Nama Pembimbing</th>
                    <th scope="col">Jadwal</th>
                    <th scope="col">Aksi</th>
                    </tr>

                </thead>
                <tbody>

                <?php $i = 1; ?>
                <?php foreach ($teater as $row) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><img src="upload/<?= $row["foto_pembimbing"] ?>"></td>
                        <td><?= $row["nama_pembimbing"] ?></td>
                        <td><?= $row["jadwal"] ?></td>
                        <td><a class="btn btn-primary" href="ubah.php?id=<?= $row["id"] ?>" role="button"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"] ?>" role="button" onclick="return confirm('Yakin?');"><i class="bi bi-trash3"></i> Delete</a></td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>


        </div>


</body>
</html>