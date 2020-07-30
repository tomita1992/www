<?php 
  function login()
  {
    //1. 接受并校验
    //2. 持久化
    //3. 响应
    if(empty($_POST['email']))
    {
      $GLOBALS['message'] = '请填写用户名';
      return;
    }
    $GLOBALS['email'] = $_POST['email'];
    if(empty($_POST['password']))
    {
      $GLOBALS['message'] = '请填写密码';
      return;
    }
    
    $password = $_POST['password'];
    
    db_check($GLOBALS['email'], $password);

    
  }
  function db_check($email, $password)
  {
      require_once '../config.php';
      $connect = mysqli_connect(DB_HOST, DB_USER, DC_PASSWORD, DC_NAME);
      if (!$connect) {
          $GLOBALS['message'] = '连接数据库失败';
          return;
      }
      $db_data = mysqli_query($connect, 'select email,password from users');
      while ($value = mysqli_fetch_assoc($db_data)) 
      {
          if ($value['email'] !== $email) 
          {
              $GLOBALS['message'] = '邮箱或密码错误';
              return;
          }
          else
          {
            if ($value['password'] !== $password) 
            {
              $GLOBALS['message'] = '邮箱或密码错误';
              return;
            }
            else
            {
              header('location: /admin/index.php');
            }
          }
      }
    }  
  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
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
    <form class="login-wrap<?php echo isset($message)? ' animate__animated animate__shakeX': ''; ?>" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate autocomplete="off">
      <img class="avatar" src="/static/assets/img/default.png">
      <!-- 有错误信息时展示 -->
      <?php if(isset($message)): ?>
      <div class="alert alert-danger">
        <strong><?php echo $message; ?></strong>
      </div>
      <?php endif ?>
      <div class="form-group">
        <label for="email" class="sr-only">邮箱</label>
        <input id="email" type="email" name="email" value="<?php echo isset($email)? $email : ''; ?>" class="form-control" placeholder="邮箱" autofocus>
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">密码</label>
        <input id="password" type="password" name="password" class="form-control" placeholder="密码">
      </div>
      <button class="btn btn-primary btn-block">登 录</button>
    </form>
  </div>
</body>
</html>
