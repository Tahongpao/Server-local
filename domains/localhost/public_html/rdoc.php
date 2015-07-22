<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 22.06.2015
 * Time: 17:41
 */
function func(){}
$obj = new ReflectionFunction("func");
echo "<pre>".$obj->getDocComment();
?>