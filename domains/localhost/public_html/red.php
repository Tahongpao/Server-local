<?php
if (@$_REQUEST['text'])
    echo htmlentities($_REQUEST['text'])."<hr>";

?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" METHOD="post">
    <textarea name="text" cols="60" rows="10">
        <?=@htmlentities($_REQUEST['text'])?>
    </textarea><br>
    <input type="submit">
</form>