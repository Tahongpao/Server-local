<?php
session_name("test");
session_start();
$_SESSION['count']=@$_SESSION['count']+1;
?>
<h3>Счетчик</h3>
В текущий сессии работи с браузера Вы открили эту страницу
<?=$_SESSION['count']?> раз(а).<br>
<a href="<?=$_SERVER['SCRIPT_NAME']?>?<?=SID?>">Нажмите сюда для обновления страницы!</a>