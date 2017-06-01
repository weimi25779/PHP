<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    $account='andy';
    $passwd='123';
    $realname='Andy Ho';

    //防止隱碼攻擊
    $sql="insert into member (account,passwd,realname) values(?,?,?)";
    $pdo->prepare($sql)->execute([$account,$passwd,$realname]);
    //13+14行的簡寫
    //$stmt = $pdo->prepare($sql);
    // $stmt->execute([$account,$passwd,$realname]);
