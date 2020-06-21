<!DOCTYPE html>
<html>
<head>
	<title>Entering</title>
	<link rel = "stylesheet" type="text/css" href="css/logincss.css">
</head>
<body>
	<header>
		<div class = "logotype">
			<a href="main_page.php">
				<img src="logo/book5.png" href="main_page.php">
			</a>	
		</div>
		<div class = "login">
			<h2>Log In</h2>
			<form method="post" action = "loginchecker.php">
				E-mail:
				<input type = "text" name = "loginemail">
				<br><br>
				Password:
				<input type = "text" name = "loginpassword">
				<br><br>
				<input type = "submit" name = "loginbutton" value = "Войти">
			</form>
		</div>
	</header>
</body>
</html>