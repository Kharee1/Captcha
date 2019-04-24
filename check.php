<?php
session_start();

$pause = 5;


if (($captcha != $_SESSION["captcha"]))
	{
		echo "Invalid captcha. Try Again. <br>";
		header ("refresh: $pause; url = index.php");
		exit();
	}

else 
	{
		echo "Correct captcha. Try another!"
		header ("refresh: $pause; url = index.php");
		exit();	
	}
	


	
?>