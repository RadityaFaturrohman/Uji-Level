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

        $sql = "UPDATE data_buku SET Judul='$Judul', Genre='$Genre', Pengarang='$Pengarang', Penerbit='$Penerbit', Stock='$Stock', Status='$Status' WHERE Id_Buku ='$Id_Buku'";
        $query = mysqli_query($connect,$sql);

        if($query){
            header('location: index.php');
        }else{
            header('location: editdb.php?status=failed');
        }
    }
?>