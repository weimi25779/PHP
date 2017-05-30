<?php
    //建立資料夾
    mkdir("C:\\myPHP\\pictures"); //若不存在,會傳回False
    mkdir("C:\\myPHP\\pictures",NULL,TRUE);
    //mode:NULL 權限,若不想設定,可設定為NULL
    //recursive:TRUE 資料夾若不存在,是否要建立,是就改成TURE,否就改成FALSE(預設)

    //取得目前工作資料夾
    getcwd();

    //切換目前工作資料夾
    //chdir("C:\\");
    //mkdir("pictures");
    //先切換到C:\,然後在建立名稱為pictures的資料夾

    //刪除資料夾
    //rmdir("C:\\myPHP\\pictures");
    //只能刪除"空的"資料夾,若pictures為空,就會被刪除

    //判斷路徑是否為資料夾
    is_dir("C:\\");
    //回傳TRUE

    //判斷資料夾是否存在
    $folder_name="C:\\myPHP\\pictures";
    if(!file_exists($folder_name))  //判斷資料夾是否存在,若不存在則建立資料夾
        mkdir($folder_name);
    else
        echo "指定的資料夾已經存在";

    //變更資料夾權限
    chmod("pictures",0600);
    //將pictures的權限設定為[擁有者]具有讀寫權限
    //數字前面要+0,例如:0+600

    //取得資料夾的父資料夾名稱
    dirname("C:\\Windows\\system32\\drivers");
    //會傳回:C:\\Windows\\system32
?>
<?php
    //取得資料夾所包含的檔案名稱及子資料夾名稱
        $file=scandir("C:\\AppServ",1); //遞減排序設定為1,遞增排序(預設)
            foreach ($file as $value)
                if($value!="."&&$value!="..")  //過濾掉 . 和 .. 兩個名稱
                    echo $value.""."<br>";
?>