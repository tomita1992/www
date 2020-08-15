<?php

    $conn = mysqli_connect('127.0.0.1', 'root', 'cui02093920', 'demo');
    if(!$conn)
    {
        echo '连接服务器失败';
        return;
    }
    $query = mysqli_query($conn,"SELECT * FROM TEST;");

    while($row = mysqli_fetch_assoc($query))
    {
        $data[] = $row;
    }
    //判断是否为GET请求 如果不是 直接返回json
    if(empty($_GET['callback']))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }
    //如果为GET就返回JSONP
    header('Content-Type: application/javascript');

    $result = json_encode($data);
    //如果客户端采用的是script标记对我发起的请求
    //一定要返回一段javascript

    $callback_name = $_GET['callback'];
    //查看传过来的callback是否为函数 如果是才返回给客户端
    echo "typeof {$callback_name} === 'function' && ${callback_name}(${result})";

