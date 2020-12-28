<!DCOTYPE html>
	<html>

	<head>
		<meta charset=utf-8>
		<title>Регистрация</title>
		<link rel="stylesheet" type="text/css" href="style_reg.css">
		<style type="text/css">
			body {
				background: url(css/backgrReg.jpg);
			}

		</style>
	</head>

	<body>

		<?php
		
		$error_name = '';
		$error_email = '';
		$error_password = '';
		
		$name_none = '';
		$email_none = '';
		$password_none = '';
		
		if(empty($_POST[name])){
			$error_name="<p class='error'>Не введён логин</p>";
			$name_none = 'none';
		}
		if(empty($_POST[email]) || filter_var($_POST[email], FILTER_VALIDATE_EMAIL)==false){
			$error_email="<p class='error'>Не введён email</p>";
			$email_none = 'none';
		}
		if(empty($_POST[password])){
			$error_password="<p class='error'>Не введён пароль</p>";
			$password_none = 'none';
		}
		
		
$host = 'localhost';
$database = 'my_db';
$user = 'root';
$password = 'root';

$link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));



		$query = '';
		$true = '';
		
    if(!empty($_POST['name'] && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==true && !empty($_POST['password']))){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sumbit= $_POST['sumbit'];
		$query = "INSERT INTO users VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['password']}')";
		
		mysqli_query($link, $query)
        or die("Ошибка " . mysqli_error($link));
		
		mysqli_close($link);
	}


		if ($result)
		{
			$true="<p class='ture'>Регистрация завершена успешно!</p>";
		}
?>

		<br>
		<a href="index.php">Главная</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<center>
			<h1>Регистрационная форма</h1>
			<h3>
				<form class="form_box" action="registration.php" method="POST">
					<label for="name">Name:</label>
					<br>
					<input type="text" name="name" required>
					<br>
					<label for="email">Email:</label>
					<br>
					<input class="input_email" type="email" name="email" required>
					<br>
					<label for="password">Password:</label>
					<br>
					<input type="password" name="password" required>
					<br><br>
					<button onclick="">Зарегистрироваться</button>
				</form>
				<?php if($result):?>
				<p class='true'>Регистрация завершена успешно!</p>
				<?php endif;?>
			</h3>
		</center>
	</body>

	</html>
