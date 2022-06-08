<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "Koneksi ke MYSQL berhasil <br>";
    }else{
        echo "Koneksi ke MYSQL gagal".mysqli_connect_error();
    }

    $query = "CREATE DATABASE Database_Buku";
    if(mysqli_query($connect, $query)){
        echo "Database berhasil di buat";
    }else{
        echo "Data gagal di buat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>
