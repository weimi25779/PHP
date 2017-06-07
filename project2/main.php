<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
      <?php
        include 'sql.php';
        session_start();
        $pdo=new pdo($dsn,$user,$passwd,$opt);
        //取得使用者登入帳號與名稱
        if(isset($_SESSION["login_user"])){
            $login_user = $_SESSION["login_user"];
            $login_name = $_SESSION["login_name"];
        }

        //取得所有相簿資料
        $sql="SELECT * FROM album";
        $album_object=$pdo->prepare($sql);
        $album_object->execute();

        echo "<p align='center'>$total_album Albums</p>";
        echo "<table border='0' align='center'>";

        //指定每列顯示幾個相簿
        $album_per_row = 5;

        //顯示相簿清單
        while($row=$album_object->fetchObject()){
            //取得相簿編號.名稱及主人
            $album_id=$row->id;
            $album_name=$row->name;
            $album_owner=$row->owner;


            //取得該相簿裡的所有相片
            $sql="SELECT * FROM photo WHERE album_id=$album_id";
            $photo_object=$pdo->prepare($sql);
            $photo_object->execute(); //表格
            $row=$photo_object->fetchObject(); //取表格的一列


            //取得相簿包含的相片數目
            $total_photo=$photo_object->fetchObject();

            //若相片數目大於0,就以第一張當作封面,否則以None.png當作封面
            if($total_photo>0)
                $cover_photo=$row->filename;
            else
                $cover_photo="None.png";

            echo "<td width='160px'>
              <a href='showAlbum.php?album_id=$album_id'>
              <img src='Thumbnail/$cover_photo' style='border-color:Black;border-width:1px'>
              <br>$album_name</a><br>$total_photo Pictures";

            if (isset($login_user) && $album_owner == $login_user)
            {
                echo "<br><a href='editAlbum.php?album_id=$album_id'>編輯</a> 
                 <a href='#' onclick='DeleteAlbum($album_id)'>刪除</a>";
            }

            echo "</td>";


        }
        echo "</table>" ;

        echo "<a href='addAlbum.php'>新增相簿</a> 
              <a href='logout.php'>登出【 $login_name 】</a>";
        ?>
    </body>
</html>




