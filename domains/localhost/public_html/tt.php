<?php
function inner($a){
    echo "<pre>"; print_r(debug_backtrace()); echo "</pre>";
    }
function outetr($x){
    inner($x*$x);
}
outetr(3);

die ("Good bay!");
echo "Hi!";
echo "Hi, Git!";
?>