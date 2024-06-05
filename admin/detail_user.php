<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail User</title>
</head>
<body>
    <?php
        include "head.php";
        $id = null;

        if (isset($_POST['detail'])) {
            $id = $_POST['id_user'];
        }

        $sql = mysqli_query ($konek_db, "SELECT * FROM user WHERE id_user='".$_GET['id']."'");
        $data = mysqli_fetch_array ($sql);

    ?>
    <div class="container">
        <p class="judul">DETAIL USER</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID User :</label>
                <input type='text' name='iduser' id='input-gejala' readonly value='<?php echo $data['id_user'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Nama :</label>
                <input type='text' name='nama' id='input-gejala' readonly value='<?php echo $data['nama_user'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Usia :</label>
                <input type='text' name='umur' id='input-gejala' readonly value='<?php echo $data['usia'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Tanggal Lahir :</label>
                <input type='text' name='tanggal_lahir' id='input-gejala' readonly value='<?php echo $data['tanggal_lahir'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Alamat :</label>
                <textarea name='alamat' id='input-gejala' readonly value='<?php echo $data['alamat_user'] ?>'><?php echo $data['alamat_user'] ?></textarea>
            </li>
            <li class="list-form">
                <label id="label-gejala">Daerah :</label>
                <input type='text' name='daerah' id='input-gejala' readonly value='<?php echo $data['daerah'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">No HP :</label>
                <input type='text' name='no_hp_user' id='input-gejala' readonly value='<?php echo $data['no_hp_user'] ?>'>
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
    <a href="list-user.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>