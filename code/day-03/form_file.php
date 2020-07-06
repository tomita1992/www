<?php 

    function upload()
    {
        //查看是否上传文件
        if(!(isset($_FILES['img'])))
        {
            $GLOBALS['message'] = "请上传文件";
            return;
        }
        
        //保存上传文件的信息
        $img = $_FILES['img'];
        
        //查看上传文件信息的错误码
        if($img['error'] != UPLOAD_ERR_OK)
        {
            $GLOBALS['message'] = '上传失败';
            return;
        }
        
        //上传的临时路径
        $source = $img['tmp_name'];
        //保存完整的文件名字
        $target = './img/' . $img['name'];
        //将上传的文件移动到文件储存路径
        $moved = move_uploaded_file($source, $target);
        
        //查看是否移动成功
        if(!(isset($moved)))
        {
            $GLOBALS['message'] = '上传失败';
            return;
        }
        
        echo '123';
    }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        
        
        //接收文件时使用$_FILES超全局成员
        var_dump($_FILES);
        upload();
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
        <?php if(isset($message)): ?>
            <p style="color: indianred;"><?php echo $message; ?></p>
        <?php endif ?>
    </form>
</body>
</html>