<?php
    include '0523_lab5.php';
    $myLottery = createLottery();
    foreach($myLottery as $lottery){
        echo "{$lottery}<br>";
    }
