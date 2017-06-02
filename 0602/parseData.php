<meta http-equiv="Content-Type" content="text/html; charset=utf-8"
<?php
    $fp=fopen("http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json","w+");

    $result = mb_convert_encoding($string,"utf-8","big5");
    echo $result;