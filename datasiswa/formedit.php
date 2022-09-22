<?php
    include '../koneksi.php';

    $Id_Siswa = $_GET['Id_Siswa'];
    $sql = "SELECT * FROM data_siswa WHERE Id_Siswa ='$Id_Siswa'";
    $query = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)< 1){
        die("data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
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
        <p class="title3">Edit Data Siswa</p>
        <div class="form">
            <form action="editds.php" method="POST">
                <input type="hidden" name="Id_Siswa" value="<?php echo $data['Id_Siswa']?>"/>
                <p><label>Nama </label><label class="ltext2">:</label><input type="text" name="Nama_Siswa" value="<?php echo $data['Nama_Siswa']?>"/></label></p>
                <p><label>Umur </label><label class="ltext3">:</label><input type="number" name="Umur" value="<?php echo $data['Umur']?>"/></label></p>
                <p><label>Gender </label><label class="ltext4">:</label><select id="Gender" name="Gender" value="<?php echo $data['Gender']?>">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select></label></p>
                <p><label>Kelas </label> <label class="ltext5">:</label><select id="Kelas" name="Kelas" value="<?php echo $data['Kelas']?>">
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                </select></p></label></p>
                <p><label>Alamat </label><label class="ltext6">:</label><input type="text" name="alamat" required="required" placeholder="Dimana alamatmu?" value="<?php echo $data['alamat']?>"/></label></p>
                <p><label>Tanggal</label><label  class="ltext7">:</label><input type="date" name="Tgl_Pinjam" value="<?php echo $data['Tgl_Pinjam']?>"/></label></p>
                <input type="submit" name="submit" value="Submit" class="submit-btn">
            </form>
        </div>
    </div>

</body>
</html>