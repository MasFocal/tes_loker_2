<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PERUSAHAAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    include "koneksi.php";
        if (isset($_POST['uss']) && isset($_POST['pass'])){
            $uss    = $_POST['uss'];
            $pass   = $_POST['pass'];

            $result = mysqli_query($konek_db, "SELECT * FROM perusahaan WHERE username='$uss' AND password='$pass'");
            $data   = mysqli_fetch_assoc($result);

            if($data > 0){
                $_SESSION['username']           = $uss;
                $_SESSION['password']           = $pass;
                $_SESSION['id_perusahaan']      = $data['id_perusahaan'];
                $_SESSION['nama_perusahaan']      = $data['nama_perusahaan'];
                header("location: perusahaan/index.php");
                exit();
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Login Gagal');
                    window.location.href='login_perusahaan.php';
                    </script>");
                exit();
            }
        }
    ?>

<section id="login-container">
        <form method="post">
        <h2>LOGIN PERUSAHAAN</h2>
        
        <label>Username</label>
        <input type="text" name="uss" placeholder="Username" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>
        <p></p>
        <button type="submit">LOGIN</button>
        <p>Belum Punya Akun ? <a href="register_perusahaan.php">Register</a></p>
    </form>
    </section>
</body>
</html>