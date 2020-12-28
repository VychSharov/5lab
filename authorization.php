<!DCOTYPE html>
	<?php require_once 'configDB.php';?>
	<html>

	<head>
		<meta charset=utf-8>
		<title>Авторизация</title>
		<link rel="stylesheet" type="text/css" href="style_au.css">
		<style type="text/css">
			body {
				background: url(css/backgrAu.jpg);
			}

		</style>

	</head>

	<body>
		<br>
		<a href="index.php">Главная</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<center>
			<h1>Авторизация</h1>
			<h3>
			<form class="form_box" action="login.php" method="POST">
				<label for="email">Email:</label>
				<br>
				<input class="input_email" type="email" name="email" required>
				<br>
				<label for="password">Password:</label>
				<br>
				<input type="password" name="password" required>
				<br><br>
				<button onclick="">Войти</button>
			</form>
			</h3>
		</center>
	</body>

	</html>
