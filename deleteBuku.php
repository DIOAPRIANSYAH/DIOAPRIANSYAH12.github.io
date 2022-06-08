<?php
    include "myconnection.php";

    $id = $_GET["id_buku"];

    $query = "DELETE FROM Buku WHERE id_buku = '$id'";

    if(mysqli_query($connect, $query)){
        header('Location:dataAdmin.php');
    } else {
        echo "Data gagal dihapus <br>". mysqli_error($connect);
    }
    mysqli_close();
?>