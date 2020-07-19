<?php 
  
  //1.建立与数据库的链接
  $connect = mysqli_connect('localhost', 'test', 'test', 'demo');
  if(!$connect)
  {
    exit('数据库连接失败'.mysqli_connect_errno() . PHP_EOL);
  }
  //2.开始查询
  $db_data = mysqli_query($connect, 'select * from test;');
  if(!$db_data)
  {
    exit('查询数据失败');
  }
  $today = intval(date('Ymd',time()));

  // mysqli_free_result($db_data);
  // mysqli_close($connect);
  
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
    <h1 class="heading">用户管理 <a class="btn btn-link btn-sm" href="add.php">添加</a></h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>头像</th>
          <th>姓名</th>
          <th>性别</th>
          <th>年龄</th>
          <th class="text-center" width="140">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php while($value = mysqli_fetch_assoc($db_data)):
 
          for($i = 0; $i < strlen($value['birthday']); $i++)
          {
            if($value['birthday'][$i] != '-')
            {
              $age_tmp[] = $value['birthday'][$i];
            }
          }
          $age = intval($today) - intval(implode($age_tmp));
          unset($age_tmp);
          $age_str = strval($age);
          
        ?>
        <tr>
          <th scope="row"><?php echo $value['id']; ?></th>
          <td><img src="<?php echo $value['avatar']; ?>" class="rounded" alt="张三"></td>
          <td><?php echo $value['name']; ?></td>
          <td><?php echo $value['gender'] == 0? '♂' : '♀'; ?></td>
          <td><?php echo substr($age_str,0,2); ?></td>
          <td class="text-center">
            <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $value['id'] ?>">编辑</a>
            <a class="btn btn-danger btn-sm" href="delete2.php?id=<?php echo $value['id'] ?>">删除</a>
          </td>
        </tr>
        <?php endwhile ?>
      </tbody>
    </table>
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
    </ul>
  </main>
</body>
</html>
