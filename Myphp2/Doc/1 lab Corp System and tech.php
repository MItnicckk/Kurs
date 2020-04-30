<?php
$text1 = 'Директор';
setcookie("text1", $text1, time() + 3600 * 24 * 7);
// echo $text1;
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
				<!-- <li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li> -->
				<li><a href="../1 laba.php">Назад</a></li>
				<li><a href="../index.php">Выход</a></li>
				<!-- <li><a href="iniTestphp.php">Тест</a></li> -->
			</ul>
		</nav>
</header>
<br><br>


<form action='' method='post'>
<input type='submit' name='file_w' value='Подтвердить'>
</form>
<br>
<form action='' method='post'>
<input type='submit' name='file_' value='Отклонить'>
</form>

<?php




$filename = 'Captcha.xml';

			$text2 = $username;

			// file_put_contents($filename, $text2 . "\r\n", FILE_APPEND);
			// $f = file_get_contents($filename);
			// $f = explode("\r\n", $f);
			// $soucer = count($f);
$text2 = "Директор";

if (isset($_POST['file_w'])) {
$file="Документ.xml"; // имя файла
			file_put_contents($file, $text2 . "\r\n", FILE_APPEND);
			$f = file_get_contents($file);
			$f = explode("\r\n", $f);
			$text2 = "Директор";
}

if (isset($_POST['file_w'])) {
	$podpis = 1;
}

?>