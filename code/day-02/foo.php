<?php 
    //用于接收URL的提交数据（一般是GET参数）
    var_dump($_GET['password']);
    //$_POST用于接收请求体的数据中（一般是POST参数）
    var_dump($_POST);
    //$_REQUEST可以接收 $_GET与$_POST所提交的数据
    var_dump($_REQUEST['username']);