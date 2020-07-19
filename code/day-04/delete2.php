<?php 
      //在数据库中实现删除
      //1.连接数据库
      if(!$_SERVER['REQUEST_METHOD'] === 'GET')
      {
          echo '删除失败';
          header('location:index.php');
          return;
      }
      if(empty($_GET['id']))
      {
          exit('必须传入指定参数');
      }
      $connect = mysqli_connect('localhost', 'test', 'test', 'demo');
      if(!$connect)
      {
        exit('数据库连接失败'.mysqli_connect_errno() . PHP_EOL);
      }
      
      //2.查看是否为批量删除
      if((count($_GET['id'])) > 1)
      {
        $id = implode(',', $_GET['id']);
        $query = mysqli_query($connect, "delete from test where id in ( \"$id\") limit 1;");
      }
      else
      {
        $id = $_GET['id'];
        $query = mysqli_query($connect, "delete from test where id = {$id} limit 1;");
      }
      
      if(!$query)
      {
          exit('查询数据失败');
      }
      $rows = mysqli_affected_rows($connect);
      if($rows > 0)
      {
        header('location:index.php');
      }
      else
      {
          
      }
