<?php
echo "<h1>First page(HTTP):</h1>";
echo file_get_contents("http://php.net");
echo "<h1>Second page(ftp):</h1>";
echo file_get_contents("ftp://aha.ru/");
?>