<?php
$text = file_get_contents(__FILE__);
$html = preg_replace('/^/m',"\t", $text);
echo "<pre>".htmlspecialchars($text). "</pre>";
?>