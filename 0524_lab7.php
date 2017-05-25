<form action="0524_lab8.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upload"/>
    <input type="submit" value="Upload"/>
</form>

<!--form的enctype有三種-->
<!--1.application/x-www-form-urlencoded(預設):會將資料做編碼傳送(空白以+代替，而特殊字元則傳成ASCII HEX。-->
<!--2.multipart/form-data:不做任何編碼，如果需要上傳文件時，就要使用它。-->
<!--3.text/plan:僅將空白以+代替，常見於電子郵件表單。-->