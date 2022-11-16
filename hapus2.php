<?php  

    require 'functions2.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

    <title>Hapus</title>
</head>
<body>
    <?php  

    $id = $_GET["id"];

    if ( hapus ($id) > 0 ) {
        echo "
            <script>
            Swal.fire(
                'Berhasil!',
                'Data berhasil dihapus.',
                'success'
            )
                setTimeout(function(){
                    window.location.href = 'Administrator/gallery.php';
                }, 1000);
            </script>
            ";
    } else {
        echo "
            <script>
            Swal.fire(
                'Berhasil!',
                'Data gagal dihapus.',
                'error'
            )
                setTimeout(function(){
                    window.location.href = 'Administrator/gallery.php';
                }, 1000);
            </script>
            ";
    }
?>


</body>
</html>