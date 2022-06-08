<html>
    <head>
        <title> HOME </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
        <div class="header"> <h1>TOKO BUKU XYZ </h1>
        <div class="a" align="right">
            <a href="homeCRUD.php">HOME</a>
            <a href="coba.php">LOGIN</a>
        </div>
        </div>
        <h2> SELAMAT DATANG DI TOKO BUKU XYZ </h2>
        <p><br></p>
        <form action="search.php" align="right" method="get">
        CARI JUDUL BUKU 
        <input type="text" name="carinama">
        <input type="submit" value="Cari">
        </form>
        <p><br></p>
        <table>
            <tr>
                <th> KODE BUKU </th>
                <th> JUDUL </th>
                <th> PENGARANG </th>
                <th> DETAIL </th>
            </tr>
            <?php
           
                include "myconnection.php";
                
                $query = "SELECT * FROM Buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                
            ?>
            <tr>
                <td> <?php echo $row ["id_buku"]; ?> </td>
                <td> <?php echo $row ["Judul"]; ?> </td>
                <td> <?php echo $row ["Pengarang"]; ?> </td>
                <td>
                <a href="detailBuku.php?id_buku=<?php echo $row["id_buku"];?>">
                <button>Detail</button></a>
                </td>

            </tr>
            
            <?php            
                    }
                }else{
                    echo "0 results";
                }
            ?>
            
        </table>
        <p><br></p>
        <div class="footer"> <h3>WELLCOME FOOTER</h3></div>
        </div>
    </body>
</html>
