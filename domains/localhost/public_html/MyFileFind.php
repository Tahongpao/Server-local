<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.05.2015
 * Time: 14:14
 */
@require_once "File/Find.php";

class MyFileFind{
    const EXT = "php";
    static $cache = array();
    function readdir($dir){
        if(isset(self::$cache[$dir])) return self::$cache[$dir];
        return self::$cache[$dir] = File_Find::glob(".*", $dir, self::EXT);
    }
}
echo "File ".__FILE__." loader.<br>";
?>