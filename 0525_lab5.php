<?php
   //$data=file("Test.txt");
   $data=file_get_contents('Test.txt');
   foreach ($data as $line){
       echo"==>{$line}<br>";
   }