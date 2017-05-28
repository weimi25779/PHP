<?php
$p1=$p2=$p3=$p4=$p5=$p6=0;
for($i=0;$i<=100;$i++){
    $r=rand(1,6);
    switch ($r){
        case 1:$p1++; break;
        case 2:$p2++; break;
        case 3:$p3++; break;
        case 4:$p4++; break;
        case 5:$p5++; break;
        default: $p6++;
    }
}

echo "point 1 : $p1<br>";
echo "point 2 : $p2<br>";
echo "point 3 : $p3<br>";
echo "point 4 : $p4<br>";
echo "point 5 : $p5<br>";
echo "point 6 : $p6";
