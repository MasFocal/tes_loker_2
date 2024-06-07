<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
    <link rel="stylesheet" href="../admin/admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
    ?>
    <p>MET DATANG <?php echo $_SESSION['nama_user']; ?></p>
    <div>
        <a href="profile.php"><button id="btn-tambah">PROFILE USER</button></a>
        <a href="list_loker.php"><button id="btn-tambah">LIST LOKER</button></a>
        <a href="list_perusahaan.php"><button id="btn-tambah">LIST PERUSAHAAN</button></a>
        <a href="status_loker.php"><button id="btn-tambah">STATUS LOKER</button></a>
    </div>
    <p></p>
    <div>
        <a id="menu" href="logout.php"><button id="btn-login">Logout</button></a>
    </div>
</body>
</html>