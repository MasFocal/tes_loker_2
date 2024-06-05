<?php 
    include "../koneksi.php";

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['id_user']) && isset($_SESSION['nama_user'])){
?>
<?php 
    }else{
        header("Location: ../index.php");
        exit();
    }
?>