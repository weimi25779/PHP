<?php
$fp=fopen('./iii.txt','w+');
fwrite($fp,"Hello,Word!");
fclose($fp);