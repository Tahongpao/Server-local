<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 29.05.2015
 * Time: 23:34
 */
class Math_Complex2{
    public $re, $im;
    function __construct($re, $im){
        $this->re = $re;
        $this->im = $im;
    }
    function add(Math_Complex2 $y){
        $this->re +=$y->re;
        $this->im +=$y->im;

    }
    function __toString(){
        return "({$this->re}, {$this->im})";
    }
}
?>