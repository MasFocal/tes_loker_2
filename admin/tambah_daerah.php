<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DAERAH</title>
</head>
<body>
    <?php 
        include "head.php";
    ?>
    <p class="judul">TAMBAH DAERAH</p>
    <a href="list-daerah.php"><button id="btn-tambah">KEMBALI</button></a>
    <p></p>
    <div class="container">
        <form action="" method="POST">
                <label id="label-gejala">Pilih Provinsi :</label>
                <select name="nama_provinsi" id="">
                    <option value="">---PILIH---</option>
                    <?php
                        $query1= mysqli_query($konek_db, "SELECT * FROM provinsi WHERE 1");
                        while($hasil=mysqli_fetch_array($query1))
                        {
                            echo "<option value='".$hasil['nama_provinsi']."' required> ".$hasil['nama_provinsi']." </option>";
                        }
                    ?>
                </select>
                <br><br>
                <label for="">Jenis Daerah : </label>
                <label>
                    <input type="radio" name="jenis_daerah" id="input-gejala" value="Kabupaten">Kabupaten
                </label>
                <label>
                    <input type="radio" name="jenis_daerah" id="input-gejala" value="Kota">Kota
                </label>
                <br><br>
                <label id="label-gejala">Nama Kabupaten/Kota :</label>
                <input type="text" name="kab_kota" id="input-gejala" required>
                <p></p>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            
            <?php
                if (isset($_POST['simpan'])) {
                    $jenis_daerah   = $_POST['jenis_daerah'];
                    $nama_daerah    = $_POST['kab_kota'];
                    $provinsi       = $_POST['nama_provinsi'];

                    $hasil_gabungan = $jenis_daerah . ' ' . $nama_daerah;

                    $cekEmail = mysqli_query($konek_db, "SELECT * FROM `daerah` WHERE `kab_kota` = '$hasil_gabungan'");

                    if (mysqli_num_rows($cekEmail) > 0) {
                        echo ("
                            <script LANGUAGE='JavaScript'>
                            window.alert('Kabupaten/Kota Sudah Terdaftar');
                            window.location.href='tambah_daerah.php';
                            </script>
                        ");
                        exit();
                    } else {
                        $query = "INSERT INTO `daerah`(`nama_provinsi`, `kab_kota`) VALUES ('$provinsi', '$hasil_gabungan')";
                        $result = mysqli_query($konek_db, $query);

                        if ($result) {
                            header('location:list-daerah.php');
                            exit();
                        } else {
                            echo "Data Gagal Disimpan";
                        }
                    }
                }
            ?>

        </form>
    </div>
</body>
</html>