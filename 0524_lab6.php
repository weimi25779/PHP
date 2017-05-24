<?php
date_default_timezone_set ("Asia/Taipei" ); //設定默認時區
$dirname = ".";
if (isset($_GET['dirname'])){
    $dirname = $_GET['dirname'];
    if (isset($_GET['filename'])){
        // delete
        $delfile = $_GET['filename'];
        unlink("{$dirname}/{$delfile}"); //unlink():刪除
    }
}
$fp = @opendir($dirname) or die('Server Down');
?>文件
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
    //$fp = @opendir($dirname) or die('Server Down'); 放到第12行,教符合邏輯  +@是為了抑制錯誤訊息的輸出,因此出現Server Down就不會做下去了
    while ($file = readdir($fp)){
        echo '<tr>';
        echo "<td>{$file}</td>";
        $type='';
        //is_dir():判斷是否為目錄,是回傳True,反之False
        if(is_dir("{$dirname}/{$file}")){
            $type='Dir'; //Dir:目錄
        }else if(is_file("{$dirname}/{$file}")){
            $type='File';  //File:檔案
        }
        echo "<td>{$type}</td>";
        echo "<td>".filesize("{$dirname}/{$file}")."</td>";
        echo "<td>" . date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>"; //filemtime:取得文件上次被修改的時間
        echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('Del ?')\">Delete</a></td>";
        echo '</tr>';
    }
    ?>
</table>