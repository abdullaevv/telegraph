<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);	
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);

	$pass = md5($pass);

	$mysqli = new mysqli('localhost', 'root', '', 'registration');

	$result = $mysqli->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if($result->num_rows == 0) {
		echo "Такой пользователь не найден<br>";
		exit();
	} 
	setcookie('user', $user['name'], time() + 3600, "/");

	$mysqli->close();
	header('Location: /')
	//Array ( [id] => 5 [name] => Гаджиv [login] => Гаджи [pass] => 202cb962ac59075b964b07152d234b70 )
?>	