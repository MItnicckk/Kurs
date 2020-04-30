<?php
session_start();
if ($_SESSION['count']) {
  echo 'Количество посещений' . $_SESSION['count'];
} else {
  echo 'Добро пожаловать';
}


//
//
//
//
//
//
//

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Library';

$connect = mysqli_connect($server, $username, $password, $dbname);
mysqli_select_db($connect, $dbname);

if ($_POST['fm'] == 'genre') {
  $name = $_POST['name'];
  $sql = "INSERT INTO `genre` (`Название жанра`)
          VALUES ('{$name}')";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fm'] == 'author') {
  $name = $_POST['name'];
  $birth = $_POST['birth'];
  $death = $_POST['death'];
  $sql = "INSERT INTO `authors` (`ФИО`, `Год рождения`, `Год смерти`)
          VALUES ('{$name}', '{$birth}', '{$death}')";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fm'] == 'book') {
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $writen = $_POST['writen'];
  $author = $_POST['author'];
  $genre = $_POST['genre'];
  $sql = "INSERT INTO `books` (`Название`, `Описание`, `Год написания`, `id автора`, `id жанра`)
          VALUES ('{$name}', '{$desc}', '{$writen}', '{$author}', '{$genre}')";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fd'] == 'genre') {
  $genre = $_POST['genre'];
  $sql = "DELETE FROM genre WHERE `Название жанра` = '{$genre}'";
  //$sql = iconv('utf8', 'windows-1251', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fd'] == 'author') {
  $author = $_POST['author'];
  $sql = "DELETE FROM authors WHERE `ФИО` = '{$author}'";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fd'] == 'book') {
  $book = $_POST['book'];
  $sql = "DELETE FROM books WHERE `Название` = '{$book}'";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}


if ($_POST['fe'] == 'book') {
  $book = $_POST['book'];
  $desc = $_POST['description'];
  $writen = $_POST['writen'];
  $genre = $_POST['genre'];
  $author = $_POST['author'];

  $sql = "UPDATE books SET `Описание` = '{$desc}', `Год написания` = '{$writen}',
    `id жанра` = '{$genre}', `id автора` = '{$author}' WHERE `Название` = '{$book}'";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fe'] == 'genre') {
  $genre = $_POST['genre'];
  $new = $_POST['name'];

  $sql = "UPDATE genre SET `Название жанра` = '{$new}' WHERE `Название жанра` = '{$genre}'";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}

if ($_POST['fe'] == 'author') {
  $author = $_POST['author'];
  $birth = $_POST['birth'];
  $death = $_POST['death'];

  $sql = "UPDATE authors SET `Год рождения` = '{$birth}', `Год смерти` = '{$death}' WHERE `ФИО` = '{$author}'";
  //$sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
}
if ($_POST['sel'] == 1) {
echo "2) Определить количество книг каждого автора. Вывести имя автора и количество книг. <br><table border=1px>
<tr>
  <th>��������</th>
  <th>��� ���������</th>
  </tr>";

  $sql = "SELECT `Название`, `Год написания` FROM books WHERE `id автора` = 1 ORDER BY `Год написания` DESC";
  $sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $s = iconv('UTF-8', 'windows-1251', $row[0]);
    $s1 = iconv('UTF-8', 'windows-1251', $row[1]);
    echo '<tr><td>' . $s . '</td><td>'. $s1 . '</td></tr>';
  }
  echo '</table> <br>';
}
if ($_POST['sel'] == 2) {
  echo "3) Найти все книги, написанные Агатой Кристи и отсортировать их по годам написания, начиная с самого последнего. Вывести название книги и год написания. <br>
  <table border=1px>
  <tr>
    <th>���</th>
    <th>���������� ����</th>
    </tr>";

    $sql = "SELECT `authors`.`ФИО`, COUNT(`Название`) FROM books LEFT JOIN `authors` ON `books`.`id автора` = `authors`.ID GROUP BY `id автора`";
    $sql = iconv('windows-1251', 'UTF-8', $sql);
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
      $s = iconv('UTF-8', 'windows-1251', $row[0]);
      $s1 = iconv('UTF-8', 'windows-1251', $row[1]);
      echo '<tr><td>' . $s . '</td><td>'. $s1 . '</td></tr>';
    }
    echo '</table> <br>';
}
if ($_POST['sel'] == 3) {
    echo "8) Вывести все жанры, в которых нет ни одной книги. <br>
    <table border=1px>
    <tr>
      <th>Название жанра</th>
      </tr>";

      $sql = "SELECT `Название жанра`FROM genre LEFT JOIN `books` ON `genre`.ID = `books`.`id жанра` WHERE `books`.`Название` IS NULL";
      $sql = iconv('windows-1251', 'UTF-8', $sql);
      $result = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $s = iconv('UTF-8', 'windows-1251', $row[0]);
        echo '<tr><td>' . $s . '</td></tr>';
      }
      echo '</table> <br>';
}

