<?php
echo "Начало програмы.<br>";
try {
    echo "Все, что имеет начало...<br>";

    throw new Exception("Hello!");
    echo "...имет конец";
}catch (Exception $e){
    echo " Исключение: {$e->getMessage()}<br>";
}
echo "Конец програмы.<br>";
?>