<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA LOKER</title>
    <link rel="stylesheet" href="admin-style.css">
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
    <p></p>
    <form action="" method="GET">
        <label for="search" class="header">Cari Loker/Perusahaan :</label>
        <input type="text" id="search" name="search" placeholder="Masukkan Nama Loker/Perusahaan">
        <button type="submit" id="search-btn">Cari</button>
    </form>
    <p></p>
    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Nama Loker</th>
                <th>Detail</th>
            </tr>
            <?php
                $limit = 10;

                if (isset($_GET["page"])) {    
                    $page_number  = $_GET["page"];    
                }else{
                    $page_number=1;
                }

                $initial_page = ($page_number-1) * $limit; 
                
                $where = '';
                if(isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $where = " WHERE nama_loker LIKE '%$search%' OR nama_perusahaan LIKE '%$search%' OR daerah LIKE '%$search%'";
                } 
                $query=mysqli_query($konek_db, "SELECT * FROM iklan_loker $where LIMIT $initial_page, $limit");
                $id = $initial_page+0;
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
                            <td>".$data['nama_loker']." - ".$data['nama_perusahaan']."</td>
                            <td>
                            <div class='action'>
                                <button name='detail'>Detail</button>
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
        <div class="pagination">
                <?php 
                    $query2 = mysqli_query($konek_db, "SELECT COUNT(*) FROM iklan_loker");
                    $data2  = mysqli_fetch_row($query2);
                    
                    $total_rows = $data2[0];              
                    echo "</br>";            
                    // get the required number of pages
                    $total_pages = ceil($total_rows / $limit);     
                    $pageURL = "";

                    if($page_number>=2){
                        echo "<a href='list-loker.php?page=".($page_number-1)."'>  Prev </a>";
                    }

                    for($i=1; $i<=$total_pages; $i++){
                        if ($i == $page_number) {   
                            $pageURL .= "<a class = 'active' href='list-loker.php?page=".$i."'>".$i." </a>";   
                        }else{
                            $pageURL .= "<a href='list-loker.php?page=".$i."'>".$i." </a>";
                        }   
                    }

                    echo $pageURL;    
                    if($page_number<$total_pages){   
                        echo "<a href='list-loker.php?page=".($page_number+1)."'>  Next </a>";
                    } 
                ?>
            </div>
    </div>
    <p></p>
    <a href="index.php"><button id="btn-tambah">KEMBALI</button></a>
</body>
</html>