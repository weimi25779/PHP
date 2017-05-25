<?php
   //file( )：把整個文件讀入到一個陣列中
   //fgets()：從文件指標所指的位置,讀取一行

   $data=file("Test.txt");
   foreach ($data as $line){
       echo"==>{$line}<br>";
   }

//$data=file_get_contents("Test.txt");
//echo"{$data}<br>";
//file_get_contents() : 會將資料return一個字串,因此可以直接輸出,常用於URL