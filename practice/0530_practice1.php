<?php
    //取得檔案名稱
    $path=$_SERVER['PHP_SELF'];  //為目前網頁的路徑
    echo basename($path).'<br>'; //顯示目前網頁的檔案名稱
    echo basename($path,'.php').'<br>'; //顯示目前網頁得檔案名稱,但排除副檔名

    echo '<hr>';

    //取得路徑資訊
    $path_parts=pathinfo($path);  //pathinfo(): 將指定路徑"分割"為路徑名稱
    echo'目前網頁的路徑:'.$path.'<br>';
    echo '分割出來的路徑名稱:'.$path_parts['dirname'].'<br>';
    echo '分割出來的檔案名稱:'.$path_parts['basename'].'<br>';
    echo '分割出來的副檔名:'.$path_parts['extension'].'<br>';

    echo '<hr>';

    //取得絕對路徑
    echo '目前網頁的絕對路徑:'.realpath(basename($_SERVER['PHP_SELF']));