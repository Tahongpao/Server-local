<?php
Header("Content-type: text/plain");
$flags = array(
    "PREG_PATTERN_ORDER",
    "PREG_SET_ORDER",
    "PREG_SET_ORDER|PREG_OFFSET_CAPTURE",
);
$re = '|<(\w+).*?>(.*?)</\1>|s';
$text = "<b>textt</b> i eche <i>drygoy textt</i>";
echo "Stroka: $text\n";
echo "Virazhenie: $re\n\n";
foreach($flags as $name){
    preg_match_all($re, $text, $pockets, eval("return $name;"));
    echo "Flagg $name:\n";
    print_r($pockets);
    echo "\n";
}
$zzz = headers_list();
print_r($zzz);
?>