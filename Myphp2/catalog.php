

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
  <?php
	function deldir($dir) {
    if ($cats = glob($dir."/*")) {
       foreach($cats as $cat) {
         if (is_dir($cat)) {
					 deldir($cat);
				 } else {
					 unlink($cat);
				 }
       }
		 }
		 rmdir($dir);
	 }
	deldir('tesst');
  // rmdir('tesst');

  $fp = fopen('links.txt', 'a');
  fwrite($fp, "catalog.php" ."\r\n");
  fclose($fp);

  $id = opendir(getcwd());
  while ($cat = readdir()) {
    echo $cat . '<br>';
  }
  ?>
  <br>
<a href="index.php">Назад</a>

</body>
</html>
