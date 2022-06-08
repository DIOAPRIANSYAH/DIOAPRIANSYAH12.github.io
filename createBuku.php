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

    $query = "CREATE TABLE Buku(
        id_buku VARCHAR(10) PRIMARY KEY,
        Judul VARCHAR(200) NOT NULL,
        Pengarang VARCHAR(100) NOT NULL,
        Penerbit VARCHAR(50),
        Deskripsi Text)";
    if(mysqli_query($connect, $query)){
        echo "Database berhasil di buat";
    }else{
        echo "Data gagal di buat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>
