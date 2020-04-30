


<?php
if (!$_COOKIE[counter]) $counter  =  1;
else $counter  =  ++$_COOKIE['counter'];
setcookie("counter", $counter, time() + 60);
echo "Визит страницы: $counter";

// <!-- C:\OSPanel\modules\php\PHP-5.5\php.ini -->