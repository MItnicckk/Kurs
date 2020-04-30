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
				<li><a href="2 laba.php">Регистрация</a></li>
				<li><a href="iniTestphp.php">Тест</a></li>
			</ul>
		</nav>
</header>
</body>
	<div class="DSTU"><img src="static/DGTU1.png"></div>
	<div class = "Text">
	</div>
	<?php
		echo '<br>';
		echo 'Вы заходили в библиотеку ' . $_COOKIE['counter'] . ' раз<br>'; 
		echo 'Последнее посещение ' . date("d-m-Y H:i:s", $_COOKIE['lasttime']);
		echo '<br>';
		echo 'Список посещенных страниц: ' . $_SESSION["pth"] . '<br>';
		?>
</html>



<?php
function Login($username, $remember)
{
if ($username == '')
return false;
$_SESSION['username'] = $username;
if ($remember)
setcookie('username', $username, time() + 3600 * 24 * 7);
return true;
}
function Logout()
{
setcookie('username', "", time()-1);
unset($_SESSION['username']);
}


session_start();
$enter_site = false;
Logout ();
if (count($_POST) > 0)
	$enter_site = Login($_POST ['username'],$_POST['remember'] == 'on');
if ($enter_site)

{
header("Location: a.php");
exit();
}
?>



<?php
session_start();

if (!isset($_SESSION['username' ]) && isset($_COOKIE['username']))
$_SESSION['username'] = $_COOKIE['username'];
$username = $_SESSION['username'];

if (susername == null)
{
header("Location: 2 laba.php");
exit();
}
?>

<hl>Вход на сайт</h1>
<form action = "" method = "post">
Введите имя:
<br/>
<input type = "text" name = "username" />
<br/>
<input type = "checkbox" name = "remember" />Запоминать меня
<br/>
<input type = "submit" value = "Войти" />
</form>


<h1>Страница "A"</h1>

<b>A</b> и <а href = "b.php">Б</a> сидели на трубе.
<br/>
<br/>
Вы вошли как <b><?php echo $username;?></b> 
<а href="login.php">Bыxoд</a>
<?php
  session_start();
  if (!empty($_POST["sqr"])) {
    $_SESSION["x"] = $_POST["x"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    exit;
  }
  if (isset($_SESSION["x"])) echo "Квадрат числа ".$_SESSION["x"]." равен ".pow($_SESSION["x"], 2);
?>
<form name="form" action="" method="post">
  <div>
    <input type="text" name="x" />
    <br />
    <input type="submit" value="Возвести в квадрат" name="sqr" />
  </div>
</form>