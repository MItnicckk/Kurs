<?php
ob_start();
session_set_cookie_params(30);
if (isset($_COOKIE['counter'])) { 
setcookie("counter", $_COOKIE['counter']+1); 
setcookie("lasttime", time()); 
} else { 
setcookie("counter", 1); 
setcookie("lasttime", time()); 
echo 'Добро пожаловать!'; 
} 
ob_end_flush();
?>
<html lang="en">
<head>
		<title>Книги</title>
</head>
<meta charset="UTF-8">
	<link rel="stylesheet" href="static/css/style.css">
<body style = "background-image: url(static/Фон.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100%" >
<header>		
	<div class="logo">
				<svg  width="80" height="75" viewBox="0 0 0 0">
				</svg>
		</div>
		<nav>
			<ul class="menu__nav">
				<li><a href="index.php">Главная</a></li>
				<li><a href="1 laba.php">Просмотр</a></li>
				<li><a href="3 laba.php">Вход</a></li>
				<li><a href="2 laba.php">Регистрация</a></li>
				<li><a href="iniTestphp.php">Тест</a></li>
			</ul>
		</nav>
</header>
</body>
	<div class="DSTU"><img src="static/DGTU1.png"></div>
	<div class = "Text">
		<?php
		echo '<br>';
		echo 'Вы заходили в библиотеку ' . $_COOKIE['counter'] . ' раз<br>'; 
		echo 'Последнее посещение ' . date("d-m-Y H:i:s", $_COOKIE['lasttime']);
		echo '<br>';
		echo 'Список посещенных страниц: ' . $_SESSION["pth"] . '<br>';
		?>
	</div>
</html>