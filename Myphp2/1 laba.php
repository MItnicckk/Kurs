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
 				<li><a href="view.php">Просмотр</a></li>
				<li><a href="Registr.php">Регистрация</a></li>
 				<li><a href="iniTestphp.php">Тест</a></li> -->
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
	else {
	echo "Вы не можете изменять тип прав другим пользователям";
	echo "<br>";
	}


			$sql51 = "SELECT *
			FROM Registr
			WHERE Login = ('{$username}')
			";

		$result51 = mysqli_query($connect,$sql51);
      while ($row = mysqli_fetch_array($result51)) {
      // 	echo '<a>Права типа: </a>';
      //   echo '<tr>
      //   <td>' . $row[3] . '</td>

      //   </tr>';
     	// echo '<br></br>';

//1 file red
				if ($_POST["aa"] == 'true') {
				$Sotr = $_POST['Sotr']; 
				// echo $podp;
				}


				if ($_POST["aa"] == 'true' and $username == $admin) {
				$name = $_POST['namee2']; 
				// echo $sotr;

				$sql00 = ("UPDATE `Registr` SET `file1` = '{$name}' WHERE `Registr`.`Login` = ('{$Sotr}');");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}


//2 file red
				if ($_POST["ab"] == 'true') {
				$Sotr = $_POST['Sotr']; 
				// echo $podp;
				}


				if ($_POST["ab"] == 'true' and $username == $admin) {
				$name = $_POST['namee2']; 
				// echo $sotr;

				$sql00 = ("UPDATE `Registr` SET `file2` = '{$name}' WHERE `Registr`.`Login` = ('{$Sotr}');");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}
				

//3 file red
				if ($_POST["ac"] == 'true') {
				$Sotr = $_POST['Sotr']; 
				// echo $podp;
				}


				if ($_POST["ac"] == 'true' and $username == $admin) {
				$name = $_POST['namee2']; 
				// echo $sotr;

				$sql00 = ("UPDATE `Registr` SET `file3` = '{$name}' WHERE `Registr`.`Login` = ('{$Sotr}');");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}
				


//4 file red
				if ($_POST["av"] == 'true') {
				$Sotr = $_POST['Sotr']; 
				// echo $podp;
				}


				if ($_POST["av"] == 'true' and $username == $admin) {
				$name = $_POST['namee2']; 
				// echo $sotr;

				$sql00 = ("UPDATE `Registr` SET `file4` = '{$name}' WHERE `Registr`.`Login` = ('{$Sotr}');");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}
				





if ($_POST["bbq"] == 'true') {

					$sql51 = "SELECT file1
					FROM Registr
					WHERE Login = ('{$username}')
					";

					$result51 = mysqli_query($connect,$sql51);
	    while ($row1 = mysqli_fetch_array($result51)) {
			        echo '<tr>Тип прав к данному файлу:
			        <td>' . $row1[0] . '</td>

			        </tr>';
			     	echo '<br></br>';

			     	$prava2 = $row1[0];
			     	$do = $_POST['fail'];
			     	$read = 'read';
					$write = 'write'; 
					$none = 'none';
					$grant = 'grant';

			    if ($prava2 == $do){
					echo "Вы имете такие права";
					echo "<br>";
				}
				elseif ($prava2 == $grant){
					echo "Вы имете такие права";
					echo "<br>";
				}
				else{
					echo "Вы не имете таких прав";
					echo "<br>";
				}
		}


}




if ($_POST["ab"] == 'true') {

					$sql61 = "SELECT file2
					FROM Registr
					WHERE Login = ('{$username}')
					";

					$result61 = mysqli_query($connect,$sql61);
	    while ($row2 = mysqli_fetch_array($result61)) {
			        echo '<tr>Тип прав к данному файлу:
			        <td>' . $row2[0] . '</td>

			        </tr>';
			     	echo '<br></br>';

			     	$prava2 = $row2[0];
			     	$do = $_POST['faill'];
			     	$read = 'read';
					$write = 'write'; 
					$none = 'none';
					$grant = 'grant';

			    if ($prava2 == $do){
					echo "Вы имете такие права";
					echo "<br>";
				}
				elseif ($prava2 == $grant){
					echo "Вы имете такие права";
					echo "<br>";
				}
				else{
					echo "Вы не имете таких прав";
					echo "<br>";
				}
		}

}


if ($_POST["ac"] == 'true') {

					$sql71 = "SELECT file3
					FROM Registr
					WHERE Login = ('{$username}')
					";

					$result71 = mysqli_query($connect,$sql71);
	    while ($row3 = mysqli_fetch_array($result71)) {
			        echo '<tr>Тип прав к данному файлу:
			        <td>' . $row3[0] . '</td>

			        </tr>';
			     	echo '<br></br>';

			     	$prava2 = $row3[0];
			     	$do = $_POST['failll'];
			     	$read = 'read';
					$write = 'write'; 
					$none = 'none';
					$grant = 'grant';

			    if ($prava2 == $do){
					echo "Вы имете такие права";
					echo "<br>";
				}
				elseif ($prava2 == $grant){
					echo "Вы имете такие права";
					echo "<br>";
				}
				else{
					echo "Вы не имете таких прав";
					echo "<br>";
				}
		}

}


if ($_POST["av"] == 'true') {

$sql81 = "SELECT file4
					FROM Registr
					WHERE Login = ('{$username}')
					";

					$result81 = mysqli_query($connect,$sql81);
	    while ($row4 = mysqli_fetch_array($result81)) {
			        echo '<tr>Тип прав к данному файлу:
			        <td>' . $row4[0] . '</td>

			        </tr>';
			     	echo '<br></br>';

			     	$prava2 = $row4[0];
			     	$do = $_POST['faillll'];
			     	$read = 'read';
					$write = 'write'; 
					$none = 'none';
					$grant = 'grant';

			    if ($prava2 == $do){
					echo "Вы имете такие права";
					echo "<br>";
				}
				elseif ($prava2 == $grant){
					echo "Вы имете такие права";
					echo "<br>";
				}
				else{
					echo "Вы не имете таких прав";
					echo "<br>";
				}
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
      <th>Файл1</th>
      <th>Файл2</th>
      <th>Файл3</th>
      <th>Файл4</th>
      </tr>";

    $sql = "SELECT *
			FROM Registr
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[1] . '</td>
        <td>' . $row[4] . '</td>
        <td>' . $row[5] . '</td>
        <td>' . $row[6] . '</td>
        <td>' . $row[7] . '</td>
        </tr>';
      }
      echo '</table> <br>';
?>



	<div class="tournament-info"> 	
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Файл1</b></p>
<!--       <select class="tournament-title3"  name="podpissi">
        <?
        $result1 = mysqli_query($connect, "SELECT * FROM Registr");
        while ($row = mysqli_fetch_array($result1)) {
          $s =  $row[4];
          echo '<option>' . $s . '</option>';
        }
        ?>
        </select> -->
        <p><b>Выбрать действие:</b></p>
        <select class="tournament-title3"  name="fail">
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








			<div class="tournament-info"> 	
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Файл2</b></p>
<!--       <select class="tournament-title3"  name="podpissi">
        <?
        $result1 = mysqli_query($connect, "SELECT * FROM Registr");
        while ($row = mysqli_fetch_array($result1)) {
          $s =  $row[4];
          echo '<option>' . $s . '</option>';
        }
        ?>
        </select> -->
        <p><b>Выбрать действие:</b></p>
        <select class="tournament-title3"  name="faill">
        <?
        $result2 = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result2)) {
          $s =  $row[2];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Подтвердить"></p>
		<p><input name="ab" value="true" hidden></p>
		</form>
		</div>








			<div class="tournament-info"> 	
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Файл3</b></p>
<!--       <select class="tournament-title3"  name="podpissi">
        <?
        $result1 = mysqli_query($connect, "SELECT * FROM Registr");
        while ($row = mysqli_fetch_array($result1)) {
          $s =  $row[4];
          echo '<option>' . $s . '</option>';
        }
        ?>
        </select> -->
        <p><b>Выбрать действие:</b></p>
        <select class="tournament-title3"  name="failll">
        <?
        $result2 = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result2)) {
          $s =  $row[2];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Подтвердить"></p>
		<p><input name="ac" value="true" hidden></p>
		</form>
		</div>






			<div class="tournament-info"> 	
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Файл4</b></p>
<!--       <select class="tournament-title3"  name="podpissi">
        <?
        $result1 = mysqli_query($connect, "SELECT * FROM Registr");
        while ($row = mysqli_fetch_array($result1)) {
          $s =  $row[4];
          echo '<option>' . $s . '</option>';
        }
        ?>
        </select> -->
        <p><b>Выбрать действие:</b></p>
        <select class="tournament-title3"  name="faillll">
        <?
        $result2 = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result2)) {
          $s =  $row[2];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Подтвердить"></p>
		<p><input name="av" value="true" hidden></p>
		</form>
		</div>




  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Изменить права к 1 файлу:</b></p>
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
	


  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Изменить права к 2 файлу:</b></p>
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
		<p><input name="ab" value="true" hidden></p>
    </form>
  </div>


    <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Изменить права к 3 файлу:</b></p>
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
		<p><input name="ac" value="true" hidden></p>
    </form>
  </div>


    <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Изменить права к 4 файлу:</b></p>
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
		<p><input name="av" value="true" hidden></p>
    </form>
  </div>


</div>


</body>

</html>