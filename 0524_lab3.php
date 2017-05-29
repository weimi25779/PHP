<?php
//$fp=opendir("d:\test1"); 錯誤
//opendir:取得目錄下所有檔案
$fp=opendir("d:\\test1"); // 多用一個 \,來跳脫
   if($fp){
       echo 'OK';
   }else{
       echo 'XX';
   }