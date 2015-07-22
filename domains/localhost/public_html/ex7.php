<?php
$str = "Hello, this <b>world</b> is bold!";
$re = '|<(\w+) [^>]* > (.*) </\1>|xs';
preg_match($re, $str, $prockets) or die("Net tegow!");
echo htmlspecialchars("'$prockets[2]' obramleno tegow '$prockets[1]'");

?>