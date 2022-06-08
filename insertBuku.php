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

    $query = "INSERT into Buku(id_buku, Judul, Pengarang, Penerbit, Deskripsi)
         VALUES ('TI0000121', 'Buku ajar konsep dasar pemrograman website dengan php', 'Elgamar', 'null', 'null'),
                ('TI0000122', 'Aplikasi website profesional dengan PHP dan JQuery', 'Wardana S.Hut', 'Elex Media Komputindo', 'Menyajikan informasi bagaimana membuat aplikasi website yang profesional, canggih, dan berkelas. Bahasa pemrograman yang digunakan adalah PHP yang merupakan bahasa utama pembuatan aplikasi website, sedangkan untuk animasi dan teknologi ajax-nya menggunakan jQuery yang sudah terkenal kehebatannya, Buku ini disusun untuk memberikan informasi bagaimana memadukan kemampuan PHP dan jQuery, dari yang paling sederhana hingga canggih sehingga pembaca dapat dengan mudah memahami dan menguasai tentang bagaimana membuat aplikasi website'),
                ('TI0000123', 'Pemrograman web dengan php dan mysql', 'Achmad Solichin', 'null', 'null'),
                ('TI0000124', 'Ses Pemrograman web database php', 'Arief Ramadhan', 'null', 'null')";

    if(mysqli_query ($connect, $query)){
        echo "Data baru berhasil di tambahkan";
    } else {
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
