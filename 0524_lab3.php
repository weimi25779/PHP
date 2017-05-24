<?php
//$fp=opendir("d:\test1"); 錯誤
$fp=opendir("d:\\test1");
   if($fp){
       echo 'OK';
   }else{
       echo 'XX';
   }