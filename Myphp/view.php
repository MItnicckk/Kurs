<?php
// session_start();
// $_SESSION["pth"] .= 'view.php-';
// $connect = mysqli_connect("localhost","mysql","mysql");


	$server = 'localhost'; 
	$username = 'mysql'; 
	$password = 'mysql'; 
	$dbname = 'Laba 11';

	$connect = mysqli_connect($server, $username, $password, $dbname); 
	mysqli_select_db($connect, $dbname);

		if(!$connect || !$dbname)
		{ 
			exit(mysql_error());
		} 


?>


<html>
<head>
	<meta charset = "utf-8">
	<title>Мой сайт</title>
</head>
	<link rel="stylesheet" href="static/style.css">
<body style = "background-image: url(static/Фон.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100%" >
<header>		
	<div class="logo">
				<svg  width="80" height="75" viewBox="0 0 0 0">
				</svg>
		</div>
		<nav>
			<ul class="menu__nav">
				<!-- <li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li> -->
				<li><a href="index.php">Главная</a></li>
				<li><a href="view.php">Просмотр</a></li>
				<li><a href="Registr.php">Регистрация</a></li>
				<!-- <li><a href="iniTestphp.php">Тест</a></li> -->
				<li><a href="Log.php">Вход</a></li>
			</ul>
		</nav>
</header>
<br><br>
	<div class="tournament-info3"> 
</!DOCTYPE html>
</body>
</html>


<?php

    echo "
    <table border=1px>
    <tr>
      <th>Название книги</th>
      <th>Описание</th>
      <th>Год написание</th>
      </tr>";

    $sql = "SELECT *
			FROM books
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[1] . '</td>
        <td>' . $row[2] . '</td>
        <td>' . $row[3] . '</td>
        </tr>';
      }

      echo '</table> <br>';
?>
</div>

<div class="tournament-info3">


<?php

echo '<br>';

    echo "
    <table border=1px>
    <tr>
      <th>Автор</th>
      <th>Год рождения</th>
      <th>Год смерти</th>
      </tr>";

    $sql = "SELECT *
			FROM athors
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[1] . '</td>
        <td>' . $row[2] . '</td>
        <td>' . $row[3] . '</td>
        </tr>';
      }

      echo '</table> <br>';

echo '<br>';
?>
</div>

<div class="tournament-info3"> 


<?php

    echo "
    <table border=1px>
    <tr>
      <th>Жанр</th>
      </tr>";

    $sql = "SELECT *
			FROM geners
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[1] . '</td>
        </tr>';
      }

      echo '</table> <br>';
?>
</div>