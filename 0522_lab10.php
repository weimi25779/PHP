<?php
$a=array(1,2,3);
$b[]=$a; //$b[0]==>array(1,2,3);
$b[]=array(2,4);
//echo count($b); $a+array(2,4)共有2個
echo count($b[0]);