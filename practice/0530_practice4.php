<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        //echo file_get_contents("poetry1.txt");
        echo nl2br(file_get_contents("poetry1.txt"));
        //nl2br:換行,若不用,則會像地7行,將字一連串的輸出
    ?>
    </body>
</html>
