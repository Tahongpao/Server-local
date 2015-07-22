<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.05.2015
 * Time: 13:46
 */
class TestLib{
    const POW = 2;
    static $sumLength = 0;
    static function length($s){
        $len = strlen($s);
        self::$sumLength+=$len;
        return $len;
    }
    static function poweredLength($s){
        $len = self::length($s);
        return pow($len, self::POW);
    }
}
?>