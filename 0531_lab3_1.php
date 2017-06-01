<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);
    //建立使用PDO方式連線的物件，並放入指定的相關資料

    $sql="select * from member";
    $rs=$pdo->query($sql);
    while($row=$rs->fetchObject()){
        echo "{$row->id}:{$row->account}<br>";
    }

    //PDO(參考:https://pjchender.blogspot.tw/2015/08/php-data-objects-pdo.html)