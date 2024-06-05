<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" href="../admin/admin-style.css">
</head>
<body>
    <p>PROFILE</p>
    <?php 
        include"head.php";
        $id = null;
        $sql = mysqli_query ($konek_db, "SELECT * FROM user where id_user='".$_SESSION['id_user']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Foto :</label>
            <?php echo $data['foto'] ?>
            <br>
            <label id="label-gejala">Nama :</label>
            <?php echo $data['nama_user'] ?>
            <br>
            <label id="label-gejala">Username :</label>
            <?php echo $data['username'] ?>
            <br>
            <label id="label-gejala">Usia :</label>
            <?php echo $data['usia'] ?>
            <br>
            <label id="label-gejala">Tanggal Lahir :</label>
            <?php echo $data['tanggal_lahir'] ?>
            <br>
            <label id="label-gejala">Jenis Kelamin :</label>
            <?php echo $data['jeniskelamin'] ?>
            <br>
            <label id="label-gejala">Email :</label>
            <?php echo $data['email'] ?>
            <br>
            <label id="label-gejala">No HP :</label>
            <?php echo $data['no_hp_user'] ?>
            <br>
            <label id="label-gejala">Alamat :</label>
            <?php echo $data['alamat_user'] ?>
            <p></p>
        </form>
    </div>
    <a href="edit_profile.php"><button id="btn-tambah">EDIT</button></a>
    <a href="index.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>