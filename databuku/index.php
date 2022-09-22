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

        <a href="../datasiswa/index.php"><i class="fa-solid fa-user"></i> Data Siswa <i class="fa-solid fa-chevron-right"></i></a>
        <a href="index.php" class="actived"><i class="fa-solid fa-book"></i></i> Data Buku <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <div class="main">
        <p class="title">Data Buku</p>
        
        <a href="cdatabuku.html"><button class="create-btn"><i class="fa-solid fa-plus"></i> Create</button></a>
        
        <div class="search">
            <form action="search.php" method="POST" class="search-box">
                <input type="text" name="search" placeholder="type something here..." required="required">
                    <button class="searchicon" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th><i class="fa-solid fa-list"></i> Id Buku</th>
                    <th><i class="fa-solid fa-book"></i> Judul</th>
                    <th><i class="fa-solid fa-bookmark"></i> Genre</th>
                    <th><i class="fa-solid fa-user"></i> Pengarang</th>
                    <th><i class="fa-solid fa-users"></i> Penerbit</th>
                    <th><i class="fa-solid fa-box"></i> Stock</th>
                    <th><i class="fa-solid fa-check-to-slot"></i> Status</th>
                    <th><i class="fa-solid fa-pen-to-square"></i> Action</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM data_buku";
                    $query = mysqli_query($connect, $sql);

                    while($data = mysqli_fetch_array($query)){
                        echo"
                            <tr>
                                <td>$data[Id_Buku]</td>
                                <td>$data[Judul]</td>
                                <td>$data[Genre]</td>
                                <td>$data[Pengarang]</td>
                                <td>$data[Penerbit]</td>
                                <td>$data[Stock]</td>
                                <td>$data[Status]</td>
                                <td>
                                    <a href=formedit.php?Id_Buku=".$data['Id_Buku']."><button class='action-button'>Edit</button></a></a> |
                                    <a href=delete.php?Id_Buku=".$data['Id_Buku']."><button class='action-button'>Delete</button></a></a>
                                </td>
                            </tr>
                    ";}
                ?>
            </table>
        </div>
    </div>

</body>
</html>