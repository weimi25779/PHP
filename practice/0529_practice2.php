<?php
    $dirname=".";
    if(isset($_GET['$dirname'])){
        $dirname=$_GET['$dirname'];
    }
?>

<form>
    <input type="text" name="dirname" />
    <input type="submit" value="chdir" />
</form>
<hr>
<table width="100%" border="2">
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
    </tr>
    <?php
       $fp=opendir($dirname);
       while($file=readdir($fp)){
          echo '<tr>';
              echo "<td>{$file}</td>";
              $type='';
              if(is_dir("{$dirname}/{$file}")){
                  $type='Dir';
              }else if(is_file("{$dirname}/{$file}")){
                  $type='File';
              }
              echo "<td>{$type}</td>";
              echo "<td>".filesize("{$dirname}/{$file}")."</td>";
              echo "<td>".date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>";
              echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('Delete?')\">Delete</a></td>";
          echo '</tr>';
       }

    ?>
</table>