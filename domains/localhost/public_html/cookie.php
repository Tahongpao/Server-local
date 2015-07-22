<?php
$cherepinsky = "edrfdef";
setcookie("oleg[0]", $cherepinsky);
echo "{$_COOKIE['oleg'][0]}";
echo "\n";
echo "{$_REQUEST['oleg'][0][1]}";
?>