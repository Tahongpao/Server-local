<?php
  error_reporting(E_ALL);
ini_set("error_log", "log.txt");
ini_set("log_errors", true);
fileatime("spoon");

if(@$_REQUEST['submit']) echo "Button push!";
?>

<form action="<?=$_SERVER['SCRIPT_NAME']?>">
    <input type="submit" name="submit" value="Go!">
</form>