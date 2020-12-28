<?php
require_once 'configDB.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query = '';

if(!empty($_POST[email]) && filter_var($_POST[email], FILTER_VALIDATE_EMAIL)==true && !empty($_POST[password])) {


$_POST[email] = mysqli_real_escape_string($link, $_POST[email]);


$query = "SELECT * FROM users WHERE email='{$_POST[email]}'";
$res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if(!empty($res)){
for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

if ($_POST[password] == $data[0][password]){
$s='<p style="color:green;">Добро пожаловать, %s!</p>';
printf($s, $data[0][name]) ;
} else{
echo "<p style='color:red;'>Неверный логин или пароль!</p>";
}
}





print_r($res->password);



}
mysqli_close($link);
?>
