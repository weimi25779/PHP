<?php
function createLottery(){
    $lotterys=range(1,49);
    shuffle($lotterys);
    for($i=0;$i<6;$i++){
        $ret[]=$lotterys[$i];
    }
    sort($ret);
    return $ret;
}