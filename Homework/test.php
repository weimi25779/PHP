<table border="1" width="50%" align="center">

    <?php $col = 10; $max=100000;
    for($x=1;$x<=$max;$x++){
        $z=0;
        for ($y = 1; $y <= sqrt($x); $y++) {
            if($x%$y==0){
                $z++;
                if($z>1){
                    break;
                }
            }
        }
        if($x==1 || $z!=1){
            $n = "<td>" . $x . "</td>";
        } else {
            $n = "<td bgcolor='orange'>" . $x . "</td>";
        }
        if($x%$col==1){
            echo "<tr>" . $n;
        } elseif($x%$col==0){
            echo $n . "</tr>";
        } else{
            echo $n;
        }
    }
    ?>

</table>