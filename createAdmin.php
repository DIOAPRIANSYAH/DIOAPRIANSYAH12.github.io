<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "Database_Buku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MYSQL berhasil <br>";
    }else{
        echo "Koneksi ke MYSQL gagal".mysqli_connect_error();
    }

    $query = "CREATE TABLE admin(
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(20) NOT NULL,
        password VARCHAR(50) NOT NULL)";
    if(mysqli_query($connect, $query)){
        echo "Database berhasil di buat";
    }else{
        echo "Data gagal di buat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>
