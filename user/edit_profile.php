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
        $sql = mysqli_query ($konek_db, "SELECT * FROM user where id_user='".$_SESSION['id_user']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <div>
        <form action="" method="POST">
            <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
            <div class="cek">
                <?php include "uploader_foto.php"; ?>
            </div>
            <br>
            <div class="cek">
                <label id="label-gejala">Foto :</label>
                <?php echo $data['foto'] ?>
            </div>
            <div class="cek">
                <label id="label-gejala">Nama :</label>
                <input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Username :</label>
                <input type="text" name="username" value="<?php echo $data['username'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <input type="text" name="usia" value="<?php echo $data['usia'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label for="tanggal">Tanggal Lahir :</label>
                <input type="date" id="input-gejala" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" required>

                <!--
                <label id="label-gejala">Tanggal Lahir :</label>
                <input type="text" name="tanggal_lahir" value="<?php // echo $data['tanggal_lahir'] ?>" id="input-gejala" required>
                -->
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <div class="radio-input">
                    <input type='radio' name='jeniskelamin' id='input-gejala-2' value='Laki Laki' <?php if($data['jeniskelamin'] == 'Laki Laki') echo 'checked'; ?> required>Laki Laki
                </div>
                <div class="radio-input">
                    <input type='radio' name='jeniskelamin' id='input-gejala-2' value='Perempuan' <?php if($data['jeniskelamin'] == 'Perempuan') echo 'checked'; ?> required>Perempuan
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <input type="text" name="email" value="<?php echo $data['email'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <input type="text" name="no_hp_user" value="<?php echo $data['no_hp_user'] ?>" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
            <textarea type='text' name='alamat_user' id='input-gejala' value="<?php echo $data['alamat_user'] ?>"required><?php echo $data['alamat_user'] ?></textarea>
            </div>
            <p></p>
            <div class="btn">
                <a href="profile.php"><button type="submit" name="simpan" id="btn-tambah">SIMPAN</button></a>
            </div>

            <?php
                if(isset($_POST['simpan'])){
                $id_user        = $_POST['id_user'];
                $nama_user      = $_POST['nama_user'];
                $username       = $_POST['username'];
                $usia           = $_POST['usia'];
                $tanggal_lahir  = $_POST['tanggal_lahir'];
                $jeniskelamin   = $_POST['jeniskelamin'];
                $email          = $_POST['email'];
                $no_hp_user     = $_POST['no_hp_user'];
                $alamat_user    = $_POST['alamat_user'];

                    $query="UPDATE `user` SET nama_user='$nama_user', username='$username', usia='$usia', tanggal_lahir='$tanggal_lahir', jeniskelamin='$jeniskelamin', email='$email', no_hp_user='$no_hp_user', alamat_user='$alamat_user' WHERE id_user='$id_user'";
                    $result=mysqli_query($konek_db, $query);
                    //if($result){
                        //echo "$nama";
                    //}

                    if ($result) {
                        header('location:profile.php');
                        exit();
                    } else {
                        $notif = "Data Gagal Disimpan";
                    }
                //if($result) header('location:profile.php');
                //else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
    <br>
    <a href="profile.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>