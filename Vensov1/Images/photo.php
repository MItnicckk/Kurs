
    <form action="photo.php" enctype="multipart/form-data" method="post">
    <input type="file" name="pic">
    <input type="submit">
	</form>
 
 
<?php
           if (move_uploaded_file($_FILES['pic']['tmp_name'], "images/".basename($_FILES['pic']['name'])))
    {
        echo "файл успешно загружен";
    }
    $dir = "images/";
    $files = scandir($dir);
    
    foreach($files as $key=>$val)
    {
    
        if($val != "." && $val != "..")
        {
            $pieces = explode(".", $val);
 
            if(strtolower ($pieces[1])== "jpg" || strtolower ($pieces[1])== "jpeg")
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
            '<div style="float:left;width:210px;height:220px; border:1px solid red;" align="center">
                <img '.$image.' src="images/'.$val.'" />
                <br/>
                <b style="font:10px Verdana;">'.$val.'</b>
            </div>';
            }
        }
    }
?>