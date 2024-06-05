<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
    ?>
    <p class="judul">TAMBAH ADMIN</p>
    <a href="list-admin.php"><button id="btn-tambah">KEMBALI</button></a>
    <p></p>
    <div class="container">
        <form action="" method="POST">
                <label id="label-gejala">Nama :</label>
                <input type="text" name="nama_admin" id="input-gejala" required>
                <br><br>
                <label id="label-gejala">Username :</label>
                <input type="text" name="username" id="input-gejala" required>
                <br><br>
                <label id="label-gejala">Password :</label>
                <input type="password" name="password" id="input-gejala" required>
                <p></p>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            
            <?php
                if(isset($_POST['simpan'])){
                $nama_admin     = $_POST['nama_admin'];
                $username       = $_POST['username'];
                $password       = $_POST['password'];

                $cekEmail = mysqli_query($konek_db, "SELECT * FROM `admin` WHERE `username` = '$username'");

                if (mysqli_num_rows($cekEmail) > 0) {
                    echo ("
                        <script LANGUAGE='JavaScript'>
                        window.alert('Username Sudah Terdaftar');
                        window.location.href='tambah_admin.php';
                        </script>
                        ");
                    exit();
                } else {
                    $query="INSERT INTO `admin`(`nama_admin`, `username`, `password`) VALUES ('$nama_admin', '$username', '$password')";
                    $result=mysqli_query($konek_db, $query);
                        
                    if ($result) {
                        header('location:list-admin.php');
                        exit();
                    } else {
                        $notif = "Data Gagal Disimpan";
                    }
                }
                }
            ?>
        </form>
    </div>
</body>
</html>