//TODO :: ����� ����� ��������

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>lab 2</title>
</head>
<body>
  <div class="container">
    <div class="d1">
      <form action="index.php" method="post">
        <p><b>Добавить жанр:</b></p>
        <p><input type="text" name="name" value="Название"></p>
        <input name="fm" type="hidden" value="genre">
        <p><input type="submit" value="Добавить"></p>
      </form>
    </div>
    <div class="d1">
      <form action="index.php" method="post">
        <p><b>Добавить автора:</b></p>
        <p><input type="text" name="name" value="ФИО"></p>
        <p><input type="text" name="birth" value="Год рождения"></p>
        <p><input type="text" name="death" value="Год смерти"></p>
        <input name="fm" type="hidden" value="author">
        <p><input type="submit" value="Добавить"></p>
      </form>
    </div>
    <div class="d1">
      <form action="index.php" method="post">
        <p><b>Добавить книгу:</b></p>
        <p><input type="text" name="name" value="Название"></p>
        <p><input type="text" name="description" value="Описание"></p>
        <input name="fm" type="hidden" value="book">
        <p><input type="text" name="writen" value="Год написания"></p>
        <p>Жанр:</p>
        <select name="genre">
          <?
          $result = mysqli_query($connect, "SELECT * FROM genre");
          $i = 1;
          while ($row = mysqli_fetch_array($result)) {
            //$s = iconv('UTF-8', 'windows-1251', $row[1]);
            echo '<option value="'. $i.'">' . $s . '</option>';
            $i++;
          }
          ?>
        </select>
        <p>Автор:</p>
        <select name="author">
          <?
          $result = mysqli_query($connect, "SELECT * FROM authors");
          $i = 1;
          while ($row = mysqli_fetch_array($result)) {
            //$s = iconv('UTF-8', 'windows-1251', $row[1]);
            echo '<option value="'. $i.'">' . $s . '</option>';
            $i++;
          }
          ?>
        </select>
        <p><input type="submit" value="Добавить"></p>
      </form>
    </div>
  </div>

<br><br>
<br><br>


