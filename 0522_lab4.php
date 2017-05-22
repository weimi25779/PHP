<table width="100%" border="1">
<!--    <tr>-->
<!--        <td>-->
            <?php
            for($row=0;$row<2;$row++){
                echo '<tr>';
                  for($j=2;$j<=5;$j++) {
                      $new_j=$j+$row*4;
                      //一列有4格,故row*4
                      echo '<td>';
                      for ($i = 1; $i <= 9; $i++) {
                          // $result = $j * $i;
                          $result = $new_j * $i;
                          //echo "$j X {$i}=$result<br>";
                          echo "$new_j X {$i}=$result<br>";
                      }
                      echo '</td>';
                  }
                  echo '</tr>';
            }
            ?>
<!--        </td>-->
<!--    </tr>-->

</table>