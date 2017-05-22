<?php
//    $a=10;
//    switch($a){
//        case 1:
//            echo 'A';
//            break;
//        case 10:
//            echo 'B';
//            break;
//        case 100:
//            echo 'C';
//            break;
//        default:
//            echo 'D';
//    }

//    $b='100';
//    switch($b){
//        case 1:
//            echo 'A';
//            break;
//        case 10:
//            echo 'B';
//            break;
//        case 100:
//            echo 'C';
//            break;
//        default:
//            echo 'D';
//    }
//    $c=10;
//    switch($c){
//        case 1:
//            echo 'A';
//            break;
//        default:
//            echo 'D';
//        case 10:
//            echo 'B';
//            break;
//        case 100:
//            echo 'C';
//            break;
//
//    }

    $month=rand(1,12);
    switch($month){
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            echo '該月有31天';
            break;
        case 4: case 6: case 9: case 11:
             echo '該月有30天';
             break;
        case 2:
            echo '該月有28天';
            break;
        default:
            echo '錯誤';
    }

?>