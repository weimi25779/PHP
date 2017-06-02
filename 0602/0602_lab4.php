<?php
    if (!isset($_GET['a'])){
        echo 'False 1';
        die(); //這樣就不會繼續做下去
    }
    include "sqlWeimi.php";
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $account = $_GET['a'];
    $sql = "SELECT account FROM member WHERE account = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account]);
    if ($stmt->rowCount()>0) {
        // account is exist,指拿取得到的account去資料庫找是否有相同的account,若找到表示該帳號已存在
        echo 'False 2';
    }else{
        // OK
        echo 'OK';
    }