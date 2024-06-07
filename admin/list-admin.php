<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
    ?>
    <p>DATA ADMIN</p>
    <a href="tambah_admin.php"><button id="btn-tambah">TAMBAH ADMIN</button></a>
    <form action="" method="GET">
        <input type="text" id="search" name="search" placeholder="Masukkan Nama Admin/Username">
        <button type="submit" id="search-btn">Cari</button>
    </form>
    <p></p>
    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Username</th>
            </tr>
            <?php
            $where = '';
                if(isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $where = " WHERE nama_admin LIKE '%$search%' OR username LIKE '%$search%'";
                } 
                $query=mysqli_query($konek_db, "SELECT * FROM admin".$where);
                $id = 0;
                $hitung = mysqli_num_rows($query);
                if ($hitung == 0){
                    echo "<script type = 'text/javascript'> alert ('Data Tidak Ditemukan') </script>";
                }
                while ($data = mysqli_fetch_array($query)){
            ?>
            <form action="" method="POST">
                <input type="hidden" name="id_admin" value="<?= $data[0] ?>">
                <tr>
                    <?php
                        $id++;
                        echo "
                            <td>".$id."</td>
                            <td>".$data[1]."</td>
                            <td>".$data[2]."</td>
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