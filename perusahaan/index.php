<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Perusahaan</title>
    <link rel="stylesheet" href="../admin/admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
    ?>
    <p>MET DATANG <?php echo $_SESSION['nama_perusahaan']; ?></p>
    <div>
        <a href="profile.php"><button id="btn-tambah">PROFILE PERUSAHAAN</button></a>
        <a href="data_loker.php"><button id="btn-tambah">DATA LOKER</button></a>
        <a href="data_pelamar.php"><button id="btn-tambah">DATA PELAMAR</button></a>
    </div>
    <p></p>
    <div>
        <a id="menu" href="logout.php"><button id="btn-login">Logout</button></a>
    </div>
</body>
</html>