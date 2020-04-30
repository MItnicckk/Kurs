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
?>


<div class="tournament-info3">


</br>
</br>
</br>
<?php

echo '<br>';

    echo "
    <table border=1px>
    <tr>
      <th>Name</th>
      <th>Club</th>
      <th>Matches</th>
      <th>Goals</th>
      <th>Age</th>
      </tr>";

    $sql = "SELECT *
			FROM Player
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[1] . '</td>
        <td>' . $row[2] . '</td>
        <td>' . $row[3] . '</td>
        <td>' . $row[4] . '</td>
        <td>' . $row[5] . '</td>
        </tr>';
      }

      echo '</table> <br>';

echo '<br>';



if ($_POST["bad"] == 'true') {
				$athors1 = '<img src=плохойф.jpg >'; 
				echo $athors1;
				echo '<br>';
				echo '<br>';
				echo 'Гомес М.';
				echo '<br>';
				echo 'Анхель';
				echo '<br>';
				$bad;
				if ($result <= 7){
				$sql = "SELECT * FROM Player";
     			$result = mysqli_query($connect, $sql);
			}
		}


if ($_POST["good"] == 'true') {
				$athors1 = '<img src=хорошийф.jpg >'; 
				echo $athors1;
				echo '<br>';
				echo '<br>';
				echo 'Суарез';
				echo '<br>';
				echo 'Мората';
				echo '<br>';
				echo 'Лорен Морон';
				echo '<br>';
				echo 'Виллиан Жозе';
				echo '<br>';
				echo 'Будимир';
				echo '<br>';
				echo 'Чими Авила';
				echo '<br>';
				echo 'Бензема';
				echo '<br>';
				$good;
				if ($result >= 7 and $result <= 26){
				$sql = "SELECT * FROM Player";
     			$result = mysqli_query($connect, $sql);
			}
			}


if ($_POST["goad"] == 'true') {
				$athors1 = '<img src=Богф.jpg >'; 
				echo $athors1;
				echo '<br>';
				echo '<br>';
				echo 'Месси';
				echo '<br>';
				$goad;
				if ($result >= 26){
				$sql = "SELECT * FROM Player";
     			$result = mysqli_query($connect, $sql);
			}
							$athors1 = '<img src=хорошийф.jpg >'; 
				echo $athors1;
				echo '<br>';
				echo '<br>';
				echo 'Суарез';
				echo '<br>';
				echo 'Мората';
				echo '<br>';
				echo 'Лорен Морон';
				echo '<br>';
				echo 'Виллиан Жозе';
				echo '<br>';
				echo 'Будимир';
				echo '<br>';
				echo 'Чими Авила';
				echo '<br>';
				echo 'Бензема';
				echo '<br>';
				$good;
				if ($result >= 7 and $result <= 26){
				$sql = "SELECT * FROM Player";
     			$result = mysqli_query($connect, $sql);
			}
			}



?>
</div>

	
         <div class="tournament-info"> 
         	<label><input type="radio" name="namesGaners" value="2">И</label>
<label><input type="radio" name="namesGaners" value="2">Или</label>
		<div class="tournament-title"> 
		<div class="tournament-title">
		<form action="1 laba.php" method="post"> 
		<p><b>Плохой бомбардир</b></p> 
		<p><input type="submit" value="Показать"></p> 
		<p><input name="bad" value="true" hidden></p> 
		</form> 
		</div>
		<br>



         <div class="tournament-info"> 
		<div class="tournament-title"> 
		<div class="tournament-title">
		<form action="1 laba.php" method="post"> 
		<p><b>Хороший бомбардир</b></p> 
		<p><input type="submit" value="Показать"></p> 
		<p><input name="good" value="true" hidden></p> 
		</form> 
		</div>
		<br>




         <div class="tournament-info"> 
		<div class="tournament-title"> 
		<div class="tournament-title">
		<form action="1 laba.php" method="post"> 
		<p><b>Бог футбола</b></p> 
		<p><input type="submit" value="Показать"></p> 
		<p><input name="goad" value="true" hidden></p> 
		</form> 
		</div>
		<br>
		<br>
		<br>
		<br>


    <form action="1 laba.php" method="post">
      <p><b>_</b></p>
<!--       <select class="tournament-title3"  name="podpissi">
        <?
        $result1 = mysqli_query($connect, "SELECT * FROM Registr");
        while ($row = mysqli_fetch_array($result1)) {
          $s =  $row[4];
          echo '<option>' . $s . '</option>';
        }
        ?>
        </select> -->
        <p><b>Выбрать футболиста, у которого :</b></p>
        <select class="tournament-title3"  name="fail">
        <?
        $result2 = mysqli_query($connect, "SELECT Type FROM Player");
        while ($row = mysqli_fetch_array($result2)) {
          $s =  $row[0];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Подтвердить"></p>
		<p><input name="bbq" value="true" hidden></p>
		</form>
		<br>
		<br>
		<br>
				<br>
		<br>
		<br>
		<br>


</div>
</div>

</body>
</html>