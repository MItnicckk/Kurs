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
				<!-- <li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li> -->
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


// Добавить 

			
	 			if ($_POST["a"] == 'true') {
				$pod = $_POST['name']; 
				echo $pod;
				$sql = ("INSERT INTO `podpis` (`id`, `name`, `Podpisi`) VALUES (NULL, '{$pod}', '');");

				// $sql = iconv('windows-1251', 'UTF-8', $sql); 
				$result = mysqli_query($connect,$sql);
				}





//Редактировать 
				if ($_POST["aa"] == 'true') {
				$podp = $_POST['Sotr']; 
				 // echo $podpis;
				}


				if ($_POST["aa"] == 'true') {
				$sotr = $_POST['namee2']; 
				// echo $sotr;
				$sql00 = ("UPDATE `podpis` SET `name` = '{$sotr}' WHERE `podpis`.`name` = ('{$podp}');");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}



				if ($_POST["bbq"] == 'true') {
				$podpissi = $_POST['podpissi'];
				$podpisati = 'Подпись';
				 // echo $athorss;
				$sql00 = ("UPDATE `podpis` SET `podpisi` = '{$podpisati}' WHERE `podpis`.`name` = ('{$podpissi}')");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
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








?>

<h1> Итог: </h1>
Документ не подписан
<br>
<title><?php echo $_COOKIE['text1']; ?></title>
<?php 
$a = $_COOKIE['text1']; 
echo $a;
if (isset($_COOKIE['text1'])) echo "Город: " . $_COOKIE["text1"] . "<br>";



// $fp = fopen("Doc/Документ.txt", "r"); // Открываем файл в режиме чтения
// if ($fp) 
// {
// while (!feof($fp))
// {
// $mytext = fgets($fp, 999);
// echo $mytext."<br />";
// $soucer = count($fp);
// echo $soucer."<br />";
// }
// }
// else echo "Ошибка при открытии файла";
// fclose($fp);


$fp = fopen("Doc/Документ.xml", "r"); // Открываем файл в режиме чтения
if ($fp) 
{
  while(!feof($fp))
  {
  $char = fgetc($fp);
   $i = $i + 1;// Находим символ «с»
  }
// echo 'Количество: '. $i;
}


// if (isset($_POST['podpissi'])){
// 	$text2 = $_POST['podpissi'];
// }

if (isset($_POST['podpissi'])) {
$file="Документ.xml";
$fh = fopen($file, 'w');
 // имя файла
			// file_put_contents($file, $text2 . "\r\n", FILE_APPEND);
			// $f = file_get_contents($file);
			// $f = explode("\r\n", $f);
			// $text2 = $_POST['podpissi'];
}








?>



<?php

    echo "
    <table border=1px>
    <tr>
      <th>Номер</th>
      <th>Должность</th>
      <th>Подпись</th>
      </tr>";

    $sql = "SELECT *
			FROM podpis
			";
		
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
        <td>' . $row[0] . '</td>
        <td>' . $row[1] . '</td>
        <td>' . $row[2] . '</td>
        </tr>';
      }
      echo '</table> <br>';
?>

<?php

$sql1 = "SELECT podpisi FROM podpis WHERE name = 'Сотрудник 1'";
$sql2 = "SELECT podpisi FROM podpis WHERE name = 'Сотрудник 2'";
$sql3 = "SELECT podpisi FROM podpis WHERE name = 'Сотрудник 3'";
$sql4 = "SELECT podpisi FROM podpis WHERE name = 'Сотрудник 4'";
$sql5 = "SELECT podpisi FROM podpis WHERE name = 'Сотрудник 5'";

