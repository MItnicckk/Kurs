<?php
// session_start();
// if (!isset($_SESSION['font_size' ]) && isset($_COOKIE['font_size']))
// $_SESSION['font_size'] = $_COOKIE['font_size'];
// $font_size = $_SESSION['font_size'];
// echo $_COOKIE['font_size']; 
// echo $_COOKIE['Back'];



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


?>


<html>
<head>
  <meta charset = "utf-8">
  <title>Мой сайт</title>
</head>
  <link rel="stylesheet" href="static/style.css">
<body style = "background-color: <?php echo $_COOKIE['Back']; ?>" > 
<header>    
  <div class="logo">
        <svg  width="80" height="75" viewBox="0 0 0 0">
        </svg>
    </div>
    <nav>
      <ul class="menu__nav">
        <!-- <li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li> -->
        <li><a href="index.php">Главная</a></li>
        <li><a href="Dis.php">Выбрать дизайн</a></li>
      </ul>
    </nav>
</header>
<br><br>
  <div class="tournament-info3"> 
</!DOCTYPE html>
</body>
</html>


 <?php echo $font_size; ?> 





<br><br>
<div style="font-size: <?php echo $_COOKIE['font_size'];; ?>px">
   Text
</div>