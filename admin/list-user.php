<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php 
        include "head.php";
        if(isset($_POST["detail"])) {
            $id = $_POST["id_user"];
            header("location: detail_user.php?id=".$id."");
        }
    ?>
    <p>DATA USER</p>
    <p></p>
    <form action="" method="GET">
        <input type="text" id="search" name="search" placeholder="Masukkan Nama User">
        <button type="submit" id="search-btn">Cari</button>
    </form>
    <p></p>
    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Detail</th>
            </tr>
            <?php
                $where = '';
                if(isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $where = " WHERE nama_user LIKE '%$search%' OR username LIKE '%$search%'";
                } 
                $query=mysqli_query($konek_db, "SELECT * FROM user".$where);
                $id = 0;
                $hitung = mysqli_num_rows($query);
                if ($hitung == 0){
                    echo "<script type = 'text/javascript'> alert ('Data Kosong!!') </script>";
                }
                while ($data = mysqli_fetch_array($query)){
            ?>
            <form action="" method="POST">
            <input type="hidden" name="id_user" value="<?= $data[0] ?>">
                <tr>
                    <?php
                        $id++;
                        echo "
                            <td>".$id."</td>
                            <td>".$data['nama_user']."</td>
                            <td>".$data['username']."</td>
                            <td>
                            <div class='action'>
                               <button name='detail'>Detail</button>
                               <button name=''>HAPUS</button>
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