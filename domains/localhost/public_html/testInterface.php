<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.06.2015
 * Time: 23:14
 */
require_once "exceptions.php";
try {
    printDocument();
    }catch (IFileException $e){
    echo "Файловая ошибка: {$e->getMessage()}.<br>";
    }catch (Exception $e){
    echo "Неивестьное исключение: <pre>", $e, "</pre>";
}
function printDocument(){
    $printer = "//./printer";
    if (!file_exists($printer))
        throw new NetPrinterWriteException($printer);
}
?>