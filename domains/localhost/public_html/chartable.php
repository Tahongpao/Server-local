<?php
for($i=0,$x=0; $x<16;$x++){
    for($y=0;$y<16;$y++){
        $chars[$x][$y] = array($i,chr($i));
        $i++;
    }
}
?>
<table border="2" cellpadding="6" cellspacing="5">
    <?php foreach($chars as $row){?>
    <tr>
    <?php foreach ($row as $cell){ ?>
        <td>
            <?=$cell[0]?>
            <b><tt><?=$cell[1]?></tt></b>
        </td>

    <?}?>
        </tr>

<?}?>
</table>