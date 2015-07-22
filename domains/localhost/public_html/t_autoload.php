<?php
function __autoload($cache){
    echo "Запрос на загрузку классa $cache<br>";
    }
echo MyFileFind::$cache;
?>