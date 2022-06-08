<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
    <div class="header">
    <h1> Toko Buku XYZ</h1>
    <div class="a" align="right">
    <a href="dataAdmin.php">CRUD</a>
    <a href="loginForm.php">logout</a>
    </div>
    </div>
    <h2>Selamat Datang Administrator </h2>
    <br>
    <div class="a">
    <h4><a href="tambahBuku.html"><button>Tambah Data</button></a></h4>
    </div>
    <br>   
    <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
                
            </tr>
            <?php
            include "myconnection.php";
            $query = "SELECT * FROM buku";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["id_buku"]; ?></td>
                <td><?php echo $row["Judul"]; ?></td>
                <td><?php echo $row["Pengarang"]; ?></td>
                <td> 
                    <a href="detailBuku.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Detail</button></a>
                    <a href="editBuku.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Edit</button></a>
                    <a href="deleteBuku.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Delete</button></a>
                </td>
                
                </tr>
            <?php
                }
            }else {
                echo "0 result";
            }
            ?>

        </table>
        <br>
        <div class="footer">
            <h3> HALAMAN ADMINISTRATOR </h3>
        </div>
        </div>
</body>
</html>

