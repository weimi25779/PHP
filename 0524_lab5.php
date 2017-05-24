<?php
$dirname = ".";
if (isset($_GET['dirname'])){
    $dirname = $_GET['dirname'];
}
?>
<form>
    <input type="text" name="dirname" />
    <input type="submit" value="chdir" />
</form>
<hr>
<table border="1" width="100%">
    <tr>
        <th>FileName</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
    </tr>
    <?php
    //$fp:似指標
    //$fp=opendir('.');
    //  echo readdir($fp);
    $fp = opendir($dirname);
    while ($file = readdir($fp)){
        //echo "{$file}<br>";
        echo '<tr>';
        echo "<td>{$file}</td>"; //FileName行
        echo "<td></td>"; //Type行
        echo "<td></td>"; //Size行
        echo "<td></td>"; //mTime行
        echo "<td></td>"; //Delete行
        echo '</tr>';
    }
    ?>
</table>
