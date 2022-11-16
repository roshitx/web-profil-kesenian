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
    $nama_pembimbing = htmlspecialchars ( $data [ "nama_pembimbing" ] );
    $jadwal = htmlspecialchars ( $data [ "jadwal" ] );

    // Upload gambar
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }
    

    $query = "INSERT INTO paduan_suara VALUES 
                ('', '$gambar', '$nama_pembimbing', '$jadwal')";
        mysqli_query($conn, $query);

    return mysqli_affected_rows ($conn);
}

// Fungsi upload
function upload() {
    
    $namaFile = $_FILES['foto_pembimbing']['name'];
    $ukuranFile = $_FILES['foto_pembimbing']['size'];
    $error = $_FILES['foto_pembimbing']['error'];
    $tmpName= $_FILES['foto_pembimbing']['tmp_name'];


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
    if( $ukuranFile > 10000000 ) {
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
    move_uploaded_file($tmpName, 'upload/' . $namaFileBaru);

    return $namaFileBaru;
}

// Fungsi hapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM paduan_suara WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi ubah data
function ubah($data) {
    global $conn;
    
    $id = $data["id"];
    $nama_pembimbing = htmlspecialchars ( $data [ "nama_pembimbing" ] );
    $jadwal = htmlspecialchars ( $data [ "jadwal" ] );
    $gambarLama = htmlspecialchars($data [ "gambarLama" ] );
    
    
    
    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['foto_pembimbing']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    
    
    
    $query = "UPDATE paduan_suara SET 
                nama_pembimbing = '$nama_pembimbing',
                jadwal = '$jadwal',
                foto_pembimbing = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows ($conn);
    } 