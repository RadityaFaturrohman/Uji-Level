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

        $sql = "UPDATE data_siswa SET Nama_Siswa='$Nama_Siswa', Umur='$Umur', Gender='$Gender', Kelas='$Kelas', alamat='$alamat', Tgl_Pinjam='$Tgl_Pinjam' WHERE Id_Siswa ='$Id_Siswa'";
        $query = mysqli_query($connect,$sql);

        if($query){
            header('location: index.php');
        }else{
            header('location: editds.php?status=failed');
        }
    }
?>