<?php
$p=array(1=>0,0,0,0,0,0);
for($i=0;$i<1000;$i++){
    $r=rand(1,9);
    $p[$r>=7?$r-3:$r]++;
}

for($i=1;$i<=count($p);$i++){
    echo "point{$i} : $p[$i]<br>";
}