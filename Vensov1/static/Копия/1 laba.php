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
				<li><a href="index.php">Главная</a></li>
				<li><a href="1 laba.php">Просмотр</a></li>
				<li><a href="3 laba.php">Вход</a></li>
				<li><a href="2 laba.php">Регистрация</a></li>
				<li><a href="iniTestphp.php">Тест</a></li>
			</ul>
		</nav>
</header>

<br>
Вы вошли как <b><?php echo $username
?>
</b> | 
<a href="index.php">Bыxoд</a>

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


// Добавить жанр

			
	 			if ($_POST["a"] == 'true') {
				$geners = $_POST['name']; 
				// echo $geners;
				$sql = ("INSERT INTO `geners` (`Название жанра`) VALUES ('{$geners}')");
				// $sql = iconv('windows-1251', 'UTF-8', $sql); 
				$result = mysqli_query($connect,$sql);
				}


// Добавить автора
		
	 			if ($_POST["b"] == 'true') {
				$athors1 = $_POST['names1']; 
				// echo $1athors;
				$sql1 = ("INSERT INTO `athors` (`ФИО`) VALUES ('{$athors1}')");
				// $sql1 = iconv('windows-1251', 'UTF-8', $sql1); 
				$result10 = mysqli_query($connect,$sql1);
			}
			
	 			if ($_POST["b"] == 'true') {
				$athors2 = $_POST['names2']; 
				// echo $athors2;
				$sql11 = ("UPDATE `athors` SET `Год рождения` = '{$athors2}' WHERE `athors`.`ФИО` = ('{$athors1}')");
				// $sql1 = iconv('windows-1251', 'UTF-8', $sql1); 
				$result11 = mysqli_query($connect,$sql11);
			}
			
	 			if ($_POST["b"] == 'true') {
				$athors3 = $_POST['names3']; 
				// echo $athors3;
				$sql1 =  ("UPDATE `athors` SET `Год смерти` = '{$athors3}' WHERE `athors`.`ФИО` = ('{$athors1}')");
				// $sql1 = iconv('windows-1251', 'UTF-8', $sql1); 
				$result12 = mysqli_query($connect,$sql1);
			}

// Добавить книгу

	 			if ($_POST["namesGaners"] == '1') {
				$booksGaners = $_POST['namesGaners']; 
				$booksGaners = 1;
				}

				if ($_POST["namesGaners"] == '2') {
				$booksGaners = $_POST['namesGaners']; 
				$booksGaners = 2;
				}

				if ($_POST["namesGaners"] == '3') {
				$booksGaners = $_POST['namesGaners']; 
				$booksGaners = 3;
				}

				if ($_POST["namesGaners"] == '4') {
				$booksGaners = $_POST['namesGaners']; 
				}


				if ($_POST["namesAthors"] == '1') {
				$namesAthors = $_POST['namesAthors']; 
				$namesAthors = 1;
				}
				if ($_POST["namesAthors"] == '2') {
				$namesAthors = $_POST['namesAthors']; 
				$namesAthors = 2;
				}

				if ($_POST["namesAthors"] == '3') {
				$namesAthors = $_POST['namesAthors']; 
				$namesAthors = 3;
				}

		
	 			if ($_POST["c"] == 'true') {
				$books1 = $_POST['namess1']; 
				//echo $books1;
				$sql2 = ("INSERT INTO `books` (`Название`,`Код автора`,`Код жанра`) VALUES ('{$books1}','{$namesAthors}','{$booksGaners}')");
				// $sql2 = iconv('windows-1251', 'UTF-8', $sql2); 
				$result2 = mysqli_query($connect,$sql2);
				}
							
			
	 			if ($_POST["c"] == 'true') {
				$books2 = $_POST['namess2']; 
				// echo $books;
				$sql22 = ("UPDATE `books` SET `Описание` = '{$books2}' WHERE `books`.`Название` = ('{$books1}')");
				// $sql2 = iconv('windows-1251', 'UTF-8', $sql1); 
				$result11 = mysqli_query($connect,$sql22);
			}
		
	 			if ($_POST["c"] == 'true') {
				$books3 = $_POST['namess3']; 
				// echo $books3;
				$sql23 =  ("UPDATE `books` SET `Год написания` = '{$books3}' WHERE `books`.`Название` = ('{$books1}')");
				// $sql2 = iconv('windows-1251', 'UTF-8', $sql1); 
				$result12 = mysqli_query($connect,$sql23);
			}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//Редактировать жанр
				if ($_POST["aa"] == 'true') {
				$Newgeners = $_POST['geners']; 
				 // echo $Newgeners;
				}


				if ($_POST["aa"] == 'true') {
				$geners1 = $_POST['namee2']; 
				// echo $geners1;
				$sql00 = ("UPDATE `geners` SET `Название жанра` = '{$geners1}' WHERE `geners`.`Название жанра` = ('{$Newgeners}')");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}




