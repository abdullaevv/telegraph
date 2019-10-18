<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Telegraph</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php require "../blocks/header.php" ?>
	<div class="container mt-4">
		<?php 
		        if($_COOKIE['user'] == ''):
		        ?>
		<div class="row">
			<div class="col">
				<h1>Форма регистрации</h1>
				<form action="php/check.php" method="post">
					<input class="form-control" id="login" name="login" placeholder="Введите логин" type="text"><br>
					<input class="form-control" id="name" name="name" placeholder="Введите имя" type="text"><br>
					<input class="form-control" id="pass" name="pass" placeholder="Введите пароль" type="password"><br>
					<button class="btn btn-success" type="submit">Зарегистрировать</button>
				</form>
			</div>
			<div class="col">
				<h1>Форма авторизации</h1>
				<form action="php/auth.php" method="post">
					<input class="form-control" id="login" name="login" placeholder="Введите логин" type="text"><br>
					<input class="form-control" id="pass" name="pass" placeholder="Введите пароль" type="password"><br>
					<button class="btn btn-success" type="submit">Авторизоваться</button>
				</form>
			</div><?php else: ?>
			<p>Привет <?=$_COOKIE['user']?>
			. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p><?php endif;?>
		</div>
		<?php require "../blocks/footer.php"?>
	</div>
</body>
</html>