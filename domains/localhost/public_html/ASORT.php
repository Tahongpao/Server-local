<?php
$tools = array(
    "8" =>"Zero",
    "2" =>"Weapon",
    "4" => "Alpha",
    "7" =>"Processor"
);
sort($tools);
print_r($tools);

echo "\n\n\n";

$numbers = array("one","two", "three", "four");
shuffle($numbers);
print_r($numbers);
echo "\n\n\n";

$newMass = range(-1,10);
print_r($newMass);

echo "\n\n\n";


for($i=0; $i<3; $i++)  echo mt_rand(). " ";

echo "\n\n\n";
//mt_srand(time() + (double)microtime()*1000000 + getmygid());
for($i=0; $i<3; $i++) echo mt_rand(). " ";
echo "\n\n\n";


//mt_srand(time() + (double)microtime()*1000000 + getmygid());
for($i=0; $i<3; $i++) echo  mt_rand(). " ";

echo "\n\n\n";

?>