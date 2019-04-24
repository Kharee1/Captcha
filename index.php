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
  <h3> Captcha Prompt!</h3>
  <h4> Enter Captcha With a Space</h4>
<style>
    .imgframe{
	background: blue;
    padding: 10px;
    border: 5px dashed black; }
    
    
    h1{
      text-align: justified;
    }
    h4{
      text-align: justified;
    }
</style>

<form autocomplete="off" action = "check.php" method= "post">
	<img src = "captcha.php" class = "imgframe" alt = "Captcha Image"/><br><br><br>

	<input type = "text" name = "captcha"/>
	<input type = "submit" value = "submit"/>
</form>