<?php
/**
 *      根据用户邮箱获取用户头像
 *      email => image
 */
    //1. 接收传递过来的邮箱
    //2. 查询对应的头像地址
    //3. echo

    require_once '../../config.php';
    //接收传过来的参数
    if(empty($_GET['email']))
    {
        exit('缺少必要参数');
    }

    $email = $_GET['email'];

    //连接数据库查询
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if(!$conn)
    {
        exit('连接数据库失败');
    }

   $res = mysqli_query($conn, "select avatar from users where email = '{$email}' limit 1 ;");

    //查询出来的结果是一个关联数组
    $row = mysqli_fetch_assoc($res);

    if(empty($row))
    {
        exit('查询失败');
    }
    //avatar对应的就是表里列的名字
    echo $row['avatar'];

