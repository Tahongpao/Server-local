<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 30.05.2015
 * Time: 0:07
 */
require_once "lib/config.php";
require_once "File/Logger0.php";
for ($n=0; $n<10; $n++){
    $logger = new File_Logger0("test$n", "test.log");
    $logger->log("Hello!");
    $logger->close();
}

?>