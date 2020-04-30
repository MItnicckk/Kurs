<?php
session_start();
$_SESSION["pth"] .= 'Registr.php-';
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


$Registr1 = $_POST['namelog']; 
$Registr2 = $_POST['namepass'];


		if ((!preg_match('/^.{5,14}/', $Registr1) || (!preg_match("/[@]/", $Registr1))))
		{
  			echo "Маил введен некорректно";
  			echo "<br />";
        }

 		if (!preg_match('/^.{5,14}/', $Registr2)) {
  			echo "Длина пароля должна быть от 5 до 14 символов.";
  			echo "<br />";
        }
		        else
		        if(!preg_match("/([a-z]+)/", $Registr2) || !preg_match("/([A-Z]+)/", $Registr2) || preg_match("/[!@#$%^&*?_~]/", $Registr2)) {
		            echo "Используйте, строчные буквы в верхнем и нижнем регистрах, а также специальные символы: @, #, $,%, ^, &, *,?, _, ~";
		            echo "<br />";
		        }
		        else 
		        	echo "Успешно!";





$res = "SELECT * FROM Registr WHERE Login = '$Registr1'";
$ress = mysqli_query($connect,$res);


	if ($row = mysqli_fetch_array($ress) && $_POST["sqr"] == 'true'){
						
					echo "Такой пользователь уже существует";
					// if (!empty($_POST["sqr"])) {
					// $Registr1 = $_POST['namelog']; 
					// $Registr2 = $_POST['namepass'];
					// $_SESSION["namelog"] = $_POST["sqr"];
					// header("Location: ".$_SERVER["REQUEST_URI"]);
					// }
				
					
	}
	 else {
	  		if (!empty($_POST["sqr"]) && $_POST["sqr"] == 'true') {
	  		$Registr1 = $_POST['namelog']; 
			$Registr2 = $_POST['namepass'];
			$_SESSION["namelog"] = $_POST["sqr"];
			}	   			

				if ($row != mysqli_fetch_array($ress))
	  			echo "Регистрация успешна";

								if ($_POST["sqr"] == 'true') {
								$sql = ("INSERT INTO `Registr` (`Login`,`Pass`) VALUES ('{$Registr1}','{$Registr2}')");
								if ('{$Registr1}')
								$result = mysqli_query($connect,$sql);
								}
								
						
	  }

	  

  // else echo"Такой пользователь уже существует"

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
		<form action="Registr.php" method="post"> 
		<div class = "Text">
		<p><b>Регистрация</b></p> 
		<br>
		<p><b>Маил</b></p> 
		<p><input type="text" name="namelog" value=""></p>
		<p><b>Пароль</b></p> 
		<p><input type="password" name="namepass" value=""></p> 
		<br>
		<p><input class="glitch-btn" type="submit" value="Зарегистрироваться"></p> 
		<p><input name="sqr" value="true" hidden></p> 
		</div>
		</form> 
		</div>


<br>
<br>
<br>
<br>


</body>
</html>