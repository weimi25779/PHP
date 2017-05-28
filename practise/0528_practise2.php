<?php
$a=array(1,2,3,4,5,6);
foreach($a as $value){
    echo $value.'<br>';
}

echo '<hr>';

$b=array(1,2,3,4,5,6);
foreach($b as $key=>$value){
    echo "{$key} : $value<br>";
}

echo '<hr>';

$c=array(1,2,3,4,'value'=>5,6);
foreach($c as $key=>$value){
    echo"{$key} : {$value}<br>";
}