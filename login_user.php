<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    include "koneksi.php";
        if (isset($_POST['uss']) && isset($_POST['pass'])){
            $uss    = $_POST['uss'];
            $pass   = $_POST['pass'];

            $result = mysqli_query($konek_db, "SELECT * FROM user WHERE username='$uss' AND password='$pass'");
            $data   = mysqli_fetch_assoc($result);

            if($data > 0){
                $_SESSION['username']           = $uss;
                $_SESSION['password']           = $pass;
                $_SESSION['id_user']            = $data['id_user'];
                $_SESSION['nama_user']          = $data['nama_user'];
                header("location: user/index.php");
                exit();
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Login Gagal');
                    window.location.href='login_user.php';
                    </script>");
                exit();
            }
        }
    ?>

    <section id="login-container">
        <form method="post">
        <h2>LOGIN USER</h2>
        <label>Username</label>
        <input type="text" name="uss" placeholder="Username" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>
        <p></p>
        <button type="submit">LOGIN</button>
        <p>Belum Punya Akun ? <a href="register_user.php">Register</a></p>
    </form>
    </section>
</body>
</html>