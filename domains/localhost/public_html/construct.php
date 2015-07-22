<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 29.05.2015
 * Time: 23:45
 */
require_once "lib/config.php";
require_once "Math/Complex2.php";

$a = new Math_Complex2(314, 101);
$a->add(new Math_Complex2(303, 6));
echo $a;
?>