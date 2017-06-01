<?php
    include 'sql.php';
    session_start();
    //$pdo=new pdo($dsn,$user,$passwd,$opt); 可以寫在第7行

    if(isset($_POST['account'])){
        $pdo=new pdo($dsn,$user,$passwd,$opt);
        $account=$_POST['account'];
        $passwd=$_POST['passwd'];
        $sql="select * from member where account=?";

        //$stmt = $pdo->prepare($sql);
        //$stmt->execute([$account]);
        ($stmt = $pdo->prepare($sql))->execute([$account]); //第12和13行的簡寫
        if ($stmt->rowCount()>0){  //判斷是否帳號有(即判斷$stmt有無物件)
            $memberObj = $stmt->fetchObject();
            if (password_verify($passwd, $memberObj->passwd)){
                $_SESSION['member'] = $memberObj;
                header("Location: main2.php");
            }else{
                echo 'X1';  //密碼錯誤
            }
        }else {
            echo 'X0'; //沒有此帳號
        }

    }
?>
<form method="post">
    account:<input type="text" name="account"><br>
    password:<input type="password" name="passwd"><br>
    <input type="submit" value="login">
</form>
