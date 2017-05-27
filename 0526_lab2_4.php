<?php
    include '0526_lab2_1.php';
    session_start();
    if (!isset($_SESSION['cart']))  //如果購物車是空的,則回到 0526_lab2_3.php
        header('Location: 0526_lab2_3.php');

    $cartObj = $_SESSION['cart'];  //取伺服器所存放的資料
    $var1 = $_SESSION['var1'];

    echo 'Page 2<hr>';
    echo $var1 . '<br>';

    $list = $cartObj->getList();
    foreach($list as $pid => $qty){
        echo "{$pid} : {$qty}<br>";
}
?>
<hr>
<a href="logout.php">Logout</a>