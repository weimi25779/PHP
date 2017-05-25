<?php
// $fp=fopen('./Test.txt.txt','r'); r:唯讀
// if($fp){
//     echo 'OK';
// }else{
//     echo 'XX';
// }

$fp=fopen('./Test.txt.txt','r');
while($line=fgets($fp)){
//    echo "{$line}<br>";
   $len=strlen($line);
   echo "{$len}:{$line}<br>";

}
fclose($fp);
