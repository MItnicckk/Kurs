<?php
session_start();
$_SESSION["pth"] .= 'index.php-';
$pth = explode("-", $_SESSION["pth"]);
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
	  <?php
	  $id = opendir(getcwd() . "/css");
  	  while ($cat = readdir()) {
      if ($cat != '.' && $cat != '..')
      echo '<link rel="stylesheet" href="css/' . $cat . '">' . "\r\n";
  }
  ?>
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
				<li><a href="Class.php">Class</a></li>
    	  	  	<!-- <li><a href="catalog.php">ИЗО</a></li> -->
				<!-- <li><a href="dis.php">Дизайн</a></li> -->
				<!-- <li><a href="1 laba.php">View</a></li> -->
				<li><a href="view.php">Просмотр</a></li>
				<li><a href="Registr.php">Регистрация</a></li>
				<li><a href="Log.php">Вход</a></li>
			<!-- 	<li><a href="iniTestphp.php">Тест</a></li> -->
			</ul>
		</nav>
</header>
</body>
	<div class="DSTU"><img src="static/DGTU1.png"></div>
	<div class = "Text">
		<?php
		$a = 123;
		echo $a;
		echo '<br>';
		echo 'Вы заходили в библиотеку ' . $_COOKIE['counter'] . ' раз<br>'; 
		echo 'Последнее посещение ' . date("d-m-Y H:i:s", $_COOKIE['lasttime']);
		echo '<br>';
		echo 'Список посещенных страниц: <br>';
		  for ($i = 1; $i < count($pth)-1; $i++) {
    	echo '' . $i . ': ' . $pth[$i] . '<br>';
  		}
		echo '<br>';


		?>
	</div>



</html>