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
        $album_result=$pdo->prepare($sql);
        $album_result->execute();

        //顯示相簿清單
        while($row=$album_result->fetchObject()){
            //取得相簿編號.名稱及主人
            $album_id=$row->id;
            $album_name=$row->name;
            $album_owner=$row->owner;

            //取得該相簿裡的所有相片
            $sql="SELECT * FROM photo WHERE album_id=$album_id";
            $photo_result=$pdo->prepare($sql);
            $photo_result->execute();

            //取得相簿包含的相片數目
            $total_photo=$photo_result->fetchObject();

            //若相片數目大於0,就以第一張當作封面,否則以None.png當作封面
            if($total_photo>0)
                $photo_result->filename;
            else
                $cover_photo="None.png";

            echo "<td width='160px'>;
                  <a href='showAlbum.php?album_id=$ablum_id'>
                  <img src='Thumbnail/$cover_photo'
                    style='border-color:Black;border-width:1px'>
                  <br>$ablum_name</a><br>$total_photo Picture
                 ";
            echo "</td>";


        }
        ?>
    </body>
</html>