//Редактировать автора





				if ($_POST["bb"] == 'true') {
				$Oldathor = $_POST['athors']; 
				// echo $Oldathor;
				}


				if ($_POST["bb"] == 'true') {
				$athorss = $_POST['nameee1'];
				 // echo $athorss;
				$sql00 = ("UPDATE `athors` SET `ФИО` = '{$athorss}' WHERE `athors`.`ФИО` = ('{$Oldathor}')");
				// $sql00 = iconv('windows-1251', 'UTF-8', $sql00); 
				$result00 = mysqli_query($connect,$sql00);
				}


				if ($_POST["bb"] == 'true') {
				$yearB = $_POST['nameee2']; 
				// echo $yearB;
				$sql01 = ("UPDATE `athors` set `Год рождения` = '{$yearB}' WHERE `athors`.`ФИО` = ('{$athorss}')");
				// $sql01 = iconv('windows-1251', 'UTF-8', $sql01); 
				$result01 = mysqli_query($connect,$sql01);
				}


				if ($_POST["bb"] == 'true') {
				$yearD = $_POST['nameee3']; 
				// echo $yearD;
				$sql02 = ("UPDATE `athors` set `Год смерти` = '{$yearD}' WHERE `athors`.`ФИО` = ('{$athorss}')");
				// $sql02 = iconv('windows-1251', 'UTF-8', $sql02); 
				$result02 = mysqli_query($connect,$sql02);
				}





//Редактировать книгу






				if ($_POST["cc"] == 'true') {
				$Oldbooks = $_POST['nameeee']; 
				//echo $Oldbooks;
				}


				if ($_POST["cc"] == 'true') {
				$books = $_POST['nameeee1']; 
				//echo $books;
				$sql002 = ("UPDATE `books` set `Название` = ('{$books}') WHERE `Название`=('{$Oldbooks}')");
				// $sql002 = iconv('windows-1251', 'UTF-8', $sql002); 
				$result002 = mysqli_query($connect,$sql002);
				}

				if ($_POST["cc"] == 'true') {
				$Opis = $_POST['nameeee2']; 
				// echo $Opis;
				$sql003 = ("UPDATE `books` set `Описание` = ('{$Opis}') WHERE `Название`=('{$books}')");
				// $sql003 = iconv('windows-1251', 'UTF-8', $sql003); 
				$result003 = mysqli_query($connect,$sql003);
				}

				if ($_POST["cc"] == 'true') {
				$yearbook = $_POST['nameeee3']; 
				// echo $yearbook;
				$sql004 = ("UPDATE `books` set `Год написания` = ('{$yearbook}') WHERE `Название`=('{$books}')");
				// $sql004 = iconv('windows-1251', 'UTF-8', $sql004); 
				$result004 = mysqli_query($connect,$sql004);
				}

			// $result02 = mysqli_query("SELECT * FROM books");
			// 	if ($_POST["cc"] == 'true') {
			// 	$books = $_POST['nameeee1']; 
			// 	// echo $books;
			// 	$sql02 = ("UPDATE `books` set `Название` = ('{$books}') WHERE `Код жанра`=('{$Oldbooks}')");
			// 	// $sql02 = iconv('windows-1251', 'UTF-8', $sql02); 
			// 	$result02 = mysqli_query($sql02);
			// 	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Удалить жанр
	 			if ($_POST["aaa"] == 'true') {
				$geners = $_POST['geners']; 
				// echo $geners;
				$sql000 = ("DELETE FROM geners WHERE `Название жанра` = '{$geners}'" );
				// $sql000 = iconv('windows-1251', 'UTF-8', $sql000); 
				$result = mysqli_query($connect,$sql000);
				}

