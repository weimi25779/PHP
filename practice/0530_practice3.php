<?php
    //判斷檔案是否存在
        //file_exists(string filename);

    // 判斷指定的路徑是否為檔案
        //is_file(string filename);

    //複製檔案
        //copy("C:\\myPHP\\license.txt","license(new).txt");
        //將檔案C:\\myPHP\\license.txt複製到license(new).txt

    //刪除檔案
    // $filename="myfile.txt";
    // if(file_exists($filename)){
    //          unlink($filename);
    //              echo "刪除檔案成功";
    // }else{
    //              echo "檔案不存在,刪除檔案失敗!";
    // }

    //變更檔案名稱
        //rename("temp.php","temp.bak");
        //將temp.php更名為temp.bak

    //取得檔案屬性
        $filename=basename($_SERVER['PHP_SELF']);
        echo '目前網頁的建立時間:'.gmdate("Y-m-d H:i:s",filectime($filename)).'<br>';
        //filectime():建立時間
        echo '目前網頁的最後存取時間:'.gmdate("Y-m-d H:i:s",fileatime($filename)).'<br>';
        //fileatime():最後存取時間
        echo '目前網頁的修改時間:'.gmdate("Y-m-d H:i:s",filemtime($filename)).'<br>';
        //filemtime():修改時間
        echo '目前網頁的檔案大小:'.filesize($filename).'位元組';
        //filesize():取得檔案大小