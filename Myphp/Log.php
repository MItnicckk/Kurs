<?php
session_start();
$_SESSION["pth"] .= 'Log.php-';
$connect = mysqli_connect("localhost","mysql","mysql");


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

$Registr2 = $_POST['password']; 


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

function LoginPass($password, $remember)
{
if ($Registr2 == '')
return false;
$_SESSION['password'] = $Registr2;
if ($remember)
setcookie('password', $Registr2, time() + 3600 * 24 * 7);
return true;
}
function LogoutPass()
{
setcookie('password', "", time()-1);
unset($_SESSION['password']);
}

$Registr1 = $_POST['username']; 
$res = "SELECT * FROM Registr WHERE Login = '$Registr1' AND Pass = '$Registr2'";
$ress = mysqli_query($connect,$res);

	if ($row = mysqli_fetch_array($ress)){

session_start();
$enter_site = false;
Logout ();
if (count($_POST) > 0)
	$enter_site = Login($_POST ['username'],$_POST['remember'] == 'on');
if ($enter_site)

{
header("Location: 1 laba.php");
exit();
}
}else
echo "Данные введены не верно";
?>



<!DOCIYPE html PUBLIC "-//W3C//DID XHIML 1.0 Transitional//EN"
"http://www.w3.org/IR/xhtml1/DID/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/l999/xhtml")>
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
				<li><a href="index.php">Главная</a></li>
				<li><a href="view.php">Просмотр</a></li>
				<li><a href="Registr.php">Регистрация</a></li>
				<li><a href="Log.php">Вход</a></li>
				<!-- <li><a href="iniTestphp.php">Тест</a></li> -->
			</ul>
		</nav>
</header>
<br><br>
	<div class="tournament-info2"> 
		<div class="tournament-title2laba"> 
		<form action="" method="post"> 
		<div class = "Text">
		<p><b>Авторизация</b></p> 
		<br>
		<p><b>Логин</b></p> 
		<p><input type="text" name="username"></p>
		<p><b>Пароль</b></p> 
		<p><input type="password" name="password"></p> 
		<br>
		<input type = "checkbox" name = "remember" />Запоминать меня
		<br/>
		<p><input class="glitch-btn" type="submit" value="Войти"></p> 
<!-- 		<p><input name="sqr" value="true" hidden></p>  -->
		</div>
		</form> 
		</div>


<br>
<br>
<br>
<br>
<br>

<!-- 	<div class="tournament-info2"> 
		<div class="tournament-title2laba"> 
		<form action="2 laba.php" method="post"> 
		<div class = "Text">
		<p><b>Авторизация</b></p> 
		<br>
		<p><b>Логин</b></p> 
		<p><input type="text" name="namelog" value=""></p>
		<p><b>Пароль</b></p> 
		<p><input type="password" name="namepass" value=""></p> 
		<br>
		<p><input type="submit" value="Авторизоваться"></p> 
		<p><input name="a" value="true" hidden></p> 
		</div>
		</form> 
		</div> -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- <?php 


// $connect = mysqli_connect("localhost","mysql","mysql");


// 	$server = 'localhost'; 
// 	$username = 'mysql'; 
// 	$password = 'mysql'; 
// 	$dbname = 'Laba 11';

// 	$connect = mysqli_connect($server, $username, $password, $dbname); 
// 	mysqli_select_db($connect, $dbname);

// 		if(!$connect || !$dbname)
// 		{ 
// 			exit(mysql_error());
// 		} 



	// $sel = "SELECT * FROM users WHERE login = '$login'";
 //    $res = mysql_query($sel); 
 //    if(!$res)
 //    {	
	// if ($_POST["sqr"] == 'true') {
	// 	$Registr1 = $_POST['namelog']; 
	// 	$Registr2 = $_POST['namepass'];
	// 	// echo $Registr1;
	// 	if ($_POST["sqr"] == 'true') {
	// 	$sql = ("INSERT INTO `Registr` (`Login`,`Pass`) VALUES ('{$Registr1}','{$Registr2}')");
	// 	// $sql = iconv('windows-1251', 'UTF-8', $sql); 
	// 	$result = mysqli_query($connect,$sql);
			
	// 		if($result)
	//         {
	//             echo "";
	//         }
	//         else 
	//         {
	//             echo "Error";
	//         }
	// 		}
	// }
// if (isset($_POST['knopka'])) { echo 'Работает'; unset ($_POST['knopka']); }

 //выбираем с таким же логином, что и введенный
    // $sel = "SELECT * FROM users WHERE login = '$login'";
    // $res = mysql_query($sel); 
    // if(!$res)
    // {
    //     //добавляем в бд
    //     $sql = "INSERT INTO `Registr` (`Login`,`Pass`) VALUES ('{$Registr1}','{$Registr2}')";
    //     $result = mysql_query($sql);
    //     if($result)
    //     {
    //         echo "Вы зарегистрированы!";
    //     }
    //     else 
    //     {
    //         echo "Error";
    //     }
    // }
    // else
    // {
    //     echo "Пользователь с таким именем существует! ";
    // }


?> -->

</body>
</html>