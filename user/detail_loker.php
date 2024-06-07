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
        if(isset($_POST["lamar"])) {
            $id = $_POST["id_user"];
            header("location: lamar_loker.php?id=".$id."");
        }
        if(isset($_POST["kembali"])) {
            $id = $_POST["id_user"];
            header("location: list_loker.php");
        }
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
    <form action="" method="POST">
        <input type="hidden" name="id_user" value="<?= $data[0] ?>">
        <?php
            $id++;
            echo "
                <button name='lamar'>LAMAR</button>
                <button name='kembali'>KEMBALI</button>
            ";
        ?>
    </form>
    <!--
    <a href="lamar_loker.php?id=<?php echo ".$id."; ?>"><button id="btn-tambah">LAMAR</button></a>
    <a href="list_loker.php"><button id="btn-tambah">KEMBALI</button></a>
    -->
</body>
</html>