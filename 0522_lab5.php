<table width="100%" border="1">
    <?php
    $start=1; $col=5; $line=4;
    //col:列 , line:行
    for($row=0;$row<$line;$row++){
        echo '<tr>';
        for($j=$start;$j<=$col;$j++) {
            $new_j=$j+$row*$col;
//            if ($j%2==0){
//                if ($row%2==0){
//                    echo "<td bgcolor='yellow'>";
//                }else{
//                    echo "<td bgcolor='orange'>";
//                }
//            }else{
//                if ($row%2!=0){
//                    echo "<td bgcolor='yellow'>";
//                }else{
//                    echo "<td bgcolor='orange'>";
//                }
//            }

            echo "<td bgcolor='" .
                ((($j+$row)%2==0)?'yellow':'orange') . "'>";
                //"<td bgcolor=' " ." ' >"
            for ($i = 1; $i <= 9; $i++) {
                $result = $new_j * $i;
                echo "$new_j X {$i}=$result<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>