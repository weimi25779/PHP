<table width="100%" border="1">
    <?php
        for($i=1;$i<=25;$i++){
            if($i%5==1) echo '<tr>';
            echo "<td>$i</td>";
            if($i%5==0) echo '</tr>';
        }
    ?>
</table>