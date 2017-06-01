<?php
    include 'sql2.php';
    session_start();
    if (!isset($_SESSION['member'])) header("Location: login.php");
    $memberObj = $_SESSION['member'];
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $sql = "select * from animal limit 0,10";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<table border="1" width="100%">
    <tr>
        <th>Subid</th>
        <th>Area_pkid</th>
        <th>Shelter_pkid</th>
        <th>Place</th>
        <th>Kind</th>
        <th>Sex</th>
    </tr>
    <?php
    while ($row = $stmt->fetchObject()){
        echo '<tr>';
        echo "<td>{$row->subid}</td>";
        echo "<td>{$row->area_pkid}</td>";
        echo "<td>{$row->shelter_pkid}</td>";
        echo "<td>{$row->place}</td>";
        echo "<td>{$row->kind}</td>";
        echo "<td>{$row->sex}</td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
<a href="logout.php">Logout</a>