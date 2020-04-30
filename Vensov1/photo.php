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

<!DOCIYPE html PUBLIC "-//W3C//DID XHIML 1.0 Transitional//EN"
"http://www.w3.org/IR/xhtml1/DID/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/l999/xhtml")>
<style type="text/css">
.popup {width: 200px; cursor:pointer;}
.popup:focus {width: 400px;}
</style>
<head>
	<meta charset = "utf-8">
	<title>Мой сайт</title>
</head>
	<link rel="stylesheet" href="static/style.css">
<body style = "background-image: url(static/Фон.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100%" >
<header>

		<nav>
			<ul class="menu__nav">
				<li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li>
				<li><a href="index.php">Выход</a></li>
				<!-- <li><a href="iniTestphp.php">Тест</a></li> -->
			</ul>
		</nav>
</header>
<br><br>

<script type="text/javascript">
function incV(id) {
  var params = 'id=' + encodeURIComponent(id);
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
   if (req.readyState == XMLHttpRequest.DONE) {
      if (req.status == 200) {
          document.getElementById("views").innerHTML = req.responseText + ' просмотров фотографии';
      }
    }
  }
  req.open('GET', 'incViews.php?' + params, true);
  req.send(params);
}

function cl() {
  var el = document.getElementById('contain');
  el.style.display = 'None';
}

function maximize(element) {
  l1 = element.id;
  incV(l1);
}
</script>

    <form action="photo.php" enctype="multipart/form-data" method="post">
    <input type="file" name="pic">
    <input type="submit">
</form>
 <br>
 
 <?php

$filename = 'Users.txt';
$text0 = '___';
$text1 = $username;
$text2 = '___';
file_put_contents($filename, $text0, FILE_APPEND);
file_put_contents($filename, $text1, FILE_APPEND);
file_put_contents($filename, $text2, FILE_APPEND);


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


	$size = 720000;
	$types = array('image/jpeg', 'image/jpg');

	if (!in_array($_FILES['pic']['type'], $types))
	{
		echo "Запрещённый тип файла.<a>Попробуйте другой файл.</a>";
		echo "<br />";
		echo "<br />";
	}
			else
			if ($_FILES['pic']['size'] > $size) 
			{
				if (move_uploaded_file($_FILES['pic']['tmp_name'], "images/".basename($_FILES['pic']['name'])))
					{
					echo "Файл успешно загружен";
					echo "<br />";
					echo "<br />";
					}
			}
			else
			if ($_FILES['pic']['size'] < $size)
			{
				if (move_uploaded_file($_FILES['pic']['tmp_name'], "ImagesSmall/".basename($_FILES['pic']['name'])))
					{
					echo "Файл успешно загружен";
					echo "<br />";
					echo "<br />";
					}
			}

		if ($_FILES['pic']['size'] > $size) {
		$link = "C:/ospanel/domains/Myphp/Images/".($_FILES['pic']['name']);
				if (in_array($_FILES['pic']['type'], $types))
				{
					$sql = ("INSERT INTO `gallery` (`Img`) VALUES ('{$link}')");
					$result = mysqli_query($connect,$sql);
					
				}
		}
		else
		if ($_FILES['pic']['size'] < $size) {
		$link = "C:/ospanel/domains/Myphp/ImagesSmall/".($_FILES['pic']['name']);
				if (in_array($_FILES['pic']['type'], $types))
				{
					$sql = ("INSERT INTO `gallery` (`Img`) VALUES ('{$link}')");
					$result = mysqli_query($connect,$sql);
				}
		}


    
    $dir = "images/";
    $files = scandir($dir);
    $i = 0;
    
    foreach($files as $key=>$val)
    {
            $pieces = explode(".", $val);

            if ($pieces[1] == "jpg" || $pieces[1] == "jpeg")
            {
                list($width, $height) = getimagesize("images/".$val);
               
		                if($width>$height)
		                {
		                    $image2 = 'width = "200"';
		                }
						else
		                {
		                    $image2 = 'height = "200"';
		                }



$i++;
            echo
            '<div style="float:left;width:400px;height:225px; border:1px ;" align="center">
                <img id = '.$i.' onclick = "maximize(this)" '.$image2.' src="images/'.$val.'" class="popup" tabindex="1" />
                <br/>
                <b style="font:10px Verdana;">'.$val.'</b>
            </div>';

            }

    }


    $dir = "imagesSmall/";
    $files = scandir($dir);
    $i = 0;
    
    foreach($files as $key=>$val)
    {
            $pieces = explode(".", $val);

            if ($pieces[1] == "jpg" || $pieces[1] == "jpeg")
            {
                list($width, $height) = getimagesize("imagesSmall/".$val);
               
		                if($width>$height)
		                {
		                    $image2 = 'width = "200"';
		                }
						else
		                {
		                    $image2 = 'height = "200"';
		                }


$a++;
$a=$i+$a;
            echo
            '<div style="float:left;width:400px;height:225px; border:1px ;" align="center">
                <img id = '.$a.' onclick = "maximize(this)" '.$image2.' src="imagesSmall/'.$val.'" class="popup" tabindex="1" />
                <br/>
                <b style="font:10px Verdana;">'.$val.'</b>
            </div>';

            }

    }









?>