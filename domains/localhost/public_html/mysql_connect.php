<?php
$user = "root";
$pass = "412bolas";
$db = "mytestdb";
mysql_connect("localhost", $user, $pass)
    or die("Could not connect: ".mysql_error());
@mysql_query("CREATE DATABASE $db");
mysql_select_db($db)
    or die ("Could not select database: ".mysql_error());
?>
