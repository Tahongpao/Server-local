<?php
require_once "Circle.php";

$shape =new Circle();
sleep(1); echo "Прошло некоторое время ...";
$shape->movBy(101, 6);
sleep(1); echo "Прошло некоторое время ...";
$shape->resizeBy(2.0);
sleep(1); echo "Прошло некоторое время ...";
?>