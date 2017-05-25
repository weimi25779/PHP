<?php
   $data=file('177.csv');
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
            echo '<tr>';
              foreach($fields as $field){
               echo "<td>{$field}</td>";
              }
            echo '</tr>';
        }
    ?>
</table>
