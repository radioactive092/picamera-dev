<?php include('action/login_action.php'); ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/login_style.css">
    </head>
    <body>
        <div class="loginBox">
			<img src="../pictures/avatar.png" class="user">
			<h2>Login</h2>
			<form action="" method="POST">
				<p>Username</p>
				<input type="text" name="username" placeholder="Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" name="submit" value="Login">
			</form>
		</div>
    </body>
</html>
