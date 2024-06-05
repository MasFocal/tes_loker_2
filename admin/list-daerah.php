<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data DAERAH</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_daerah"];
            mysqli_query($konek_db, "DELETE FROM `daerah` WHERE `id_daerah`='$id'");
        }
    ?>
    <p>DATA DAERAH</p>
    <a href="tambah_daerah.php"><button id="btn-tambah">TAMBAH DAERAH</button></a>
    <p></p>
    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Nama Provinsi</th>
                <th>Nama Kabupaten/Kota</th>
                <th>Detail</th>
            </tr>
            <?php
                $query=mysqli_query($konek_db, "SELECT * FROM daerah WHERE 1");
                $id = 0;
                while ($data = mysqli_fetch_array($query)){
            ?>
            <form action="" method="POST">
            <input type="hidden" name="id_daerah" value="<?= $data[0] ?>">
                <tr>
                    <?php
                        $id++;
                        echo "
                            <td>".$id."</td>
                            <td>".$data[1]."</td>
                            <td>".$data[2]."</td>
                            <td>
                                <div class='action'>
                                    <button name='hapus'>Hapus</button>
                                </div>
                            </td>
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