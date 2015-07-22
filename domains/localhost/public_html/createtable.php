<?php
include_once "mysql_connect.php";
mysql_query('CREATE TABLE people2 (id INT AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20),
INDEX i_firstname(firstname(10)),
name VARCHAR(40),
INDEX i_name(name(10)),
age INT,
INDEX i_age(age)
)')
or die ("MySQL error: ".mysql_error());
?>