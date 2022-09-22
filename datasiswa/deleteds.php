<?php
    include '../koneksi.php';

    if(isset($_GET['Id_Siswa'])){
        header('location: index.php');
    }

    $Id_Siswa = $_GET['Id_Siswa'];

    $sql ="DELETE FROM data_siswa WHERE Id_Siswa='$Id_Siswa'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header('location: index.php');
    }else{
        header('location: deleteds.php?status=failed');
    }
?>