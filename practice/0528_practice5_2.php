<?php
include '0528_practice5_1.php';
$myLottery=createLottery();
foreach($myLottery as $value){
    echo "$value<br>";
}