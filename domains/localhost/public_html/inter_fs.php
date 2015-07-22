<?php
require_once "lib/config.php";
require_once "FS.php";

$d = new FS_Directory("C:/windows");
foreach ($d as $path=>$entry){
    if($entry instanceof FS_File){
        echo "<tt>$path</tt>:".$entry->getSize()."<br>";
    }
}
?>