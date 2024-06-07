<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Perusahaan</title>
</head>
<body>
    <?php
        include "head.php";
        $id = null;

        if (isset($_POST['detail'])) {
            $id = $_POST['id_perusahaan'];
        }

        $sql = mysqli_query ($konek_db, "SELECT * FROM perusahaan WHERE id_perusahaan='".$_GET['id']."'");
        $data = mysqli_fetch_array ($sql);

    ?>
    <div class="container">
        <p class="judul">DETAIL PERUSAHAAN</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID Perusahaan :</label>
                <input type='text' name='idperusahaan' id='input-gejala' readonly value='<?php echo $data['id_perusahaan'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Nama Perusahaan :</label>
                <input type='text' name='nama' id='input-gejala' readonly value='<?php echo $data['nama_perusahaan'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Alamat Perusahaan :</label>
                <textarea name='alamat' id='input-gejala' readonly value='<?php echo $data['alamat_perusahaan'] ?>'><?php echo $data['alamat_perusahaan'] ?></textarea>
            </li>
            <li class="list-form">
                <label id="label-gejala">Deskripsi Perusahaan :</label>
                <textarea name='alamat' id='input-gejala' readonly value='<?php echo $data['deskripsi_perusahaan'] ?>'><?php echo $data['deskripsi_perusahaan'] ?></textarea>
            </li>
            <li class="list-form">
                <label id="label-gejala">Daerah :</label>
                <input type='text' name='daerah' id='input-gejala' readonly value='<?php echo $data['daerah'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">No HP :</label>
                <input type='text' name='no_hp_perusahaan' id='input-gejala' readonly value='<?php echo $data['no_hp_perusahaan'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Email :</label>
                <input type='text' name='email' id='input-gejala' readonly value='<?php echo $data['email'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Username :</label>
                <input type='text' name='username' id='input-gejala' readonly value='<?php echo $data['username'] ?>'>
            </li>
        </form>
    </div>
    <p></p>
    <a href="list-perusahaan.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>