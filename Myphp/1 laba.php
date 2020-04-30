<?php
session_start();
$_SESSION["pth"] .= '1 laba.php-';
if (!isset($_SESSION['username' ]) && isset($_COOKIE['username']))
$_SESSION['username'] = $_COOKIE['username'];
$username = $_SESSION['username'];

if (susername == null)
{
header("Location: index.php");
exit();
}


?>
<html>
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
				<li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li>
<!-- 				<li><a href="Doc/1 lab Corp System and tech.php">Директор</a></li>
				<li><a href="Doc/2 lab Corp System and tech.php">Бухгалтер</a></li>
				<li><a href="Doc/3 lab Corp System and tech.php">Зам по ТБ</a></li>
 				<li><a href="view.php">Просмотр</a></li> -->
				<li><a href="Registr.php">Регистрация</a></li>
 				<!-- <li><a href="iniTestphp.php">Тест</a></li> -->
				<li><a href="index.php">Выход</a></li>
			</ul>
		</nav>
</header>



<?php

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

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

session_start();
$_SESSION["pth"] .= '1 laba.php-';
if (!isset($_SESSION['username' ]) && isset($_COOKIE['username']))
$_SESSION['username'] = $_COOKIE['username'];
$username = $_SESSION['username'];

if (susername == null)
{
header("Location: index.php");
exit();
}

// Добавить 

			
	 			if ($_POST["a"] == 'true') {
				$pod = $_POST['name']; 
				echo $pod;
				$sql = ("INSERT INTO `podpis` (`id`, `name`, `Podpisi`) VALUES (NULL, '{$pod}', '');");

				// $sql = iconv('windows-1251', 'UTF-8', $sql); 
				$result = mysqli_query($connect,$sql);
				}





$admin = 'admin';
	if ($username == $admin){
		echo "Вы имете полные права";
		echo "<br>";
	}


				 $sql51 = "SELECT *
			FROM Registr
			WHERE Login = ('{$username}')
			";

		$result51 = mysqli_query($connect,$sql51);
      while ($row = mysqli_fetch_array($result51)) {
      	echo '<a>Права типа: </a>';
        echo '<tr>
        <td>' . $row[3] . '</td>

        </tr>';
     	echo '<br></br>';

//Редактировать 
				if ($_POST["aa"] == 'true') {
				$podp = $_POST['Sotr']; 
				// echo $podp;
				}


				if ($_POST["aa"] == 'true' and $username == $admin) {
				$sotr = $_POST['namee2']; 
				// echo $sotr;

				$sql00 = ("UPDATE `Registr` SET `prava` = '{$sotr}' WHERE `Registr`.`Login` = ('{$podp}');");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}
				else echo "Вы не можете изменять тип прав другим пользователям";





				if ($_POST["bbq"] == 'true') {
				$podpissi = $_POST['podpissi'];
				$podpisi = $_POST['podpisi'];
				$podpisi1 = 'read';
				$podpisi2 = 'write';
				$read = 'read';
				$write = 'write';
				$none = 'none';
				$grant = 'grant';
				// echo $podpisi;
				// echo $rand;

	if ($row[3] == $grant and $podpisi == $podpisi1){
		echo "Вы имете права для чтения";
		echo "<br>";
	}

	if ($row[3] == $grant and $podpisi == $podpisi2){
		echo "Вы имете права для редактирования";
		echo "<br>";
	}

			if ($row[3] == $write and $podpisi == $podpisi1){
				echo "Вы не имете права для чтения";
				echo "<br>";
			}

			if ($row[3] == $write and $podpisi == $podpisi2){
				echo "Вы имете права для редактирования";
				echo "<br>";
			}

					if ($row[3] == $read and $podpisi == $podpisi1){
						echo "Вы имете права для чтения";
						echo "<br>";
					}

					if ($row[3] == $read and $podpisi == $podpisi2){
						echo "Вы не имете права для редактирования";
						echo "<br>";
					}

							if ($row[3] == $none and $podpisi == $podpisi1){
								echo "Вы не имете права для чтения";
								echo "<br>";
							}

							if ($row[3] == $none and $podpisi == $podpisi2){
								echo "Вы не имете права для редактирования";
								echo "<br>";
							}

}
				// $sql00 = ("UPDATE `podpis` SET `podpisi` = '{$podpisati}' WHERE `podpis`.`name` = ('{$podpissi}')");
				// $result00 = mysqli_query($connect,$sql00);
				}


				if ($_POST["bbw"] == 'true') {
				$podpissi = $_POST['podpissi'];
				$podpisati = ' ';
				 // echo $athorss;
				$sql00 = ("UPDATE `podpis` SET `podpisi` = '{$podpisati}' WHERE `podpis`.`name` = ('{$podpissi}')");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}


// Удалить 
	 			if ($_POST["aaa"] == 'true') {
				$del = $_POST['del']; 
				// echo $del;
				$sql000 = ("DELETE FROM podpis WHERE `name` = '{$del}'" );
				// $sql000 = iconv('windows-1251', 'UTF-8', $sql000); 
				$result = mysqli_query($connect,$sql000);
				}




if (!isset($_SESSION['username' ]) && isset($_COOKIE['username']))
$_SESSION['username'] = $_COOKIE['username'];
$username = $_SESSION['username'];

if (susername == null)
{
header("Location: 2 laba.php");
exit();
}






          echo "
    <table border=1px>
    <tr>
      <th>Пользователь</th>
      <th>Права</th>
      </tr>";

    $sql = "SELECT *
			FROM Registr
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[1] . '</td>
        <td>' . $row[3] . '</td>
        </tr>';
      }
      echo '</table> <br>';
?>



	<div class="tournament-info"> 	
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Выбрать документ:</b></p>
      <select class="tournament-title3"  name="podpissi">
        <?
        $result1 = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result1)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
        </select>
        <br></br>
        <p><b>Выбрать действие:</b></p>
        <select class="tournament-title3"  name="podpisi">
        <?
        $result2 = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result2)) {
          $s =  $row[2];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Подтвердить"></p>
		<p><input name="bbq" value="true" hidden></p>
		</form>
		</div>




  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Изменить права:</b></p>
      <select class="tournament-title3"  name="Sotr">
        <?
        $result = mysqli_query($connect, "SELECT * FROM Registr");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="text" name="namee2" value=""></p>
		<p><input type="submit" value="Изменить"></p>
		<p><input name="aa" value="true" hidden></p>
    </form>
  </div>
	


</div>


</body>

</html>