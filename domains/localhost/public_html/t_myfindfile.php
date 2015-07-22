<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.05.2015
 * Time: 15:34
 */

require_once "lib/config.php";
@require_once "pear/config.php";
require_once "MyFileFind.php";

echo "<pre>Содержимое корневог каталога:\n</pre>";
print_r(MyFileFind::readdir("/"));
print_r(MyFileFind::readdir("/"));
echo "Вот что в итоге находится в кеше модуля:\n";
print_r(MyFileFind::$cache);
?>