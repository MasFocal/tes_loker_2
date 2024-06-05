<?php 
    include "../koneksi.php";

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['id_perusahaan']) && isset($_SESSION['nama_perusahaan'])){
?>
<?php 
    }else{
        header("Location: ../index.php");
        exit();
    }
?>