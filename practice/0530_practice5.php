<?php
    $handle=fopen("sample1.txt","r+");
    $contents=fopen("sample2.txt","w");
    if($handle){
       $handle.="\r\n";
       $handle.="<i>床前明月光，</i>\r\n";
       $handle.="<i>疑是地上霜，</i>\r\n";
       $handle.="<i>舉頭望明月，</i>\r\n";
       $handle.="<i>低頭思故鄉。</i>\r\n";
       $num=fwrite($contents,$handle);
       //$num,確認用,不然可以寫成 fwrite($contents,$handle);
       fclose($handle);
       fclose($contents);
       echo "成功寫入".$num."個位元組";
    }else{
        echo "開啟檔案失敗";
    }

