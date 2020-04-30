


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
        <li><a href="Upload.html">ИЗО</a></li>
        <!-- <li><a href="test.php">Test</a></li> -->
        <!-- <li><a href="dis.php">Дизайн</a></li> -->
        <!-- <li><a href="1 laba.php">View</a></li> -->
        <li><a href="view.php">Просмотр</a></li>
        <li><a href="Registr.php">Регистрация</a></li>
        <li><a href="Log.php">Вход</a></li>
        <!-- <li><a href="iniTestphp.php">Тест</a></li> -->
      </ul>
    </nav>
</header>



<?php
// if ($_FILES['userfile'][error]>0)
// {
//     echo '<p>Ошибка:</p>';

//     switch ($_FILES['userfile'][error]) {
//       case 1:
//         echo "Размер файла больше допустимого (Upload_max_filesize)";
//         break;
//       case 2:
//         echo "Размер файла больше допустимого (max_file_size)";
//         break;
//       case 3:
//         echo "Загружено только часть файла";
//         break;
//       case 4:
//         echo "Файл не был загружен";
//         break;
//       case 6:
//         echo "Загрузка не возможна: не задан временный каталог";
//         break;
//       case 7:
//         echo "Загрузка не выполнена: невозможна запись на диск";
//         break;
//     }
    
//     exit();
// }

$path = 'i/';

$types = array('image/gif', 'image/png', 'image/jpeg');

if (!in_array($_FILES['userfile']['type'], $types))
echo "Запрещённый тип файла.";

$upfile = 'Uploads'. $_FILES['userfile']['name'];

if (is_uploaded_file($_FILES['userfile']['tmp_name']))
{
    if (! move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
    {
      echo "Невзможно переместить файл в каталог назначения";
      exit();
    }
}

echo "<p>Файл успешно загружен,</p>";
echo "Имя файла: " . $_FILES['userfile'][name] . '<br />';


echo "Содержимое загруженного файла: <br /> <hr />";




   if($_FILES["userfile"]["size"] > 62*3*62)
   {
     echo ("Размер файла превышает 3 мегабайта");
     exit;
   }
   if(copy($_FILES["userfile"]["tmp_name"],"./upload/".$_FILES["userfile"]["name"]))
   {
      print "<img src='upload/".$_FILES["userfile"]["name"]."'/><br/>";
      $fname=explode(".",$_FILES["userfile"]["name"]);
      print "Имя файла: ".$fname[0]."<br/>";
      print "Размер файла: ".$_FILES['userfile']['size']."<br/>" ;
      print "Тип файла: ".$_FILES['userfile']['type']."<br/>";
 
   }
?>



<br>
<a href="Upload.html">Загрузить другой файл</a>



</body>
</html>