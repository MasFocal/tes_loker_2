<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER USER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "koneksi.php";
        session_start();
    ?>
    <section id="login-container">
        <form method="post">
        <h2>REGISTER USER</h2>
        <label>Nama</label>
        <input type="text" name="nama_user" placeholder="Nama" required>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>
        <p></p>
        <button type="submit" name="register">REGISTER</button>
        <p>Sudah Punya Akun ? <a href="login_user.php">Login</a></p>
    </form>
    </section>
    <?php 
    if(isset($_POST['register'])){
        $nama_user      = $_POST['nama_user'];
        $email          = $_POST['email'];
        $username       = $_POST['username'];
        $password       = $_POST['password'];

        $cekEmail = mysqli_query($konek_db, "SELECT * FROM `user` WHERE `username` = '$username' OR `email` = '$email'");

        if (mysqli_num_rows($cekEmail) > 0) {
            echo ("
                <script LANGUAGE='JavaScript'>
                window.alert('Username atau Email Sudah Terdaftar');
                window.location.href='register_user.php';
                </script>
                ");
            exit();
        } else {
            $query="INSERT INTO `user`(`nama_user`,`email`, `username`, `password`) VALUES ('$nama_user','$email', '$username', '$password')";
            $result=mysqli_query($konek_db, $query);
                
            if ($result) {
                $_SESSION['username']           = $username;
                $_SESSION['password']           = $password;
                $_SESSION['id_user']            = mysqli_insert_id($konek_db);
                $_SESSION['nama_user']          = $nama_user;
                $_SESSION['email']              = $email;
                header('location: user/edit_profile.php');
                exit();
            } else {
                echo "<script>alert('Data Gagal Disimpan');</script>";
            }
        }
    }
    ?>
</body>
</html>