<div class="container">
  <div class="d1">
    <form action="index.php" method="post">
      <p><b>Редактировать жанр:</b></p>
      <select name="genre">
        <?
        $result = mysqli_query($connect, "SELECT * FROM genre");
        while ($row = mysqli_fetch_array($result)) {
          //$s = iconv('UTF-8', 'windows-1251', $row[1]);
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
      <p><input type="text" name="name" value="Новое название"></p>
      <input name="fe" type="hidden" value="genre">
      <p><input type="submit" value="Редактировать"></p>
    </form>
  </div>
  <div class="d1">
    <form action="index.php" method="post">
      <p><b>Редактировать автора:</b></p>
      <select name="author">
        <?
        $result = mysqli_query($connect, "SELECT * FROM authors");
        while ($row = mysqli_fetch_array($result)) {
          //$s = iconv('UTF-8', 'windows-1251', $row[1]);
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
      <p><input type="text" name="birth" value="Год рождения"></p>
      <p><input type="text" name="death" value="Год смерти"></p>
      <input name="fe" type="hidden" value="author">
      <p><input type="submit" value="Редактировать"></p>
    </form>
  </div>
  <div class="d1">
    <form action="index.php" method="post">
      <p><b>Редактировать книгу:</b></p>
      <input name="fe" type="hidden" value="book">
      <p>Название:</p>
      <select name="book">
        <?
        $result = mysqli_query($connect, "SELECT * FROM books");
        while ($row = mysqli_fetch_array($result)) {
          //$s = iconv('UTF-8', 'windows-1251', $row[0]);
          echo '<option>' . $s . '</option>';
        }
        ?>
      </select>
      <p><input type="text" name="description" value="Описание"></p>
      <p><input type="text" name="writen" value="Год написания"></p>
      <p>Жанр:</p>
      <select name="genre">
        <?
        $result = mysqli_query($connect, "SELECT * FROM genre");
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
          //$s = iconv('UTF-8', 'windows-1251', $row[1]);
          echo '<option value="'. $i.'">' . $s . '</option>';
          $i++;
        }
        ?>
      </select>
      <p>Автор:</p>
      <select name="author">
        <?
        $result = mysqli_query($connect, "SELECT * FROM authors");
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
          //$s = iconv('UTF-8', 'windows-1251', $row[1]);
          echo '<option value="'. $i.'">' . $s . '</option>';
          $i++;
        }
        ?>
      </select>
      <p><input type="submit" value="Редактировать"></p>
    </form>
  </div>

</div>

<br><br>
<br><br>


  <div class="container">
    <div class="d1">
      <form action="index.php" method="post">
        <p><b>Удалить жанр:</b></p>
        <select name="genre">
          <?
          $result = mysqli_query($connect, "SELECT * FROM genre");
          while ($row = mysqli_fetch_array($result)) {
            //$s = iconv('UTF-8', 'windows-1251', $row[1]);
            echo '<option>' . $s . '</option>';
          }
          ?>
        </select>
        <input name="fd" type="hidden" value="genre">
        <p><input type="submit" value="Удалить"></p>
      </form>
    </div>
    <div class="d1">
      <form action="index.php" method="post">
        <p><b>Удалить автора:</b></p>
        <select name="author">
          <?
          $result = mysqli_query($connect, "SELECT * FROM authors");
          while ($row = mysqli_fetch_array($result)) {
            //$s = iconv('UTF-8', 'windows-1251', $row[1]);
            echo '<option>' . $s . '</option>';
          }
          ?>
        </select>
        <input name="fd" type="hidden" value="author">
        <p><input type="submit" value="Удалить"></p>
      </form>
    </div>
    <div class="d1">
      <form action="index.php" method="post">
        <p><b>Удалить книгу:</b></p>
        <input name="fd" type="hidden" value="book">
        <p>Название:</p>
        <select name="book">
          <?
          $result = mysqli_query($connect, "SELECT * FROM books");
          while ($row = mysqli_fetch_array($result)) {
            //$s = iconv('UTF-8', 'windows-1251', $row[0]);
            echo '<option>' . $s . '</option>';
          }
          ?>
        </select>
        <p><input type="submit" value="Удалить"></p>
      </form>
    </div>

  </div>
  <br><br>
  <br><br>

  <div class="container">
    <div class="d1">
    <form action="index.php" method="post">
        <p><b>Запрос:</b></p>
        <input name="fs" type="hidden" value="asd">
        <p>Выбор запроса:</p>
        <select name="sel">
          <option value="1">2 запрос</option>
          <option value="2">3 запрос</option>
          <option value="3">8 запрос</option>
        </select>
        <p><input type="submit" value="Добавить"></p>
      </form>
    </div>
  </div>

</body>
</html>
