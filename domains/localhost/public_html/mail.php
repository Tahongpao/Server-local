<?php
$text = "Coolies need love likre everythink does.";
$tos = array("agera412@mail.ru", "agera412@mail.ru");
$tpl = file_get_contents("mail.eml");
foreach ($tos as $to){
    $mail = $tpl;
    $mail = strtr($mail, array(
        "{TO}" => $to,
        "{TEXT}" => $text,
    ));
    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    mail("", "", $body, $head);
}
?>