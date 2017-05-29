<?php
$fp=fopen('./iii.txt','w+'); //w+:若沒有檔案,則會試圖建立
fwrite($fp,"Hello,Word!");  //將Hello,Word!寫入$fp(即iii.txt)
fclose($fp);

