<?php
$maxNum = 100;
$col = 10;
echo '<table border="1" width="100%">';
    for ($i=1; $i<=$maxNum; $i++) {
    if ($i % $col == 1) echo '<tr>';
        echo "<td>{$i}</td>";
        if ($i % $col == 0) echo '</tr>';
    }
//i=1 => 1%10=1,ture,執行echo '<tr>';
//                        ,執行echo "<td>{$i}</td>";
// 到 if ($i % $col == 0),i=1 => 1%10=1,false,不執行echo '</tr>';

//i=2 => 2%10=1,false,不執行echo '<tr>';
//                        ,執行echo "<td>{$i}</td>";
// 到 if ($i % $col == 0),i=2 => 2%10=2,false,不執行echo '</tr>';
//以此列推,當i=10,10%10=0,ture,執行echo '</tr>'; 即換下一段
echo '</table>';