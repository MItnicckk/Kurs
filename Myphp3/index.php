<?php
include "Enc.class.php";


//$keys = Enc::get_keys();
//var_dump($keys);

$ob = new Enc();

if ($_POST["aa"] == 'true') {



$str = $_POST['namee2']; 
echo "<h2>".$str."</h2>";

$cipher = $ob->my_enc($str);
echo "<p style='font-size:25px'>Шифр:  ".base64_encode($cipher)."</p>";

$str_d = $ob->my_dec($cipher);
echo "<p style='font-size:25px'>Исходная строка:  ".$str_d."</p>";
}
?>
  <div class="tournament-title21"> 
    <form action="index.php" method="post">
      <p><b>Зашифровать сообщение:</b></p>
		<p><input type="text" name="namee2" value=""></p>
		<p><input type="submit" value="Изменить"></p>
		<p><input name="aa" value="true" hidden></p>
    </form>
  </div>