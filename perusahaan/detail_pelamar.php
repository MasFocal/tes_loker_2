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
        if(isset($_POST["kembali"])) {
            header("location: data_pelamar.php");
        }
        $sql = mysqli_query($konek_db, "SELECT * FROM pelamar WHERE id_pelamar='" . $_GET['id'] . "'");
        $data = mysqli_fetch_array($sql);
    ?>
    <div>
        <form action="" method="POST">
            <label id="label-gejala">Nama Loker :</label>
            <?php echo $data ? $data['nama_loker'] . " - " . $data['nama_perusahaan'] : "Data loker tidak ditemukan."; ?>
            <p></p>
            <label id="label-gejala">Foto :</label>
            <?php echo $data['foto']; ?>
            <br>
            <label id="label-gejala">Nama Pelamar :</label>
            <?php echo $data['nama_user']; ?>
            <br>
            <label id="label-gejala">Posisi Pekerjaan :</label>
            <?php echo $data['nama_loker']; ?>
            <br>
            <label id="label-gejala">Usia :</label>
            <?php echo $data['usia']; ?>
            <br>
            <label id="label-gejala">Tanggal Lahir :</label>
            <?php echo $data['tanggal_lahir']; ?>
            <br>
            <label id="label-gejala">Jenis Kelamin :</label>
            <?php echo $data['jeniskelamin']; ?>
            <br>
            <label id="label-gejala">Alamat :</label>
            <?php echo $data['alamat_user']; ?>
            <br>
            <label id="label-gejala">Email :</label>
            <?php echo $data['email']; ?>
            <br>
            <label id="label-gejala">No HP :</label>
            <?php echo $data['no_hp_user']; ?>
            <br>
            <label id="label-gejala">File CV :</label>
            <?php echo $data['file_cv']; ?>
            <p></p>
            <input type="hidden" name="id_user" value="<?= $data[0] ?>">
            <button type="button" onclick="window.location.href='https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo $data['email']; ?>&su=Job%20Application%20-%20<?php echo $data['nama_loker']; ?>%20<?php echo $data['nama_perusahaan']; ?>&body=Kepada%20<?php echo $data['nama_user']; ?>,'">HUBUNGI</button>
            <button type="submit" name="kembali">KEMBALI</button>
        </form>
    </div>
</body>
</html>
