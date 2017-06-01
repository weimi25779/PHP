<?php
    include 'sql2.php';
    session_start();
    if (!isset($_SESSION['member'])) header("Location: login2.php");
    $memberObj = $_SESSION['member'];
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $sql = "select * from food ";

    //$sql = "select * from food limit 0,4";
    //0: index ,4: 一次看幾筆資料(例如:0.1.2.3=>4筆)

    //$sql = "select * from food order by addr desc";
    //order: 按addr排序, desc:顛倒(從下到上)

    //$sql = "select * from food where addr like '%中山路%'  order by addr desc"  ;
    //where: 找%(不拘)中山路%(不拘)
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Tel</th>
        <th>Addr</th>
        <th>Memo</th>
    </tr>
    <?php
    while ($row = $stmt->fetchObject()){
        echo '<tr>';
        echo "<td>{$row->fid}</td>";
        echo "<td>{$row->fname}</td>";
        echo "<td>{$row->tel}</td>";
        echo "<td>{$row->addr}</td>";
        echo "<td>{$row->memo}</td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
<a href="logout.php">Logout</a>