<?php 

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_seni");

// Fungsi Query data
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi tambah data
    function tambah($data) {
        global $conn;

    // Upload gambar
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO gallery VALUES 
                ('', '$gambar')";
        mysqli_query($conn, $query);

    return mysqli_affected_rows ($conn);

}

// Fungsi upload
function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName= $_FILES['gambar']['tmp_name'];


    // cek apakah gambar diupload atau tidak
    if( $error === 4 ) {
        echo "
        <script>
        alert('Silahkan upload gambar terlebih dahulu!');
        </script>
        ";
        return false;
    }

    // cek apakah yang diupload adalah gambar yang valid
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'heic'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
            alert('Yang anda upload bukan gambar!');
            </script>
            ";
        return false;
    }

    // cek apakah ukuran gambar terlalu besar
    if( $ukuranFile > 3000000 ) {
        echo "
            <script>
            alert('Ukuran file anda terlalu besar!');
            </script>
            ";
    return false;
    }

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'upload2/' . $namaFileBaru);

    return $namaFileBaru;
}

// Fungsi hapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM gallery WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}

// Fungsi ubah data
function ubah($data) {
    global $conn;
    
    $id = $data["id"];
    $gambarLama = htmlspecialchars($data [ "gambarLama" ] );
    
    
    
    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    
    
    
    $query = "UPDATE gallery SET
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows ($conn);
    } 