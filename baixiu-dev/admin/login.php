<?php

    //载入配置文件
    require_once '../config.php';
    //启用session服务
    session_start();

    function login()
{
    //1. 接受并校验
    //2. 持久化
    //3. 响应
    if (empty($_POST['email'])) {
        $GLOBALS['message'] = '请填写用户名';
        return;
    }
    $GLOBALS['email'] = $_POST['email'];
    if (empty($_POST['password'])) {
        $GLOBALS['message'] = '请填写密码';
        return;
    }

    $password = $_POST['password'];

    db_check($GLOBALS['email'], $password);

}

function db_check($email, $password)
{
    $connect = mysqli_connect(DB_HOST, DB_USER, DC_PASSWORD, DC_NAME);
    if (!$connect) {
        $GLOBALS['message'] = '连接数据库失败';
        return;
    }
    //在这不可以同时查询账号和密码 因为会不知道是哪个除了 还有是因为密码在数据库存储的时候是加密的
    $db_data = mysqli_query($connect, "select * from users where email = '{$email}' limit 1");

    if (empty($db_data)) {
        $GLOBALS['message'] = '登录失败，请重试';
        return;
    }
    //获取登录用户
    $user = mysqli_fetch_assoc($db_data);

    if (empty($user)) {
        $GLOBALS['message'] = '邮箱与密码不匹配';
        return;
    }
    if ($user['password'] !== md5($password)) {
        $GLOBALS['message'] = '邮箱与密码不匹配';
        return;
    }

    //存一个登录标识
    $_SESSION['current_login_user'] = $user;

    //验证成功 可以跳转
    header('location: /admin/index.php');

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    login();
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>Sign in &laquo; Admin</title>
    <link rel="stylesheet" href="/static/assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/static/assets/vendors/animate/animate.css">
    <link rel="stylesheet" href="/static/assets/css/admin.css">
</head>
<body>
<div class="login">
    <form class="login-wrap<?php echo isset($message) ? ' animate__animated animate__shakeX' : ''; ?>"
          action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate autocomplete="off">
        <img class="avatar" src="/static/assets/img/default.png">
        <!-- 有错误信息时展示 -->
        <?php if (isset($message)): ?>
            <div class="alert alert-danger">
                <strong><?php echo $message; ?></strong>
            </div>
        <?php endif ?>
        <div class="form-group">
            <label for="email" class="sr-only">邮箱</label>
            <input id="email" type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"
                   class="form-control" placeholder="邮箱" autofocus>
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">密码</label>
            <input id="password" type="password" name="password" class="form-control" placeholder="密码">
        </div>
        <button class="btn btn-primary btn-block">登 录</button>
    </form>
</div>
    <script src="/static/assets/vendors/jquery/jquery.js"></script>
    <script>
        $(function ($) {
            //入口函数
            //1. 单独作用域
            //2. 确保页面加载过后执行

            //目标：在用户输入自己的邮箱过后 页面上展示这个邮箱对应的头像
            //实现：时机->邮箱文本框失去焦点而且能够拿到文本框中的邮箱时  事情->获取这个邮箱所对应的头像

            //注册一个失去邮箱文本框中焦点的函数 blur是失去光标的事件
            $('#email').on('blur', function(){
                //通过$函数将this（DOM对象）转成了jQuery对象 用jQuery的val方法拿到文本框中的内容
                // console.log($(this).val());

                //判断文本框中有没有@的正则表达式
                //js当中可以在斜线之间写正则表达式
                let emailFormat = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/;

                //如果是PHP的话这个地方会报错 但是js的话只会传一个空的值
                let value = $(this).val();
                //忽略文本框为空或者是不是一个邮箱
                if((!value) || (!emailFormat.test(value))) return;
                console.log(value);
            });
        });
    </script>
</body>
</html>
