<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);


    //防止隱碼攻擊
    //參考: https://pjchender.blogspot.tw/2015/08/php-data-objects-pdo-2-preparedsql.html
    $sql="insert into member (account,passwd,realname) values(?,?,?)";
    $stmt=$pdo->prepare($sql);
    //$stmt->execute(['brad','123','Brad chao']);
    //stmt=statement(聲明)
    $stmt->execute([$account,$passwd,$realname]);

    //方法一：可直接使用exec的方法，把要執行的SQL語法放入exec函式內
    //$stmt->exec($sql);

    //方法二：必須先將要執行的語法放入prepare函數中，等到需要執行的時候再使用execute的方法來執行
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$account,$passwd,$realname]);