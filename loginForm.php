<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="stylelogin.css">
    </head>
    <body>
        <?php
            if (isset($_GET["error"])){
                $error = $_GET["error"];
            }
            else{
                $error = "";
            }
            $message = "";
            if ($error == "gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <p style ="color:red"><?php echo $message;?></p>
        <form action="prosesLogin.php" method="post">
            <div class="container">
            <div class="header"> <h1>TOKO BUKU XYZ</h1></div>
            <p><br></p>
            <p><br></p>
            <table align="center">
                <tr align="center">
                    <td>MOHON LOGIN TERLEBIH DAHULU</td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type ="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type ="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type ="submit" name="login" value="Login" a></a></td>
                </tr>
            </table>
            <p><br></p>
            <p><br></p>
            <div class="footer"><h3> HALAMAN LOGIN ADMINISTRATOR</h3>
            </div>
            </div>
        </form>
    </body>
</html>
