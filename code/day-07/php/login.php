<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            exit('请输入用户名和密码');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === '123') 
        {
            exit('恭喜你');
        } 
        else 
        {
            exit('用户名或者密码错误');
        }
    }