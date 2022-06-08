<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="container">
    <div class="header">
        <h1> TOKO BUKU XYZ </h1>
    </div>
    <h2>HASIL PENCARIAN BUKU</h2>
        <table>
            <tr>
                <th> id_buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
            </tr>
            <?php
            $Judul = $_GET["carinama"];
            include "myconnection.php";

            $query = "SELECT * FROM Buku WHERE Judul LIKE '%$Judul%'";
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
        <a href="homeCRUD.php">Kembali ke Home</a>
        <br><br>
        <div class="footer"><h3> HALAMAN HASIL PENCARIAN </h3></div>
        </div>
</body>
</html>