<?php
    include '../koneksi.php';

    if(isset($_POST['submit'])){
        $Id_Siswa = $_POST['Id_Siswa'];
        $Nama_Siswa = $_POST['Nama_Siswa'];
        $Umur = $_POST['Umur'];
        $Gender = $_POST['Gender'];
        $Kelas = $_POST['Kelas'];
        $alamat = $_POST['alamat'];
        $Tgl_Pinjam = $_POST['Tgl_Pinjam'];

        $sql = "INSERT INTO data_siswa VALUES ('$Id_Siswa','$Nama_Siswa','$Umur','$Gender','$Kelas','$alamat','$Tgl_Pinjam')";
        $query = mysqli_query($connect,$sql);

    if($query){
        header('location: index.php');
    }else{
        header('location: ssubmit.php?status=failed');
    }
    }
?>