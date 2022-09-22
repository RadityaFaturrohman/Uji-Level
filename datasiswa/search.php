<?php
    include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Book</title>

    <link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <div class="sidebar">
        <div class="logo">
            <img src="../img/icon.png" alt="" class="logo-img">
            <p>Home Book</p>
            <div class="line"></div>
        </div>

        <a href="index.php" class="actived"><i class="fa-solid fa-user"></i> Data Siswa <i class="fa-solid fa-chevron-right"></i></a>
        <a href="../databuku/index.php"><i class="fa-solid fa-book"></i></i> Data Buku <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <div class="main">
        <p class="title">Data Siswa</p>

        <a href="cdatasiswa.html"><button class="create-btn"><i class="fa-solid fa-plus"></i> Create</button></a>

        <div class="search">
            <form action="search.php" method="POST" class="search-box">
                <input type="text" name="search" placeholder="type something here..." required="required">
                    <button class="searchicon" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th><i class="fa-solid fa-id-card"></i> Id Siswa</th>
                    <th><i class="fa-solid fa-user"></i> Nama Siswa</th>
                    <th><i class="fa-solid fa-child"></i> Umur</th>
                    <th><i class="fa-solid fa-venus-mars"></i> Gender</th>
                    <th><i class="fa-solid fa-building"></i> Kelas</th>
                    <th><i class="fa-solid fa-house"></i> Alamat</th>
                    <th><i class="fa-solid fa-calendar-days"></i> Tanggal Pinjam</th>
                    <th><i class="fa-solid fa-pen-to-square"></i> Action</th>
                </tr>
                <?php

                    if(isset($_POST['search'])){
                        $search = $_POST['search'];

                        $sql = "SELECT * FROM data_siswa WHERE CONCAT(Id_Siswa, Nama_Siswa, Umur, Gender, Kelas, alamat, Tgl_Pinjam) LIKE'%$search%'";
                        $query = mysqli_query($connect,$sql);

                        while($data = mysqli_fetch_array($query)){
                            echo"
                                <tr>
                                <td>$data[Id_Siswa]</td>
                                <td>$data[Nama_Siswa]</td>
                                <td>$data[Umur]</td>
                                <td>$data[Gender]</td>
                                <td>$data[Kelas]</td>
                                <td>$data[alamat]</td>
                                <td>$data[Tgl_Pinjam]</td>
                                <td>
                                    <a href=formedit.php?Id_Siswa=".$data['Id_Siswa']."><button class='action-button'>Edit</button></a> |
                                    <a href=deleteds.php?Id_Siswa=".$data['Id_Siswa']."><button class='action-button'>Delete</button></a>
                                </td>
                            </tr>
                        ";}
                    }else{
                        echo"data tidak ditemukan";
                    }
                ?>
            </table>
        </div>
    </div>

</body>
</html>