<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
    ?>
    <p>MET DATANG <?php echo $_SESSION['nama_admin']; ?></p>
    <div>
        <a href="list-admin.php"><button id="btn-tambah">DATA ADMIN</button></a>
        <a href="list-user.php"><button id="btn-tambah">DATA USER</button></a>
        <a href="list-perusahaan.php"><button id="btn-tambah">DATA PERUSAHAAN</button></a>
        <a href="list-loker.php"><button id="btn-tambah">DATA LOKER</button></a>
        <a href="list-daerah.php"><button id="btn-tambah">DATA DAERAH</button></a>
    </div>
    <p></p>
    <div>
        <a id="menu" href="logout.php"><button id="btn-login">Logout</button></a>
    </div>
</body>
</html>