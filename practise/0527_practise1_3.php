<table width="100%" border="1">
    <?php
    $start=1; $column=5; $line=6;
    for($row=0;$row<$line;$row++) {
        echo '<tr>';
        for ($j=$start;$j<=$column; $j++) {
            $new_j=$j+$row*$column;
            echo "<td bgcolor='" . (($new_j%2==0)?'#6495ed':'#ff69b4') . "'>";
            for($k=1;$k<=9;$k++){
                $result=$new_j*$k;
                echo"{$new_j} X {$k}={$result}<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>