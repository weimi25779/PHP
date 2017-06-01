<?php
    include 'sql.php';
    session_start();
    if (!isset($_SESSION['member'])) header("Location: login.php");
    //如果沒有輸入帳密或帳密錯誤,就跳回login.php
    $memberObj = $_SESSION['member'];
?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<a href="logout.php">Logout</a>
