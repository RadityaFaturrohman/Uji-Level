<?php
    include '../koneksi.php';

    if(isset($_GET['Id_Buku'])){
        header('location: index.php');
    }

    $Id_Buku = $_GET['Id_Buku'];

    $sql ="DELETE FROM data_buku WHERE Id_Buku='$Id_Buku'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header('location: index.php');
    }else{
        header('location: delete.php?status=failed');
    }
?>