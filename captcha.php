<?php
session_start();
create_image();

function create_image(){
	$randchar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
	$randchar2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

	$captcha1 = substr(str_shuffle($randchar), 0, 6);
	$captcha2 = substr(str_shuffle($randchar2), 0, 3);
	$captcha .= $captcha1 . " " . $captcha2;


	$_SESSION["captcha"] = $captcha;
	

	//setting dimensions
	$width = 200;
	$height = 130;

	//creating image
	$pic = imagecreate($width, $height);

	//seetting some colors
	$white = imagecolorallocate($pic, 255, 255, 255);
	$black = imagecolorallocate($pic, 0, 0, 0);
	$orange = imagecolorallocate($pic, 204, 69, 0);

	//adding distrractions on caaptcha
	/*$linecolor = imagecolorallocate($pic, 0xCC, 0xCC, 0xCC);
	for($i=0; $i < 6; $i++) {
    	imagesetthickness($pic, rand(1,3));
    	imageline($pic, 0, rand(0,30), 120, rand(0,30), $linecolor);
  	}*/

	imagefill($pic, 0, 0, $orange); //creating background

	$font = "Roboto-Thin.ttf";
	imagettftext($pic, 25, 10, 40, 50, $black, $font, $captcha1);
	imagettftext($pic, 20, -15, 10, 70, $black, $font, $captcha2);


	header('Content-type: image/jpeg');

	imagejpeg($pic); //turn image to jpeg
	imagedestroy($pic); //clears cache
}

?>