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
        $sql = mysqli_query ($konek_db, "SELECT * FROM perusahaan where nama_perusahaan='".$_SESSION['nama_perusahaan']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <p>TAMBAH LOKER</p>
    <a href="data_loker.php"><button id="btn-tambah">KEMBALI</button></a>
    <p></p>
    <div class="container">
        <form action="" method="POST">
            <p>MET DATANG <?php echo $_SESSION['nama_perusahaan']; ?></p>
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
                if(isset($_POST['simpan'])){
                    $nama_loker                 = $_POST['nama_loker'];
                    $deskripsi                  = $_POST['deskripsi'];
                    $daerah                     = $_POST['daerah'];
                    $data['nama_perusahaan']    = $_POST['nama_perusahaan'];

                $query="INSERT INTO `iklan_loker`(`nama_loker`, `nama_perusahaan`, `deskripsi`, `daerah`) VALUES ('$nama_loker', '$nama_perusahaan','$deskripsi', '$daerah')";
                $result=mysqli_query($konek_db, $query);
                    
                if ($result) {
                    header('location:data_loker.php');
                    exit();
                } else {
                    $notif = "Data Gagal Disimpan";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>