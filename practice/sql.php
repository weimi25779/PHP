<?php
    $host='127.0.0.1';
    $db='iii';
    $user='root';
    $passwd='root';
    $driver='mysql';
    $charset='utf8';

    $dsn="{$driver}:host={$host};dbname={$db};charset={$charset}";
    $opt=[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_BOTH];
    //PDO::ATTR_DEFAULT_FETCH_MODE： 設置默認的提取模式

    //設置獲取結果集的返回值的類型
    //PDO::FETCH_ASSOC -- 關聯數組形式
    //可參考: http://newaurora.pixnet.net/blog/post/188390286
    //PDO::FETCH_NUM -- 數字索引數組形式
    //PDO::FETCH_BOTH -- 兩者數組形式都有
    //PDO::FETCH_OBJ -- 按照對象的形式，類似於以前的 mysql_fetch_object()