// Удалить автора
	 			if ($_POST["bbb"] == 'true') {
				$athors = $_POST['athors']; 
				// echo $athors;
				$sql001 = ("DELETE FROM `athors`  WHERE (`ФИО`) = ('{$athors}')");
				// $sql001 = iconv('windows-1251', 'UTF-8', $sql001); 
				$result001 = mysqli_query($connect,$sql001);
			}

// Удалить книгу


	 			if ($_POST["ccc"] == 'true') {
				$books = $_POST['books']; 
				 // echo $books;
				$sql002 = ("DELETE FROM `books` WHERE (`Название`) = ('{$books}')");
				// $sql002 = iconv('windows-1251', 'UTF-8', $sql002); 
				$result002 = mysqli_query($connect,$sql002);
				}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Первый запрос
				if ($_POST['aaaa'] == 'true') {
    echo "<br>
    <table border=1px>
    <tr>
      <th>Первый запрос</th>
      </tr>";

      $sql = ("SELECT `athors`.`ФИО`, `Название`, `geners`.`Название жанра`
FROM books 
JOIN geners on `books`.`Код жанра` = `geners`.`id`
JOIN athors on `books`.`Код жанра` = `athors`.`id`");
      // $sql = iconv('windows-1251', 'UTF-8', $sql);
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        // $s = iconv('UTF-8', 'windows-1251', $row[0]);
        echo '<tr><td>' . $row[0] . '</td></tr>';
      }
      echo '</table> <br>';
}



// Второй запрос
if ($_POST['cccc'] == 'true') {
    echo "	<br>
    <table border=1px>
    <tr>
      <th>Третий запрос</th>
      </tr>";

      $sql = ("SELECT `ФИО` FROM `athors`
WHERE `athors`.`ФИО` LIKE 'А%' and `athors`.`Год рождения` = 1925");
      // $sql = iconv('windows-1251', 'UTF-8', $sql);
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
      // $s = iconv('UTF-8', 'windows-1251', $row[0]);
        echo '<tr><td>' . $row[0] . '</td></tr>';
      }
      echo '</table> <br>';
}




// Третий запрос







if ($_POST['bbbb'] == 'true') {
    echo "
    <table border=1px>
    <tr>
      <th>Второй запрос</th>
      </tr>";

      $sql = "SELECT `Название`,`Описание`
			FROM books
			JOIN `athors` on `books`.`Код автора` = `athors`.`id`
			WHERE `athors`.`Год рождения` > 1900";
      // $sql = iconv('windows-1251', 'UTF-8', $sql);
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        // $s = iconv('UTF-8', 'windows-1251', $row[0]);
        echo '<tr><td>' . $row[0] . '</td></tr>';
      }
      echo '</table> <br>';
}


?>


<br><br>
	<div class="tournament-info"> 
		<div class="tournament-title"> 
		<form action="1 laba.php" method="post"> 
		<p><b>Добавить жанр:</b></p> 
		<p>Название жанра</p>
		<p><input type="text" name="name" value=""></p> 
		<p><input type="submit" value="Добавить"></p> 
		<p><input name="a" value="true" hidden></p> 
		</form> 
		</div>


		<div class="tournament-title">
		<form action="1 laba.php" method="post"> 
		<p><b>Добавить автора:</b></p> 
		<p>ФИО</p>
		<p><input type="text" name="names1" value=""></p> 
		<p>Год рождения</p>
		<p><input type="text" name="names2" value=""></p> 
		<p>Год смерти</p>
		<p><input type="text" name="names3" value=""></p> 
		<p><input type="submit" value="Добавить"></p> 
		<p><input name="b" value="true" hidden></p> 
		</form> 
		</div>


		<div class="tournament-title2">
		<form action="1 laba.php" method="post"> 
		<p><b>Добавить книгу:</b></p> 
		<p>Название</p>
		<p><input type="text" name="namess1" value=""></p> 
		<p>Описание</p>
		<p><input type="text" name="namess2" value=""></p> 
		<p>Год написания</p>
		<p><input type="text" name="namess3" value=""></p> 
		<p><b>Выберете Автора</b></p> 
		<p><label><input type="radio" name="namesAthors" value="1">Агата Кристи</label>
		<label><input type="radio" name="namesAthors" value="2">Аркадий Стругацкий</label>
		<label><input type="radio" name="namesAthors" value="3">Лев Николаевич Толстой</label></p>
		<p><b>Выберете Жанр</b></p> 
		<p><label><input type="radio" name="namesGaners" value="1">Фантастика</label>
		<label><input type="radio" name="namesGaners" value="2">Роман</label>
		<label><input type="radio" name="namesGaners" value="3">Комедия</label>
		<label><input type="radio" name="namesGaners" value="4">Водевиль</label>
		</p>
		<p><input type="submit" value="Добавить"></p>
		<p><input name="c" value="true" hidden></p>
		</form> 
		</div>
	</div>

