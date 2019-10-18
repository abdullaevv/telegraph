<div class="nav d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">	
	<h4 class="my-0 mr-md-auto font-weight-normal col-offset-5 text-white ">Telegraph</h4>
	<ion-icon src = '_ionicons_svg_md-quote.svg' ></ion-icon>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-white" href="/">Главная</a>
		<a class="p-2 text-white" href="../about.php">Контакты</a>
	</nav>
	<form class="form-inline mr-4">
    	<input class="form-control mr-sm-2" type="search" placeholder="Найти" aria-label="Search">
    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
  	</form>
	<?php 
		if ($_COOKIE['user'] == true):			
	?>
	<a class="btn btn-outline-primary" href="../entrance/exit.php">Кабинет пользователя</a>
	<?php else: ?>
	<a class="btn btn-outline-primary" href="../entrance/enter.php">Войти</a>
	<?php endif; ?>
</div>