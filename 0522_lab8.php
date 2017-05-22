<?php
//$p1=$p2=$p3=$p4=$p5=$p6=0;
//for($i=0;$i<100;$i++){
//    $r=rand(1,6);
//    switch ($r){
//        case 1: $p1++; break;
//        case 2: $p2++; break;
//        case 3: $p3++; break;
//        case 4: $p4++; break;
//        case 5: $p5++; break;
//        case 6: $p6++; break;
//    }
//}
//echo "point 1={$p1}<br>";
//echo "point 2={$p2}<br>";
//echo "point 3={$p3}<br>";
//echo "point 4={$p4}<br>";
//echo "point 5={$p5}<br>";
//echo "point 6={$p6}<br>";

$p=array(1=>0,0,0,0,0,0);
for($i=1;$i<1000;$i++){
    $temp=rand(1,9);
    $p[$temp>=7?$temp-3:$temp]++;
}
for($i=1;$i<=count($p);$i++){
    echo "point{$i}={$p[$i]}<br>";
}


?>