<?php
//$a=array(1,2,3,4,5);
//foreach($a as $value){
//    echo $value.'<br>';
//}
//echo '<hr>';


$a=array(1,2,3,4,5);
foreach($a as $key=>$value){
  echo $key.':'.$value.'<br>';
}

echo '<hr>';

$a=array(1,2,3,'value'=>4,5);
foreach($a as $key=>$value){
    echo $key.':'.$value.'<br>';
}