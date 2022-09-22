<?php
    include '../koneksi.php';

    $Id_Buku = $_GET['Id_Buku'];
    $sql = "SELECT * FROM data_buku WHERE Id_Buku ='$Id_Buku'";
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

        <a href="../datasiswa/index.php"><i class="fa-solid fa-user"></i> Data Siswa <i class="fa-solid fa-chevron-right"></i></a>
        <a href="index.php" class="actived"><i class="fa-solid fa-book"></i></i> Data Buku <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <div class="main">
        <p class="title3">Edit Data Buku</p>
        <div class="form">
            <form action="editdb.php" method="POST">
                <input type="hidden" name="Id_Buku" value="<?php echo $data['Id_Buku']?>"/>
                <p><label>Judul </label><label class="ltext2">:</label><input type="text" name="Judul" value="<?php echo $data['Judul']?>"/></p>
                <p><label>Genre </label><label class="ltext3">:</label><input type="text" name="Genre" value="<?php echo $data['Genre']?>"/></label></p>
                <p><label>Pengarang </label><label class="ltext4">:</label><input type="text" name="Pengarang" value="<?php echo $data['Pengarang']?>"></label></p>
                <p><label>Penerbit </label><label class="ltext5">:</label><input type="text" name="Penerbit" value="<?php echo $data['Penerbit']?>"></label></p>
                <p><label>Stock </label><label class="ltext6">:</label><input type="number" name="Stock" value="<?php echo $data['Stock']?>"></label></p>
                <p><label>Status </label> <label class="ltext7">:</label><select id="Status" name="Status" value="<?php echo $data['Status']?>">
                    <option>Ada</option>
                    <option>Dipinjam</option>
                </select></p>
                <input type="submit" name="submit" value="Submit" class="submit-btn">
            </form>
        </div>
    </div>

</body>
</html>