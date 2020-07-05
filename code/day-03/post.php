<?php 
    //将表单的处理逻辑放在HTML之前，为了更灵活的控制HTML的输出
    //因为对于表单的处理不是每一次都需要执行
    //所以一般会判断请求的方式，从而觉得是否执行对数据的处理
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        
        var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "form.css" type= "text/css">
    <title>登录</title>
</head>
<body>
    <!-- 一般为了便于维护会把表单提交给页面本身 -->
    <!-- 由于文件重命名回导致代码被修改 鲁棒性不强 -->
    <form action= "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
        <div id = "main">
            <div class = "form">
                <div>
                    <label for="username">用户名</label>
                    <input type="text" id = "username" name = "username">
                </div>
                <div>
                    <label for="password">密码：</label>
                    <input type="password" id = "password" name = "password">
                </div>
                <button type="submit">登录</button>
            </div>
        </div>
    </form>
</body>
</html>