<?php
echo "Начало програмы.<br>";
set_error_handler("handler");
{
    echo "Все, что имеет начало...<br>";
    trigger_error("Hello!");
    echo "...имет конец. <br>";
}
    echo "Конец програмы.<br>";

    function handler($num, $str){
       echo "Ошибка $str<br>";
        exit();
    }
?>