<?php 
    function add_users()
    {
        //查看表单是否为空
        //提取值
        //保存
        //响应
        if(empty($_POST['name']))
        {
            $GLOBALS['message'] = '请输入姓名';
            return;
        }
        if(!isset($_POST['gender']) || $_POST['gender'] == '-1')
        {
            $GLOBALS['message'] = '请选择性别';
            return;
        }
        if(empty($_POST['birthday']))
        {
            $GLOBALS['message'] = '请选择出生日期';
            return;
        }
        
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        
        if(empty($_FILES['avatar']))
        {
            $GLOBALS['message'] = '请上传文件';
            return;
        }
        //将上传文件的汉字替换掉
        $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $target = './assets/img/' . uniqid() . '.' . $ext;
        
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], $target))
        {
            $GLOBALS['message'] = '上传头像失败';
            return;
        }
        $GLOBALS['message'] = '上传成功';
        $avatar = substr($target, 1);
        
        //1.建立与数据库的链接
        $connect = mysqli_connect('localhost', 'test', 'test', 'demo');
        if(!$connect)
        {
            $GLOBALS['message'] = '连接数据库失败';
            return;
        }
        //2.开始查询
        $db_data = mysqli_query($connect, "insert into test values(null, '{$name}', {$gender}, '{$birthday}', '{$avatar}');");

        if(!$db_data)
        {
            $GLOBALS['message'] = '查询过程失败';
            return;
        }
        
        $affected = mysqli_affected_rows($connect);
        if($affected != 1)
        {
            $GLOBALS['message'] = '添加数据失败';
            return;
        }

        mysqli_close($connect);
        header('location: index.php');
    }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        add_users();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>XXX管理系统</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">XXX管理系统</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">用户管理</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">商品管理</a>
      </li>
    </ul>
  </nav>
  <main class="container">
    <h1 class="heading">添加用户</h1>
    <?php if(isset($message)): ?>
      <div class="alert alert-warning">
        <?php echo $message; ?>
      </div>
    <?php endif ?>
    <form accept="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="form-group">
        <label for="avatar">头像</label>
        <input type="file" class="form-control" id="avatar" name="avatar" >
      </div>
      <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name="name" >
      </div>
      <div class="form-group">
        <label for="gender">性别</label>
        <select class="form-control" id="gender" name="gender" >
          <option value="-1">请选择性别</option>
          <option value="1">男</option>
          <option value="0">女</option>
        </select>
      </div>
      <div class="form-group">
        <label for="birthday">生日</label>
        <input type="date" class="form-control" id="birthday" name="birthday" >
      </div>
      <button class="btn btn-primary">保存</button>
    </form>
  </main>
</body>
</html>
