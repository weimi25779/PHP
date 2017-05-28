<?php
$poker=range(0,51);
shuffle($poker);  //洗牌
// foreach($poker as $card){
//     echo"{$card}\r";
//}
echo '<hr>';
//發給四個玩家
foreach($poker as $i=>$value){
   $player[$i%4][(int)($i/4)]=$value;
   //$i的range:0~51由第2行可得知,故0~51共52
   //[$i%4]:只會得到餘數0.1.2.3,代表4位玩家
   //[(int)($i/4)]:代表撲克牌,每位玩家有13張牌(52/4=13)
}
//Show cards
//foreach($player[0] as $card)
//    echo "{$card}\r";
?>
<table border="1" width="100%">
    <?php
    //撲克牌的樣式
    $suit=array("<font color='black' size='5'>&spades;</font>",
                "<font color='red' size='5'>&hearts;</font>",
                "<font color='red' size='5'>&diams;</font>",
                "<font color='black' size='5'>&clubsuit;</font>");
    //撲克牌的內容
    $value=array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        //玩家
        foreach ($player as $sb){
            //$sb,指player[$i%4],例:0,1,2,3(4位)
            //$card,指player[(int)($i/4)],例:0,1,2,3,...,51/4(52/4=13,每人13張撲克牌)
            sort($sb);  //整理撲克牌,按大小順序
            //echo var_dump($sb);
            echo '<tr>';
          //撲克牌
          foreach ($sb as $card){ //例如:玩家[0]的0~12撲克牌
                //echo "<td>{$card}</td>";
                echo "<td>{$suit[(int)($card/13)]}{$value[$card%13]}</td>";
                //$suit[(int)($card/13)]=>只會得到0~3
                //$value[$card%13]=>只會得到0~12
          }
            echo '</tr>';
        }
    ?>
</table>

