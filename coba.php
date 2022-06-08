<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="coba.css">
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
        <div class="login-wrap">
	<div class="login-html">
        <h1 class="tab"" align="center"> SILAKAN LOGIN TERLEBIH DAHULU </H1> <br><br><br><br><br><br>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"> </label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
                <br>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
                <br><br>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					
				</div>
			</div>
            
				</div>
			</div>
            </form>
		</div>
	</div>
</div>