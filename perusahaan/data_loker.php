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
            header("location: detail_loker.php?id=".$id."");
        }
    ?>
    <p>DATA LOKER</p>
    <a href="tambah_loker.php"><button id="btn-tambah">TAMBAH LOKER</button></a>
    <p></p>
    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Nama Loker</th>
                <th>Detail</th>
            </tr>
            <?php
                $query=mysqli_query($konek_db, "SELECT iklan_loker.*, perusahaan.nama_perusahaan FROM iklan_loker INNER JOIN perusahaan ON iklan_loker.nama_perusahaan = perusahaan.nama_perusahaan WHERE iklan_loker.nama_perusahaan = '".$_SESSION['nama_perusahaan']."'");
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
                            <td>
                            <div class='action'>
                                <a href=\"detail_loker.php?nama=".$data['nama_loker']."\"><button name='detail'>Detail</button></a>
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