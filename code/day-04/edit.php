<?php 
    if(empty($_GET['id']))
    {
        exit('必须传入指定参数');
    }
    $id = $_GET['id'];
    
    //1.建立与数据库的链接
    $connect = mysqli_connect('localhost', 'test', 'test', 'demo');
    if(!$connect)
    {
      exit('数据库连接失败'.mysqli_connect_errno() . PHP_EOL);
    }
    //2.开始查询
    $db_data = mysqli_query($connect, "select * from test where id = {$id} limit 1;");
    if(!$db_data)
    {
      exit('查询数据失败');
    }

    $user = mysqli_fetch_assoc($db_data);
    if(!$user)
    {
        exit('找不到你要编辑的数据');
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        
        if($user['name'] != $_POST['name'])
        {
            $name = $_POST['name'];
            mysqli_query($connect, "update test set name = '{$name}' where id = {$id};");
        }
        if($user['gender'] != $_POST['gender'])
        {
            $gender = $_POST['gender'];
            mysqli_query($connect, "update test set gender = {$gender} where id = {$id};");
        }
        if($user['birthday'] != $_POST['birthday'])
        {
            $birthday = $_POST['birthday'];
            mysqli_query($connect, "update test set birthday = '{$birthday}' where id = {$id};");
        }
        
        if(isset($_FILES) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK)
        {
            //将上传文件的汉字替换掉
            $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            $target = './assets/img/' . uniqid() . '.' . $ext;
            
            if(!move_uploaded_file($_FILES['avatar']['tmp_name'], $target))
            {
                $GLOBALS['message'] = '上传头像失败';
                return;
            }
            
            $avatar = substr($target, 1);
            
            mysqli_query($connect, "update test set avatar = '{$avatar}' where id = {$id};");
        }
        header('location: index.php');
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
    <h1 class="heading">编辑<?php echo $user['name']; ?></h1>
    <form accept="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $user['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="img">
            <img src="<?php echo $user['avatar']; ?>">
        </div>
      <div class="form-group">
        <label for="avatar">头像</label>
        <input type="file" class="form-control" id="avatar" name="avatar">>
      </div>
      <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>">
      </div>
      <div class="form-group">
        <label for="gender">性别</label>
        <select class="form-control" id="gender" name="gender">>
          <option value="-1">请选择性别</option> 
          <option value="1"<?php echo $user['gender'] == '1' ? ' selected' : ''; ?>>男</option>
          <option value="0"<?php echo $user['gender'] == '0' ? ' selected' : ''; ?>>女</option>
        </select>
      </div>
      <div class="form-group">
        <label for="birthday">生日</label>
        <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $user['birthday'];?>">
      </div>
      <button class="btn btn-primary">保存</button>
    </form>
  </main>
</body>
</html>
