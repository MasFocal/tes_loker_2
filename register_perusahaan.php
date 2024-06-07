<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PERUSAHAAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "koneksi.php";
        session_start();
    ?>
    <section id="login-container">
        <form method="post">
        <h2>REGISTER PERUSAHAAN</h2>
        <label>Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" placeholder="Nama" required>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>
        <p></p>
        <button type="submit" name="register">REGISTER</button>
        <p>Sudah Punya Akun ? <a href="login_perusahaan.php">Login</a></p>
    </form>
    </section>
    <?php 
    if(isset($_POST['register'])){
        $nama_perusahaan    = $_POST['nama_perusahaan'];
        $email              = $_POST['email'];
        $username           = $_POST['username'];
        $password           = $_POST['password'];

        $cekEmail = mysqli_query($konek_db, "SELECT * FROM `perusahaan` WHERE `username` = '$username' OR `email` = '$email' OR `nama_perusahaan` = '$nama_perusahaan'");

        if (mysqli_num_rows($cekEmail) > 0) {
            echo ("
                <script LANGUAGE='JavaScript'>
                window.alert('Username atau Email atau Nama Perusahaan Sudah Terdaftar');
                window.location.href='register_perusahaan.php';
                </script>
                ");
            exit();
        } else {
            $query="INSERT INTO `perusahaan`(`nama_perusahaan`,`email`, `username`, `password`) VALUES ('$nama_perusahaan','$email', '$username', '$password')";
            $result=mysqli_query($konek_db, $query);
                
            if ($result) {
                $_SESSION['username']           = $username;
                $_SESSION['password']           = $password;
                $_SESSION['id_perusahaan']      = mysqli_insert_id($konek_db);
                $_SESSION['nama_perusahaan']    = $nama_perusahaan;
                $_SESSION['email']              = $email;
                header('location: perusahaan/edit_profile.php');
                exit();
            } else {
                echo "<script>alert('Data Gagal Disimpan');</script>";
            }
        }
    }
    ?>
</body>
</html>