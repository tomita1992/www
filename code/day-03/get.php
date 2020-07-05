<?php 
    if($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        var_dump($_GET);
    }

    //POST与GET请求的方式不同
    //传参数的方式不同
    //GET：会用URL来传参数会保存在浏览器的历史记录当中 POST：会用请求体来传参数 不会保存在浏览器的历史记录当中
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
    <form action= "<?php echo $_SERVER['PHP_SELF'] ?>" method = "get">
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