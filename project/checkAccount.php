<?php
    include 'sql.php';
    session_start();
    //建立資料連接
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    //檢查帳號欄位是否為空白
    if (!isset($_POST['account']))
        header("Location: login");

    //取得登入資料
    $login_user = $_POST['account'];
    $login_password = $_POST['passwd'];

    //檢查帳號密碼是否正確
    $sql = "SELECT * FROM member WHERE account = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login_user]);
    if ($stmt->rowCount()>0){
        $memberObj = $stmt->fetchObject();
        $dbPasswd = $memberObj->passwd;
        if (password_verify($login_password, $dbPasswd)){
            // OK
            //將使用者資料加入 Session
            $_SESSION['login_user'] = $memberObj->account;
            $_SESSION['login_name'] = $memberObj->username;
            header("Location: main.php");
        }else{
            // passwd not match
            header("Location: login.php");
        }
    }else{
        // account not exist
        header("Location: login.php");
    }
