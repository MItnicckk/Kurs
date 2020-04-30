<?php
  $id = $_GET['id'];

  $server = 'localhost'; 
  $username = 'mysql'; 
  $password = 'mysql'; 
  $dbname = 'Laba 11';

  $connect = mysqli_connect($server, $username, $password, $dbname);
  mysqli_select_db($connect, $dbname);

  $sql = "SELECT img FROM gallery WHERE `ID` = " . $id;
  $sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  echo $row[0];

  $sql = "UPDATE gallery SET img = img + 1 WHERE `ID` = " . $id;
  $sql = iconv('windows-1251', 'UTF-8', $sql);
  $result = mysqli_query($connect, $sql);
?>