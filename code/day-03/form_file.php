<!-- 如何提交与接收数据 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件上传</title>
</head>
<body>
    <!-- 当表单中有文件域*（文件上传）的时候method必须为POST -->
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = 'post' enctype = 'multipart/form-data'>
        <input type = "file" name = 'img'>
        <button>提交</button>
    </form>
</body>
</html>