<?php
$x=$_Get['xx'];
$y=$_Get['yy'];

//echo $x+$y;
//  echo $x.$y;
echo "$x+$y=$r<br>"; // " "會解析其內容
echo '$x+$y=$r';  // ' ' 不會解析其內容,直接當做字串處理
//------------------------------------------------------------------------------------------------------------
//  $var1=false;  //布林值
//  $var2='36'; //字串
//  $var3=$var1+$var2;
//  var_dump($var3);


?>