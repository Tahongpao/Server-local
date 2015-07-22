<?php
require_once "Circle.php";

function moveSize(Share $obj){
    $obj->movBy(10,0);
    $obj->resizeBy(10);
}
$shape = new Circle();
moveSize($shape);

?>