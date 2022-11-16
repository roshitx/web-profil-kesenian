<?php  

// Upload gambar
$gambar = upload();
if ( !$gambar ) {
    return false;
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
        alert('Pilih gambar terlebih dahulu!');
        </script>
        ";
    return false;
}


// cek apakah yang diupload adalah gambar
$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
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
if( $ukuranFile > 5000000 ) {
    echo "
        <script>
        alert('Ukuran file anda terlalu besar!');
        </script>
        ";
return false;
}
}

// lolos pengecekan, gambar siap diupload
move_uploaded_file($tmpName, 'upload/' . $namaFile);

return $namaFile;





<label for="gambar" class="col-sm-2 col-form-label"><p>Gambar :</p></label>
            <div class="col-sm-10">
                <div class="mb-3">
                    <label for="gambar" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                </div>
            </div>








?>