<?php
$poker=range(0,51);
shuffle($poker);
// foreach($poker as $card){
//     echo"{$card}\r";
//}
echo '<hr>';
//發到四個玩家
foreach($poker as $i=>$value){
   $player[$i%4][(int)($i/4)]=$value;
}
//Show cards
//foreach($player[0] as $card)
//    echo "{$card}\r";
?>
<table border="1" width="100%">
    <?php
    $suit=array("<font color='black' size='5'>&spades;</font>",
                "<font color='red' size='5'>&hearts;</font>",
                "<font color='red' size='5'>&diams;</font>",
                "<font color='black' size='5'>&clubsuit;</font>");
    $value=array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach ($player as $sb){
            //$sb,指player[$i%4],例:0,1,2,3(4位)
            //$card,指player[(int)($i/4)],例:0,1,2,3,...,51/4(52/4=13,每人13張撲克牌)
            sort($sb);
            //echo var_dump($sb);

            echo '<tr>';
            foreach ($sb as $card){
                //echo "<td>{$card}</td>";
                echo "<td>{$suit[(int)($card/13)]}{$value[$card%13]}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

