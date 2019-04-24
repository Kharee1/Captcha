<?php

session_start();
	//print_r($_POST);
	if(isset($_POST) & !empty($_POST)){
		if($_POST['captcha']==$_SESSION['captcha']){
			echo "Correct captcha";
		}else{
			echo "Incorrect captcha";
		}
	}
?>

<style>
    .imgframe{
	background: blue;
    padding: 10px;
    border: 5px dashed black; }
</style>

<form action = "check.php" method= "post">
	<img src = "captcha.php" class = "imgframe" alt = "Captcha Image"/><br><br><br>
	<input type = "text" name = "captcha"/>
	<input type = "submit" value = "submit"/>
</form>