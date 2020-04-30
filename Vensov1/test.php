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
        <li><a href="Dis.html">Главная</a></li>
        <li><a href="Dis2.html">ИЗО</a></li>

      <!--  <li><a href="iniTestphp.php">Тест</a></li> -->
      </ul>
    </nav>
</header>


<?php

$f = fopen("journal.txt",'a+');

fwrite($f, date('Y-m-d H:i:s')."\n");
fwrite($f, $_SERVER['REMCIE_ADDR']."\n");
fwrite($f, $_SERVER['HIIP_REFERER']."\n");
fclose($f) ;
?>


<h1> Главная страница сайта </h1>

Нам важна ее <a href="journal.php"> noceщаемость! </a> <br />

Ha нас ссылаются <a href="site1.html">сайт1 </a> и <a href="site1.html">сайт2 </a>



<?php
$viaita = file('journal.txt');
?>
<table>
    <tr>
      <th>Время</th>
      <th>IP-aдpec</th>
      <th>Откуда</th>
    </tr>
            <?php
            $n = count($visits);
            for ($i = 0; $i < $n; $i += 3) {
            echo '<tr>';
            echo '<td>'. $viaits[$i+0]. '</td>';
            echo '<td>'. $visita[$i+1]. '</td>';
            echo '<td>'. $visit5[$i+2]. '</td>';
            echo '</tr>';
            }
            ?>
</table>














<!-- <?php
if($_FILES["filename"]["size"] > 1024*3*1024)
  {
  echo ("Размер файла превышает три мегабайта");
  exit;
  }
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
    {
    move_uploaded_file($_FILES["filename"]["tmp_name"], "d:".$_FILES["filename"][name]);
    } else 
    {
    echo("Ошибка загрузки файла");
}
?>

<?php

// Пути загрузки файлов
$path = 'i/';
$tmp_path = 'tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpg');
// Максимальный размер файла
$size = 1024000;

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Проверяем тип файла
 if (!in_array($_FILES['userfile']['type'], $types))
  die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');

 // Проверяем размер файла
 if ($_FILES['userfile']['size'] > $size)
  die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');

 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['userfile']['tmp_name'], $path . $_FILES['userfile']['name']))
  echo 'Что-то пошло не так';
 else
 echo 'Загрузка удачна <a href="' . $path . $_FILES['userfile']['name'] . '">Посмотреть</a> ' ;
}

?> -->













  $size = 720000;
  $types = array('image/jpeg', 'image/jpg');

  if (!in_array($_FILES['pic']['type'], $types))
  {
    echo "Запрещённый тип файла.<a>Попробуйте другой файл.</a>";
  }
      else
      if ($_FILES['pic']['size'] > $size)
      echo "Слишком большой размер файла.<a>Попробуйте другой файл.</a>"; 
          else
          if  (move_uploaded_file($_FILES['pic']['tmp_name'], "images/".basename($_FILES['pic']['name'])))
          {
          echo "Файл успешно загружен";
          }
    {
            $pieces = explode(".", $val);

            if ($pieces[1] == "jpg" || $pieces[1] == "jpeg")
            {
                list($width, $height) = getimagesize("images/".$val);
               
                    if($width>$height)
                    {
                        $image = 'width = "200"';
                    }
            else
                    {
                        $image = 'height = "200"';
                    }



            echo
            '<figure class="vkl3">
  <br id="vkl3"/>
  <a href="#vkl3"><div style="float:left;width:210px;height:220px; border:1px solid red;" align="center">
                <img '.$image.' src="images/'.$val.'" /></a>
                <br/>
                <a href="#close"><b style="font:10px Verdana;">'.$val.'</b></a>
            </div></figure>';

            
            }

    }