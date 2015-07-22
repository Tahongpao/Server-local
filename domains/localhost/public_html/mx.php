<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
include_once "getmxrr.php";
$host ="gmail.com";
getmxrr($host,$mxes, $weights)
or die ("Не удается получить DNS-запись для хоста $host. ");
echo "Ящики *@$host обслуживаю следующие почтовые машины:<br>";
for ($i=0; $i<count($mxes); $i++){
    echo "<li><tt>{$mxes[$i]}</tt>";
    echo " (вес = {$weights[$i]})\n";
}
?>