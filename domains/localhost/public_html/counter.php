<?php
$file = "counter.dat";
fclose(fopen($file, "a+b"));
$f = fopen($file,"r+t");
flock($f, LOCK_EX);
$count = fread($f,1000);
$count++;
ftruncate($f,0);
fseek($f, 0, SEEK_SET);
fwrite($f, $count);
fclose($f);
echo $count;
?>