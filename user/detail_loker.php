<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
</head>
<body>
    <p>PROFILE</p>
    <?php 
        include"head.php";
        $id = null;
        $id = null;
        $sql = mysqli_query ($konek_db, "SELECT * FROM iklan_loker where id_loker='".$_GET['id']."'");
        $data = mysqli_fetch_array ($sql);

    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Nama Loker :</label>
            <?php echo $data['nama_loker'] ?>
            <br>
            <label id="label-gejala">Nama Perusahaan :</label>
            <?php echo $data['nama_perusahaan'] ?>
            <br>
            <label id="label-gejala">Daerah :</label>
            <?php echo $data['daerah'] ?>
            <br>
            <label id="label-gejala">Deskripsi Pekerjaan :</label><br>
            <pre>
            <?php echo $data['deskripsi'] ?>
            </pre>
            <p></p>
        </form>
    </div>
    <a href="lamar_loker.php"><button id="btn-tambah">LAMAR</button></a>
    <a href="list_loker.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>