<?php
    
    include "myconnection.php";

    $username = $_GET["myusername"];
    $password = $_GET["mypassword"];
    
    $query = "INSERT INTO admin (username, password) VALUES ('$username', MD5('$password'))";
    if(mysqli_query($connect, $query)){
        header("Location:coba.php");
    } else {
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>