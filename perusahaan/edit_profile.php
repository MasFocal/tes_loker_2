<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>EDIT PROFILE PERUSAHAAN</p>
    <?php 
        include"head.php";
        $id = null;
        $sql = mysqli_query ($konek_db, "SELECT * FROM perusahaan where id_perusahaan='".$_SESSION['id_perusahaan']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Foto :</label>
            <?php echo $data['logo_perusahaan'] ?>
            <br>
            <label id="label-gejala">Nama :</label>
            <?php echo $data['nama_perusahaan'] ?>
            <br>
            <label id="label-gejala">Username :</label>
            <?php echo $data['username'] ?>
            <br>
            <label id="label-gejala">Email :</label>
            <?php echo $data['email'] ?>
            <br>
            <label id="label-gejala">No HP :</label>
            <?php echo $data['no_hp_perusahaan'] ?>
            <br>
            <label id="label-gejala">Alamat :</label>
            <?php echo $data['alamat_perusahaan'] ?>
            <p></p>
        </form>
    </div>
</body>
</html>