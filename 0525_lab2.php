<?php
$fp=fopen('./iii.txt','w+');
fwrite($fp,"Hello,Word!");
fclose($fp);

//w+:若沒有檔案,則會試圖建立