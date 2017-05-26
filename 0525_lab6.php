<?php
   $data=file('Book1.csv');
?>
<table width="100%" border="1">
    <tr>
        <th>name</th>
        <th>f1</th>
        <th>f2</th>
        <th>f3</th>
    </tr>
    <?php
    foreach ($data as $line){
            $fields=explode(',',$line);
            //explode() : 字串切割  delimiter:字串的切部位割,","指看到"逗號"就切割
            echo '<tr>';
              foreach($fields as $field){
               echo "<td>{$field}</td>";
              }
            echo '</tr>';
        }
    ?>
</table>
