<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA LOKER</title>
    <link rel="stylesheet" href="../admin/admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
        if(isset($_POST["detail"])) {
            $id = $_POST["id_user"];
            header("location: detail_pelamar.php?id=".$id."");
        }
    ?>
    <p>DATA PELAMAR</p>
    <p></p>
    <form action="" method="GET">
        <label for="search" class="header">Cari Loker/Pelamar :</label>
        <input type="text" id="search" name="search" placeholder="Masukkan Nama Loker/Pelamar">
        <button type="submit" id="search-btn">Cari</button>
    </form>
    <p></p>
    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Nama Loker</th>
                <th>Pelamar</th>
                <th>Detail</th>
            </tr>
            <?php
                //$query=mysqli_query($konek_db, "SELECT iklan_loker.*, perusahaan.nama_perusahaan FROM iklan_loker INNER JOIN perusahaan ON iklan_loker.id_perusahaan = perusahaan.id_perusahaan WHERE iklan_loker.id_perusahaan = '".$_SESSION['id_perusahaan']."'");
                $query=mysqli_query($konek_db, "SELECT * FROM pelamar WHERE nama_perusahaan = '".$_SESSION['nama_perusahaan']."'");
                $id = 0;
                while ($data = mysqli_fetch_array($query)){
            ?>
            <form action="" method="POST">
            <input type="hidden" name="id_user" value="<?= $data[0] ?>">
                <tr>
                    <?php
                        $id++;
                        echo "
                            <td>".$id."</td>
                            <td>".$data['nama_loker']."</td>
                            <td>".$data['nama_user']."</td>
                            <td>
                            <div class='action'>
                                <a href=\"detail_pelamar.php?nama=".$data['nama_user']."\"><button name='detail'>Detail</button></a>
                            </div>  
                        </td>
                        ";
                    ?>
                </tr>
            </form>
            <?php
                }
            ?>
        </table>
    </div>
    <p></p>
    <a href="index.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>