<?php
   if(!isset($_GET['filename']))
       header("Location:0525_lab3.php");
   //如果沒收到資料,會回上頁要求再輸入,要改成$_POST,因為$_GET,會將空字串,
   //視為有值,所以不會執行header()

   $filename=$_GET['filename'];
   $cont=$_GET['cont'];

   $fp=fopen($filename,'w+');
   fwrite($fp,$cont);
   fclose($fp);

   header("Location: {$filename}");


