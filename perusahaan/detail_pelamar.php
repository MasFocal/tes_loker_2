<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM Pelamar</title>
</head>
<body>
<p>DETAIL PELAMAR</p>
    <?php 
        include "head.php";
        $id = null;
        if(isset($_POST["kembali"])) {
            $id = $_POST["id_user"];
            header("location: data_pelamar.php");
        }
        $sql = mysqli_query ($konek_db, "SELECT * FROM pelamar where id_pelamar='".$_GET['id']."'");
        $data = mysqli_fetch_array($sql);
        //$sql2 = mysqli_query($konek_db, "SELECT * FROM user WHERE id_user");
        //$data2 = mysqli_fetch_array($sql2);
    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Nama Loker :</label>
            <?php echo $data ? $data['nama_loker']." - ".$data['nama_perusahaan'] : "Data loker tidak ditemukan."; ?>
            <p></p>
            <label id="label-gejala">Foto :</label>
            <?php echo $data ['foto'] ?>
            <br>
            <label id="label-gejala">Nama Pelamar :</label>
            <?php echo $data['nama_user'] ?>
            <br>
            <label id="label-gejala">Posisi Pekerjaan :</label>
            <?php echo $data['nama_loker'] ?>
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
            <label id="label-gejala">Alamat :</label>
            <?php echo $data['alamat_user'] ?>
            <br>
            <label id="label-gejala">Email :</label>
            <?php echo $data['email'] ?>
            <br>
            <label id="label-gejala">No HP :</label>
            <?php echo $data['no_hp_user'] ?>
            <br>
            <label id="label-gejala">File CV :</label>
            <?php echo $data['file_cv'] ?>
            <p></p>
            <form action="" method="POST">
                <input type="hidden" name="id_user" value="<?= $data[0] ?>">
                <?php
                    $id++;
                    echo "
                        <button name='lamar'>KIRIM BERKAS</button>
                        <button name='kembali'>KEMBALI</button>
                    ";
                ?>
            </form>
        </form>
    </div>
</body>
</html>
