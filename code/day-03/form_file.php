<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //接收文件时使用$_FILES超全局成员
        var_dump($_FILES);
    }

?>
<!-- 如何提交与接收数据 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传</title>
</head>
<body>
    <!-- 当表单中有文件域*（文件上传）的时候method必须为POST -->
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post" enctype = "multipart/form-data">
        <input type = "file" name = "img">
        <input type="text" name = "foo">
        <input type="text" name = "bar">
        <input type="submit" value="提交"></input>
    </form>
</body>
</html>