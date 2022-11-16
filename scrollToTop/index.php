<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    
    <!-- Scroll To Top -->
    <div class="scrollToTop" onclick="scrollKeatas()">
        <i class="bi bi-arrow-up fa-lg"></i>
    </div>
    <!-- Akhir Scroll To Top -->


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
</body>
</html>