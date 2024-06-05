<?php
// Folder tujuan upload file
$folder = 'uploads/';

// Mengecek apakah file sudah diunggah
if(isset($_FILES['photo'])) {
    $file = $_FILES['photo'];
    
    // Memeriksa jenis file yang diunggah
    $file_type = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowed_types = array('jpg', 'jpeg', 'png');
    if(!in_array($file_type, $allowed_types)) {
        die("Error: File harus berupa gambar (jpg, jpeg, png)");
    }

    // Memeriksa ukuran file
    $max_size = 5000000; // 5MB
    if($file['size'] > $max_size) {
        die("Error: Ukuran file melebihi batas maksimum (5MB)");
    }

    // Mendapatkan id_user dari form atau session
    // Misalnya, disini kita mengambilnya dari session
    $id_user = $_SESSION['id_user']; // Sesuaikan dengan cara Anda mendapatkan id_user

    // Membuat nama file yang unik dengan format: id_user-nama_file.ekstensi
    $filename = $id_user . '-' . uniqid() . '.' . $file_type;

    // Memindahkan file ke folder tujuan
    if(move_uploaded_file($file['tmp_name'], $folder . $filename)) {
        echo "File berhasil diunggah: " . $filename;
    } else {
        echo "Error: Gagal mengunggah file";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data"> 
        <label for="photo">Upload Foto (jpg, jpeg, png)</label><br>
        <input type="file" name="photo" id="photo" accept="image/*">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
    // Folder tempat foto disimpan
    $folder = 'uploads/';

    // Mendapatkan id_user dari form atau session
    // Misalnya, disini kita mengambilnya dari session
    $id_user = $_SESSION['id_user']; // Sesuaikan dengan cara Anda mendapatkan id_user

    // Mendapatkan daftar file di folder
    $files = scandir($folder);

    // Menampilkan foto dengan nama file yang sesuai dengan id_user
    foreach($files as $file) {
        if(strpos($file, $id_user . '-') === 0) {
            echo "<img src='$folder/$file' alt='Photo' style='max-width: 300px;'>";
        }
    }
    ?>