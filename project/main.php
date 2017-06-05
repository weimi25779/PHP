<?php
    include 'sql.php';
    session_start();
    $pdo=new pdo($dsn,$user,$passwd,$opt);
    //取得使用者登入帳號與名稱
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $login_name = $_SESSION["login_name"];
    }

    //取得所有相簿資料
    $sql="SELECT * FROM album";
    $album_result=$pdo->prepare($sql);
    $album_result->execute();

    //顯示相簿清單
    while($row=$album_result->fetchObject()){
        //取得相簿編號.名稱及主人
        $album_id=$row->id;
        $album_name=$row->name;
        $album_owner=$row->owner;

        $sql="SELECT filename FROM photo WHERE album_id=$album_id";
        $photo_result=$pdo->prepare($sql);
        $photo_result->execute();
    }

