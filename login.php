<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/login/style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="contentlogin">
        <?php pesan(); ?>
        <p class="textlogin">login</p><hr>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username.." autofocus required="required">

			<label>Password</label>
			<input type="password" name="password" placeholder="Password.." required="required">

            <input type="submit" name="login" value="LOGIN">
            <a href="view_registration.php">Daftar</a>		
		</form>
	</div>
    
</body>
</html>