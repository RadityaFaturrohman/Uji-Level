<?php
    include '../koneksi.php';

    if(isset($_POST['submit'])){
        $Id_Buku = $_POST['Id_Buku'];
        $Judul = $_POST['Judul'];
        $Genre = $_POST['Genre'];
        $Pengarang = $_POST['Pengarang'];
        $Penerbit = $_POST['Penerbit'];
        $Stock = $_POST['Stock'];
        $Status = $_POST['Status'];

        $sql = "INSERT INTO data_buku VALUES ('$Id_Buku','$Judul','$Genre','$Pengarang','$Penerbit','$Stock','$Status')";
        $query = mysqli_query($connect,$sql);

    if($query){
        header('location: index.php');
    }else{
        header('location: submit.php?status=failed');
    }
    }
?>