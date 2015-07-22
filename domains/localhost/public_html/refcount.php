<?php
class   Father{
    public $children = array();
    function __destruct(){echo "Father is dead.<br>";}

}
class Child{
    public $father;
    function __construct(Father $father){$this->father = $father;}
    function  __destruct(){echo "Child is dead.<br>";}

}
$father = new Father;
$child = new Child($father);
$father->children[] = $child;
echo "Пока все живы... Убываэм всех.<br>";
$father = $child = null;
echo "Все умерли, конец програмы.<br>"
?>