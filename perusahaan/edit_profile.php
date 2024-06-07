<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PROFILE</title>
</head>
<body>
    <p>EDIT PROFILE</p>
    <?php 
        include"head.php";
        $id = null;
        $sql = mysqli_query ($konek_db, "SELECT * FROM perusahaan WHERE id_perusahaan='".$_SESSION['id_perusahaan']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <div>
        <form action="" method="POST">
            <input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan'] ?>">
            <!--
            <div class="cek">
                <?php include "uploader_foto.php"; ?>
            </div>
            -->
            <br>
            <div class="cek">
                <label id="label-gejala">Logo Perusahaan :</label>
                <?php echo $data['logo_perusahaan'] ?>
            </div>
            <div class="cek">
                <label id="label-gejala">Nama Perusahaan :</label>
                <input type="text" name="nama_perusahaan" value="<?php echo $data['nama_perusahaan'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Username :</label>
                <input type="text" name="username" value="<?php echo $data['username'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <input type="text" name="email" value="<?php echo $data['email'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <input type="text" name="no_hp_perusahaan" value="<?php echo $data['no_hp_perusahaan'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
                <textarea type='text' name='alamat_perusahaan' id='input-gejala' value="<?php echo $data['alamat_perusahaan'] ?>"required><?php echo $data['alamat_perusahaan'] ?></textarea>
            </div>
            <div class="cek">
                <label id="label-gejala">Deskripsi Perusahaan :</label>
                <textarea type='text' name='deskripsi_perusahaan' id='input-gejala' value="<?php echo $data['deskripsi_perusahaan'] ?>"required><?php echo $data['deskripsi_perusahaan'] ?></textarea>
            </div>
            <div class="cek">
                <label id="label-gejala">Daerah :</label>
                <input type="text" name="daerah" value="<?php echo $data['daerah'] ?>" id="input-gejala" required>
            </div>
            <p></p>
            <div class="btn">
                <button type="submit" name="simpan" id="btn-tambah">SIMPAN</button>
            </div>

            <?php
                if(isset($_POST['simpan'])){
                $id_perusahaan          = $_POST['id_perusahaan'];
                $logo_perusahaan        = $_POST['logo_perusahaan'];
                $nama_perusahaan        = $_POST['nama_perusahaan'];
                $username               = $_POST['username'];
                $email                  = $_POST['email'];
                $no_hp_perusahaan       = $_POST['no_hp_perusahaan'];
                $alamat_perusahaan      = $_POST['alamat_perusahaan'];
                $deskripsi_perusahaan   = $_POST['deskripsi_perusahaan'];
                $daerah                 = $_POST['daerah'];

                    $query="UPDATE `perusahaan` SET logo_perusahaan='$logo_perusahaan', nama_perusahaan='$nama_perusahaan', username='$username', email='$email', no_hp_perusahaan='$no_hp_perusahaan', alamat_perusahaan='$alamat_perusahaan', deskripsi_perusahaan='$deskripsi_perusahaan', daerah='$daerah' WHERE id_perusahaan='$id_perusahaan'";
                    $result=mysqli_query($konek_db, $query);
                    if ($result) {
                        header('location:profile.php');
                        exit();
                    } else {
                        $notif = "Data Gagal Disimpan";
                    }
                }
            ?>
        </form>
    </div>
    <br>
    <a href="profile.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>