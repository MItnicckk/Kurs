<!DOCIYPE html PUBLIC "-//W3C//DID XHIML 1.0 Transitional//EN"
"http://www.w3.org/IR/xhtml1/DID/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/l999/xhtml")>
<head>
	<meta charset = "utf-8">
	<title>Мой сайт</title>
</head>
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
				<li><a href="2 laba.php">Регистрация</a></li>
			</ul>
		</nav>
</header>




<?php
session_start();

if (!isset($_SESSION['Login' ]) && isset($_COOKIE['Login']))
$_SESSION['Login'] = $_COOKIE['Login'];
$username = $_SESSION['Login'];
if (susername == null)
{
header("Location: 2 laba.php");
exit();
}
?>




<h1>Страница "A"</h1>

<b>A</b> и 
<a href="b.php">Б</a> сидели на трубе.
<br/>
<br/>
Вы вошли как <b>
<?php echo $username?>
</b> | 
<a href="login.php">Bыxoд</a>

</body>
</html>















<?php


session_start();
$font_size = $_POST['font_size'];
// $_SESSION['font_size'] = $font_size;
setcookie('font_size', $font_size, time() + 3600 * 24 * 7);
echo $font_size;







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
<Stile>
  </Stile>
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
        <li><a href="Dis2.php">Просмотр</a></li>
      </ul>
    </nav>
</header>
<br><br>
  <div class="tournament-info3"> 
</!DOCTYPE html>
</body>
</html>

 <!-- background: #333; /* Цвет фона */
    color: #fc0; /* Цвет текста */ -->

<br><br><br>

  <form action="Dis.php">
   <p>Укажите цвет фона: <input type="color" name="bg" value="#ff0000">
   <input type="submit" value="Выбрать"></p>

<div style="font-size: <?php echo $font_size; ?>px">
   Текст
</div>

<br>

<form action="Dis.php" method="post"> 
<p><input type="password" name="font_size" value=""></p> 
<p><input class="glitch-btn" type="submit" value="Замена"></p> 
</form> 