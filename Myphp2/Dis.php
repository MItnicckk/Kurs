<?php


session_start();
$font_size = $_POST['font_size'];
$backs = $_POST['back'];
// $_SESSION['font_size'] = $font_size;
setcookie('font_size', $font_size, time() + 3600 * 24 * 7);
setcookie('Back', $backs, time() + 3600 * 24 * 7);
// echo $font_size;
// echo $backs;







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
<header>    
  <div class="logo">
        <svg  width="80" height="75" viewBox="0 0 0 0">
        </svg>
    </div>
    <nav>
      <ul class="menu__nav">
        <!-- <li><a>Добро пожаловать_<b><?php echo $username ?></b>_!</a></li> -->
        <li><a href="index.php">Главная</a></li>
        <li><a href="Dis2.php">Просмотр</a></li>
      </ul>
    </nav>
</header>
<br><br>
  <div class="tournament-info3"> 
</!DOCTYPE html>
</html>

<br><br><br>
  
<form method="post">
  <center>
  <p>Choose text</p>
    <select name="font_size">
        <?php for($i = 1; $i <= 30; $i++) : ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <input type="submit" value="___Ok___">
  </center>
</form>
      <?php
            $font_size = 12;
                if(isset($_POST['font_size']))
                    $font_size = 0 === (int) $_POST['font_size'] ? $font_size : (int) $_POST['font_size'];
      ?>  
    <br>
        <div style="font-size: <?php echo $font_size; ?>px">
           Text
        </div>
    <br>





<form method="post"><center>
<p>Choose background</p>
<select name="back">
        <?php $arrayback = array("white", "red", "green");
        $count = count($arrayback);
        for ($i = 0; $i < $count; $i++){
          $s = $arrayback[$i];
           echo '<option>' . $s . '</option>';
        }
        ?>
</select>
<input type="submit" value="___Ok___">
</center>
</form> 
    <?php 
        $backs = $_POST['back'];
       
        echo 'You choose "' . $backs . '"';
    ?>




<br>


<body style = "background-color: <?php echo $backs; ?>" > 
</body>