$result1 = mysqli_query($connect,$sql1);
$result2 = mysqli_query($connect,$sql2);
$result3 = mysqli_query($connect,$sql3);
$result4 = mysqli_query($connect,$sql4);
$result5 = mysqli_query($connect,$sql5);
	while ($row1 = mysqli_fetch_array($result1)){
	// echo  $row1[0];
        while ($row2 = mysqli_fetch_array($result2)){
       	// echo  $row2[0];
       		while ($row3 = mysqli_fetch_array($result3)){
		    // echo  $row3[0];
		    	while ($row4 = mysqli_fetch_array($result4)){
		    	// echo  $row4[0];
		    		while ($row5 = mysqli_fetch_array($result5)){
		    		// echo  $row5[0];

if (isset($_POST['podpissi'])){
	$text2 = $_POST['podpissi'];
}

if (isset($_POST['podpissi'])) {
			$file="Документ.xml"; // имя файла
			// file_put_contents($file, $text2 . "\r\n", FILE_APPEND);
			// $f = file_get_contents($file);
			// $f = explode("\r\n", $f);
			// $text2 = $_POST['podpissi'];
}

		    		if ($row1[0] == 'Подпись'){
			    			$podpis1 = 'Сотрудник 1 подписал документ';
			    			$file="Документ.xml"; // имя файла
							file_put_contents($file, $podpis1 . "\r\n", FILE_APPEND);
							$f = file_get_contents($file);
							$f = explode("\r\n", $f);
		    			echo "Сотрудник 1 подписал документ";
		    			echo "<br>";
		    		}
		    		else {
		    				$podpis11 = 'Сотрудник 1 подписал документ';
			    			$file="Документ.xml"; // имя файла
							file_put_contents($file, $podpis11 . "\r\n", FILE_APPEND);
							$f = file_get_contents($file);
							$f = explode("\r\n", $f);
		    			echo "Сотрудник 1 не подписал документ";
		    			echo "<br>";
		    		}
				    		if ($row2[0] == 'Подпись' and $row3[0] == 'Подпись'){
					    			$podpis2 = 'Сотрудник 2 и Сотрудник 3 подписали документ';
					    			$file="Документ.xml"; // имя файла
									file_put_contents($file, $podpis2 . "\r\n", FILE_APPEND);
									$f = file_get_contents($file);
									$f = explode("\r\n", $f);
				    			echo "Сотрудник 2 и Сотрудник 3 подписали документ";
				    			echo "<br>";
				    		}
				    		elseif ($row2[0] == 'Подпись' and $row3[0] != 'Подпись') {
				    				$podpis22 = 'Сотрудник 2 подписал документ, Сотрудник 3 а не подписал документ';
					    			$file="Документ.xml"; // имя файла
									file_put_contents($file, $podpis22 . "\r\n", FILE_APPEND);
									$f = file_get_contents($file);
									$f = explode("\r\n", $f);
				    			echo "Сотрудник 2 подписал документ,а Сотрудник 3 не подписал документ";
				    			echo "<br>";
				    		}
				    		elseif ($row2[0] != 'Подпись' and $row3[0] == 'Подпись') {
				    				$podpis23 = 'Сотрудник 3 подписал документ,а Сотрудник 2 не подписал документ';
					    			$file="Документ.xml"; // имя файла
									file_put_contents($file, $podpis23 . "\r\n", FILE_APPEND);
									$f = file_get_contents($file);
									$f = explode("\r\n", $f);
				    			echo "Сотрудник 3 подписал документ,а Сотрудник 2 не подписал документ";
				    			echo "<br>";
				    		}
						    		if ($row4[0] == 'Подпись' or $row5[0] == 'Подпись'){
						    			$podpis3 = 'Сотрудник 4 или Сотрудник 5 подписал документ';
						    			$file="Документ.xml"; // имя файла
										file_put_contents($file, $podpis3 . "\r\n", FILE_APPEND);
										$f = file_get_contents($file);
										$f = explode("\r\n", $f);
					    			echo "Сотрудник 4 или Сотрудник 5 подписал документ";
					    			echo "<br>";
					    			}
					    			elseif ($row4[0] != 'Подпись' or $row5[0] == 'Подпись'){
					    				$podpis32 = 'Сотрудник 4 или Сотрудник 5 подписал документ';
						    			$file="Документ.xml"; // имя файла
										file_put_contents($file, $podpis32 . "\r\n", FILE_APPEND);
										$f = file_get_contents($file);
										$f = explode("\r\n", $f);
					    			echo "Сотрудник 4 или Сотрудник 5 подписал документ";
					    			echo "<br>";
				    				}
				    				elseif ($row4[0] == 'Подпись' or $row5[0] != 'Подпись'){
				    					$podpis33 = 'Сотрудник 4 или Сотрудник 5 подписал документ';
						    			$file="Документ.xml"; // имя файла
										file_put_contents($file, $podpis33 . "\r\n", FILE_APPEND);
										$f = file_get_contents($file);
										$f = explode("\r\n", $f);
					    			echo "Сотрудник 4 или Сотрудник 5 подписал документ";
					    			echo "<br>";
				    				}
				    				elseif ($row4[0] != 'Подпись' or $row5[0] != 'Подпись'){
				    					$podpis34 = 'Сотрудник 4 и Сотрудник 5 подписали документ';
						    			$file="Документ.xml"; // имя файла
										file_put_contents($file, $podpis34 . "\r\n", FILE_APPEND);
										$f = file_get_contents($file);
										$f = explode("\r\n", $f);
					    			echo "Сотрудник 4 и Сотрудник 5 подписали документ";
					    			echo "<br>";
				    				}

		    		}
		    	}
		    }
       }
	}





?>

	<div class="tournament-info"> 
		<div class="tournament-title21"> 
		<form action="1 laba.php" method="post"> 
		<p><b>Добавить сотрудника:</b></p> 
		<p>Должность</p>
		<p><input type="text" name="name" value=""></p> 
		<p><input type="submit" value="Добавить"></p> 
		<p><input name="a" value="true" hidden></p> 
		</form> 
		</div>



 
  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Изменить сотрудника:</b></p>
      <select class="tournament-title3"  name="Sotr">
        <?
        $result = mysqli_query($connect, "SELECT * FROM podpis");
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
      <p><b>Подписать документ:</b></p>
      <select class="tournament-title3"  name="podpissi">
        <?
        $result = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p>Введите  подпись</p>

		<p><input type="submit" value="Подписать"></p>
		<p><input name="bbq" value="true" hidden></p>
		</form>
		</div>


				 
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Отменить подпись документа:</b></p>
      <select class="tournament-title3"  name="podpissi">
        <?
        $result = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p>Введите  подпись</p>

		<p><input type="submit" value="Отменить подпись"></p>
		<p><input name="bbw" value="true" hidden></p>
		</form>
		</div>




	
  <div class="tournament-title21">
    <form action="1 laba.php" method="post">
      <p><b>Удалить сотрудника:</b></p>
      <select class="tournament-title3"  name="del">
        <?
        $result = mysqli_query($connect, "SELECT * FROM podpis");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Удалить"></p> 
		<p><input name="aaa" value="true" hidden></p> 
		</form> 
		</div>		

</div>
<form action="photo.php" enctype="multipart/form-data" method="post">
    <input type="file" name="pic">
    
</form>

</body>

</html>