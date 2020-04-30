<?php
  print_r($_FILES);
?>
<?php
  $uploadfile = "images/".$_FILES['somename']['name'];
  move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);
?>