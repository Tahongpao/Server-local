<?php
session_start();
if(!isset($_SESSION['count'])) $_SESSION['count'] =0;
$_SESSION['count'] = $_SESSION['count']+1;
?>
<h2>Счетчик</h2>
В текущей сесии работы браузера Вы открыли эту страницу
<?=$_SESSION['count']?>раз(а).<br>
Закройте браузей, чтобы обнулить счетчик.<br>
<a href="<?=$_SERVER['SCRIPT_NAME']?>" target="_blank"> Открыть дочернее окно браузера</a>