<?php
$fnames = glob("*.{gif,jpg,png}", GLOB_BRACE);
$fnames = $fnames[mt_rand(0, count($fnames)-1)];
$size=getimagesize($fnames);
header("Content-type: {$size['mime']}" );
echo file_get_contents($fnames);
?>