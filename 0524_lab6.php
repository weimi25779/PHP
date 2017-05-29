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
            //{$dirname}/{$file}=./{$file},若$dirname="d:\\test1",則d:\test1\{$file}
            $type='Dir'; //Dir:目錄
        //is_filer():判斷是否為檔案,是回傳True,反之False
        }else if(is_file("{$dirname}/{$file}")){
            $type='File';  //File:檔案
        }
        echo "<td>{$type}</td>";
        echo "<td>".filesize("{$dirname}/{$file}")."</td>";
        echo "<td>" . date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>";
        //filemtime: 只有當檔案的被異動後，也就是資料區塊被寫入時，才會更新檔案的最後修改時間
        //filectime: 當檔案的權限被異動時，就會更新檔案的最後修改時間，
        //注意，有些時候ctime被拿來當做檔案的建立時間，這是錯誤的，在大部分的UNIX系統檔案沒有所謂的建立時間
        //fileatime: 無論這個檔案是否正被讀取，atime會不斷去取得檔案最後存取的時間，
        //但這可能會佔去大量的系統資源，一些UNIX的檔案系統會將此函式設定無效來增加應用程式的效能
        echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('Del ?')\">Delete</a></td>";
        echo '</tr>';
    }
    ?>
</table>