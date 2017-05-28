<?php
include '0528_practise5_1.php';
$myLottery=createLottery();
foreach($myLottery as $value){
    echo "$value<br>";
}