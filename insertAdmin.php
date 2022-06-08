<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "Database_Buku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    } else {
        echo "Koneksi ke MySQL gagal".mysqli_connect_error();
    }
    
    $query = "INSERT into admin(username, password)
        VALUES ('admin', MD5('1234'))";

    if(mysqli_query ($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
