<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH LOKER</title>
</head>
<body>
    <?php 
        include "head.php";
        $sql = mysqli_query($konek_db, "SELECT * FROM perusahaan WHERE nama_perusahaan='" . $_SESSION['nama_perusahaan'] . "'");
        $data = mysqli_fetch_array($sql);
    ?>
    <p>TAMBAH LOKER</p>
    <a href="data_loker.php"><button id="btn-tambah">KEMBALI</button></a>
    <p></p>
    <div class="container">
        <form action="" method="POST">
            <input type="hidden" value="<?php echo $_SESSION['nama_perusahaan']; ?>">
            <!--<p type="hidden">SELAMAT DATANG <?php echo $_SESSION['nama_perusahaan']; ?></p>-->
            <br>
            <label id="label-gejala">Nama Loker :</label>
            <input type="text" name="nama_loker" id="input-gejala" required>
            <br>
            <label id="label-gejala">Deskripsi :</label>
            <textarea name='deskripsi' id='input-gejala' required></textarea>
            <br>
            <label id="label-gejala">Daerah :</label>
            <input name="daerah" id="input-gejala" required>
            <p></p>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>

            <?php 
                if (isset($_POST['simpan'])) {
                    $nama_loker    = $_POST['nama_loker'];
                    $deskripsi     = $_POST['deskripsi'];
                    $daerah        = $_POST['daerah'];
                    $nama_perusahaan = $data['nama_perusahaan'];

                    $query = "INSERT INTO `iklan_loker`(`nama_loker`, `nama_perusahaan`, `deskripsi`, `daerah`) VALUES ('$nama_loker', '$nama_perusahaan', '$deskripsi', '$daerah')";
                    $result = mysqli_query($konek_db, $query);
                    
                    if ($result) {
                        header('location:data_loker.php');
                        exit();
                    } else {
                        echo "<p>Data Gagal Disimpan</p>";
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>