<br><br>
	<div class="tournament-info"> 
  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Редактировать жанр:</b></p>
      <select class="tournament-title3"  name="geners">
        <?
        $result = mysqli_query($connect, "SELECT * FROM geners");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="text" name="namee2" value=""></p>
		<p><input type="submit" value="Редактировать"></p>
		<p><input name="aa" value="true" hidden></p>
    </form>
  </div>


		<div class="tournament-title"> 
	  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Редактировать автора:</b></p>
      <select class="tournament-title3"  name="athors">
        <?
        $result = mysqli_query($connect, "SELECT * FROM athors");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p>Введите  ФИО автора</p>
		<p>	<input type="text" name="nameee1" value=""></p>
		<p>Введите  год рождения автора</p>
		<p><input type="text" name="nameee2" value=""></p>
		<p>Введите  год смерти автора</p>
		<p><input type="text" name="nameee3" value=""></p>
		<p><input type="submit" value="Редактировать"></p>
		<p><input name="bb" value="true" hidden></p>
		</form>
		</div>


		<div class="tournament-title"> 
  <div class="tournament-title21"> 
    <form action="1 laba.php" method="post">
      <p><b>Редактировать книгу:</b></p>
      <select class="tournament-title3"  name="books">
        <?
        $result = mysqli_query($connect, "SELECT * FROM books");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p>Введите название книги:</p>
		<p><input type="text" name="nameeee1" value=""></p>
		<p>Введите описание книги:</p>
		<p><input type="text" name="nameeee2" value=""></p>
		<p>Введите год написания книги:</p>
		<p><input type="text" name="nameeee3" value=""></p>
<!-- 		<p>Введите новое название жанра:</p>
		<p><input type="text" name="nameeee4" value="Название жанра"></p>
		<p>Введите новое название автора:</p>
		<p><input type="text" name="nameeee4" value="Название автора"></p> -->
		<p><input type="submit" value="Редактировать"></p>
		<p><input name="cc" value="true" hidden></p>
		</form>
		</div>
	</div>


		<div class="container">
  <div class="tournament-title21">
    <form action="1 laba.php" method="post">
      <p><b>Удалить жанр:</b></p>
      <select class="tournament-title3"  name="geners">
        <?
        $result = mysqli_query($connect, "SELECT * FROM geners");
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



		<div class="container">
  <div class="tournament-title21">
    <form action="1 laba.php" method="post">
      <p><b>Удалить автора:</b></p>
      <select class="tournament-title3"  name="athors">
        <?
        $result = mysqli_query($connect, "SELECT * FROM athors");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Удалить"></p> 
		<p><input name="bbb" value="true" hidden></p> 
		</form> 
		</div>		



	<div class="container">
  <div class="tournament-title21">
    <form action="1 laba.php" method="post">
      <p><b>Удалить книгу:</b></p>
      <select class="tournament-title3"  name="books">
        <?
        $result = mysqli_query($connect, "SELECT * FROM books");
        while ($row = mysqli_fetch_array($result)) {
          $s =  $row[1];
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
		<p><input type="submit" value="Удалить"></p> 
		<p><input name="ccc" value="true" hidden></p> 
		</form> 
		</div>	



		<div class="tournament-title21">
		<form action="1 laba.php" method="post">
		<p><b>Первый запрос:</b></p>
		<p><input type="submit" value="Вызвать"></p>
		<p><input name="aaaa" value="true" hidden></p>
		</form>
		</div>



		<div class="tournament-title21">
		<form action="1 laba.php" method="post">
		<p><b>Второй запрос:</b></p>
		<p><input type="submit" value="Вызвать"></p>
		<p><input name="bbbb" value="true" hidden></p>
		</form>
		</div>



		<div class="tournament-title21">
		<form action="1 laba.php" method="post">
		<p><b>Третий запрос:</b></p>
		<p><input type="submit" value="Вызвать"></p>
		<p><input name="cccc" value="true" hidden></p>
		</form>
		</div>

</body>
</html>