<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.06.2015
 * Time: 20:46
 */

function myErrorHandler($errno, $msg, $file,$line){
    if(error_reporting() == 0) return;

    echo '<div style="border-style:inset; border-width:2">';
    echo "Произошла ошибка с кодом <b>$errno</b>!<br>";
    echo "Файл: <tt>$file</tt>, строка $line.<br>";
    echo "Текст ошибки: <i>$msg</i>";
    echo "</div>";
}

set_error_handler("myErrorHandler", E_ALL);
filemtime("spoon");

?>