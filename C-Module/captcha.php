<?php

session_start();

header("Content-Type: image/png");

$height = 20;
$lineY = $height / 2;
$image = imagecreatetruecolor(100, $height);

$lineColor = imagecolorallocate($image, 255,0,0);
$textColor = imagecolorallocate($image, 0,0,0);

imageline($image,0, $lineY,200, $lineY, $lineColor);

$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
$len = strlen($letters);
$letter = "";
for ($i = 0; $i < 6; $i++) $letter .= $letters[rand(0, $len - 1)];

imagestring($image, 5,  25, 2, $letter, $lineColor);
$_SESSION['captcha_string'] = $letter;

imagepng($image);
imagedestroy($image);


//imagepng($image, "image.png");