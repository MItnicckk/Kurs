<META http-equiv=content-type content="text/html; charset=UTF-8">
<?php
include("random.php");

$cap = $_COOKIE["captcha"]; 

function check_code($code, $cookie) 
{


	$code = trim($code);
	$code = md5($code);



session_start();
$cap = $_SESSION['captcha'];
$cap = md5($cap);
session_destroy();

	if ($code == $cap){return TRUE;}else{return FALSE;} 
	
}


	if (isset($_POST['go']))
	{

			if ($_POST['code'] == '')
			{
				exit("Ошибка: введите капчу!");
			}
			if (check_code($_POST['code'], $cookie))
			{
				echo "Ты правильно ввел капчу. Возьми с полки тортик, он твой."; 
			}
			else 
			{
				exit("Ошибка: капча введена неверно!"); 
			}
		}
	else 
	{
		exit("Access denied");
	}
	
?>