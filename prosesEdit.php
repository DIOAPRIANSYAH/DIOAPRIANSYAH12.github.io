<?php
    
    include "myconnection.php";

    $id = $_GET["myid"];
    $judul = $_GET["myname"];
    $pengarang = $_GET["mypengarang"];
    $penerbit = $_GET["mypenerbit"];
    $deskripsi = $_GET["mydes"];
    
    $query = "UPDATE Buku SET Judul='$judul', Pengarang='$pengarang', Penerbit='$penerbit', Deskripsi='$deskripsi' WHERE id_buku = '$id'";

    if(mysqli_query($connect, $query)){
        header("Location:dataAdmin.php");
    } else {
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>