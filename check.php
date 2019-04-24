<?php
session_start();

$pause = 3;


if($_POST['captcha']!=$_SESSION['captcha'])
	{
		echo "Invalid captcha.<br>";
		header ("refresh: $pause; url = index.php");
		exit();
	}
 
if($_POST['captcha']==$_SESSION['captcha'])
  {
    echo "Correct captcha. Try another!<br>";
    header("refresh: $pause; url = index.php");
    exit();
  }  
  
?>