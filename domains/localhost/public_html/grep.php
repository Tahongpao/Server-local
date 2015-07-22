<?php

foreach(preg_grep('/^20\w/s', glob("*")) as $fn)
    echo "FILE PRIMERA: $fn<br>\n";
?>