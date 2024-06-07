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
        if (isset($_POST['detail'])) {
            $id = $_POST['id_loker'];
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
            <label id="label-gejala">Deskripsi :</label>
            <pre>
            <?php echo $data['deskripsi'] ?>
            </pre>

            <p></p>
        </form>
    </div>
    <a href="edit_profile.php"><button id="btn-tambah">EDIT</button></a>
    <a href="data_loker.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>