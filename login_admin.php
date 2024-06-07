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

            $result = mysqli_query($konek_db, "SELECT * FROM admin WHERE username='$uss' AND password='$pass'");
            $data   = mysqli_fetch_assoc($result);

            if($data > 0){
                $_SESSION['username']           = $uss;
                $_SESSION['password']           = $pass;
                $_SESSION['nama_admin']         = $data['nama_admin'];
                header("location: admin/index.php");
                exit();
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Login Gagal');
                    window.location.href='login_admin.php';
                    </script>");
                exit();
            }
        }
    ?>

    <section id="login-container">
        <form method="post">
        <h2>LOGIN ADMIN</h2>
        <label>Username</label>
        <input type="text" name="uss" placeholder="Username" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>
        <p></p>
        <button type="submit">LOGIN</button>
    </form>
    </section>
    
</body>
</html>