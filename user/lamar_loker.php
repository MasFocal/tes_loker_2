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
        include "head.php";
        $id = null;
        if(isset($_POST["kembali"])) {
            $id = $_POST["id_user"];
            header("location: detail_loker.php?id=".$id."");
        }
        $sql = mysqli_query ($konek_db, "SELECT * FROM iklan_loker where id_loker='".$_GET['id']."'");
        $data = mysqli_fetch_array($sql);
        $sql2 = mysqli_query($konek_db, "SELECT * FROM user WHERE id_user");
        $data2 = mysqli_fetch_array($sql2);
    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Nama Loker :</label>
            <?php echo $data ? $data['nama_loker']." - ".$data['nama_perusahaan'] : "Data loker tidak ditemukan."; ?>
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
            <label id="label-gejala">Jenis Kelamin :</label>
            <?php echo $data2['jeniskelamin'] ?>
            <br>
            <label id="label-gejala">Alamat :</label>
            <?php echo $data2['alamat_user'] ?>
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

            <?php
                if (isset($_POST['lamar'])) {
                    $foto               = $data2['foto'];
                    $nama_user          = $data2['nama_user'];
                    $nama_loker         = $data['nama_loker'];
                    $nama_perusahaan    = $data['nama_perusahaan'];
                    $file_cv            = "upload.png"; // Assuming you have a mechanism to handle file uploads
                    $no_hp_user         = $data2['no_hp_user'];
                    $email              = $data2['email'];
                    $usia               = $data2['usia'];
                    $tanggal_lahir      = $data2['tanggal_lahir'];
                    $jeniskelamin       = $data2['jeniskelamin'];
                    $alamat_user        = $data2['alamat_user'];

                    $query = mysqli_query($konek_db, "INSERT INTO `pelamar`(`foto`, `nama_user`, `nama_loker`, `nama_perusahaan`, `file_cv`, `no_hp_user`, `email`, `usia`, `tanggal_lahir`, `jeniskelamin`, `alamat_user`) VALUES ('$foto', '$nama_user', '$nama_loker', '$nama_perusahaan', '$file_cv', '$no_hp_user', '$email', '$usia', '$tanggal_lahir', '$jeniskelamin', '$alamat_user')");

                    if ($query) {
                        header('Location: tes.php');
                    } else {
                        echo "Data Gagal Disimpan";
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>
