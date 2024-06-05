<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM Pelamar</title>
</head>
<body>
<p>FORM PELAMAR</p>
    <?php 
        include"head.php";
        $id = null;
        $sql = mysqli_query ($konek_db, "SELECT * FROM iklan_loker where id_loker");
        $data = mysqli_fetch_array ($sql);
        $sql2 = mysqli_query ($konek_db, "SELECT * FROM user where id_user");
        $data2 = mysqli_fetch_array ($sql2);
    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Nama Loker :</label>
            <?php echo "".$data['nama_loker']." - ".$data['nama_perusahaan']."";?>
            <p></p>
            <label id="label-gejala">Foto :</label>
            <?php echo $data2['foto'] ?>
            <br>
            <label id="label-gejala">Nama Pelamar :</label>
            <?php echo $data2['nama_user'] ?>
            <br>
            <label id="label-gejala">Usia :</label>
            <?php echo $data2['usia'] ?>
            <br>
            <label id="label-gejala">Tanggal Lahir :</label>
            <?php echo $data2['tanggal_lahir'] ?>
            <br>
            <label id="label-gejala">Email :</label>
            <?php echo $data2['email'] ?>
            <br>
            <label id="label-gejala">No HP :</label>
            <?php echo $data2['no_hp_user'] ?>
            <br>
            <label id="label-gejala">File CV :</label>
            <?php echo "upload.png"; ?>
            <p></p>
            <button id="btn-tambah">KIRIM</button>
            <a href="index.php"><button id="btn-xx">KEMBALI</button></a>

            <?php
                if(isset($_POST['simpan'])){
                $nama_user = $_POST['nama_user'];
                $diagnosa  = $_POST['diagnosa'];

                $query=mysqli_query($konek_db, "INSERT INTO `pelamar`(`nama_user`, `nama_loker`, `nama_perusahaan`, `file_cv`, `no_hp_user`, `email`) VALUES ('$iddiagnosa', '$diagnosa')");

                if($query) header('location:diagnosa.php');
                else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
</body>
</html>