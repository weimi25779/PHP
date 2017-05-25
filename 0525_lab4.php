<?php
   if(!isset($_GET['filename']))
       header("Location:0525_lab3.php");
   //如果沒輸入資料,會回上頁要求再輸入,要改成$_POST,因為$_GET,會將空字串,
   //視為有值,所以不會執行header()

   $filename=$_GET['filename'];
   $cont=$_GET['cont'];

   $fp=fopen($filename,'w+');  //可以想成打開記事本,並且可以寫入
   fwrite($fp,$cont); //將$cont寫入$fp(記事本)
   fclose($fp);  //關閉記事本,這樣資料才會真正寫入

   header("Location: {$filename}");
   //header("Location:$url" ) : 轉跳頁面


