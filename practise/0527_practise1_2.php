<table width="100%" border="1">
    <?php
    for($i=0;$i<3;$i++) {
        echo '<tr>';
        for ($j = 1; $j <=3; $j++) {
            echo "<td bgcolor='" . (($new_j%2==0)?'#6495ed':'#ff69b4') . "'>";
            $new_j=$j+$i*3;
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