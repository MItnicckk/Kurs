<?
$fp = fopen('links.txt', 'a');
fwrite($fp, "index.php" ."\r\n");
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
  $id = opendir(getcwd() . "/css");
  while ($cat = readdir()) {
    if ($cat != '.' && $cat != '..')
      echo '<link rel="stylesheet" href="css/' . $cat . '">' . "\r\n";
  }
  ?>
  <title>Document</title>
</head>

<script type="text/javascript">
function incV(link) {
  var params = 'link=' + encodeURIComponent(link);
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
  var l = element.src;
  l = l.replace("minified", "original");
  l1 = element.id;
  incV(l1);
  var el = document.getElementById('contain');
  el.style.display = 'flex';
  var im = document.getElementById('maximized').firstElementChild;
  im.src = l;
}
</script>

<body>
  <div id="contain" onclick="cl()">
    <div id="maximized">
      <img src="http://localhost/denwer/lab4/gallery/minified/2.jpg" alt="big photo">
    </div>
    <div id="views"></div>
  </div>
  <header>
    <nav>
      <ul class="menu">
        <li><a href="catalog.php">Каталог</a></li>
      </ul>
    </nav>
  </header>
  <div class="upload-form">
    <form class="uploadFile" method="post" enctype="multipart/form-data" action="upl.php">
      <input type="file" name="filename"><br>
      <input type="submit" value="Загрузить"><br>
    </form>
  </div>
  <div class="mini">
    <h3>Галарея фотографий</h3>
  <?
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'library';

    $connect = mysqli_connect($server, $username, $password, $dbname);
    mysqli_select_db($connect, $dbname);

    $sql = "SELECT * FROM gallery ORDER BY views DESC";
    $sql = iconv('windows-1251', 'UTF-8', $sql);
    $result = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_array($result)) {
      $s = iconv('UTF-8', 'windows-1251', $row[3]);
      $s = str_replace("Z:/denwer/www/denwer/lab4/gallery/original/", "gallery/minified/", $s);
      echo '<img onclick="maximize(this)" src="' . $s . '" id=' . $row[0] . ' alt="pic">';
    }
  ?>
</div>

</body>
</html>