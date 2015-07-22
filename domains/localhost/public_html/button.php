<?php
$string = $_SERVER['QUERY_STRING'];
if(!$string) $string = "Hello, world!";
$im = imagecreatefromjpeg("3.jpg");
$color = imagecolorallocate($im, 0, 0, 0);
$px = (imagesx($im)+6.5*strlen($string))/2;
imagestring($im, 3, $px, 100, $string, $color);
header("Content-type: image/png");
imagepng($im);
imagedestroy($im);
?>