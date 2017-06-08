<!doctype html>
<html>
  <head>
    <title>電子相簿</title>
    <meta charset="utf-8">
  </head>	
  <body>
    <p align="center"><img src="Title.png"></p>
    <?php
        include 'sql.php';
        $album_id = $_GET["album"]; //photo的album_id
        $photo_id = $_GET["photo"];
      
        //建立資料連接
        $pdo=new pdo($dsn,$user,$passwd,$opt);

        //取得並顯示相簿名稱
        $sql = "SELECT name FROM album WHERE id = $album_id";
        $result = $pdo->prepare($sql);
        $result = $pdo->execute();
        $row = $result->fetchObject();
        $album_name = $row->name;
        echo "<p align='center'>$album_name</p>";
      
        //取得並顯示相片資料
        $sql = "SELECT filename, comment FROM photo WHERE id = $photo_id";
        $result = $pdo->prepare($sql);
        $result = $pdo->execute();
        $row = $result->fetchObject();
        $file_name = $row->filename;
        $comment = $row->comment;
        echo "<p align='center'><img src='Photo/$file_name'
                style='border-style:solid;border-width:1px'></p>";
        echo "<p align='center'>$comment</p>";
		  
      //取得並建立相片導覽資料
        $sql = "SELECT a.id, a.filename FROM (SELECT id, filename FROM photo 
                WHERE album_id = $album_id AND (id <= $photo_id)
                ORDER BY id desc) a ORDER BY a.id";
        $result = $pdo->prepare($sql);
        $result = $pdo->execute();
      
      echo "<hr><p align='center'>";
      while ($row = $result->fetchAll())
      {
      	if ($row["id"] == $photo_id)
      	{
      	  echo "<img src='Thumbnail/" . $row["filename"] .
      	       "' style='border-style:solid;border-color: Red;border-width:2px'>　";
      	}
      	else
      	{
      	  echo "<a href='photoDetail.php?album=$album_id&photo=" . $row["id"] .
      	       "'><img src='Thumbnail/" . $row["filename"] .
      	       "' style='border-style:solid;border-color:Black;border-width:1px'></a>　";
      	}
      }      
      
      $sql = "SELECT id, filename FROM photo WHERE album_id = $album_id AND (id > $photo_id)
              ORDER BY id";
        $result = $pdo->prepare($sql);
        $result = $pdo->execute();
      while ($row = $result->fetchAll())
      {
      	echo "<a href='photoDetail.php?album=$album_id&photo=" . $row["id"] .
      	     "'><img src='Thumbnail/" . $row["filename"] .
      	     "' style='border-style:solid;border-color:Black;border-width:1px'></a>　";
      }      
      echo "</p>";
		  		
      //釋放記憶體
      //mysqli_free_result($result);
	  //關閉資料連接
      //mysqli_close($link);
    ?>
    <p align="center">
      <a href="index.php">回首頁</a>
      <a href="showAlbum.php?album_id=<?php echo $album_id ?>">回【<?php echo $album_name ?>】相簿
    </p>
  </body>                                                                                 
</html>