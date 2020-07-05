<?php
    //修改时区的函数
    date_default_timezone_set('PRC');
    //获得一个时间戳
    echo time(), '<br>';
    //第一个格式
    $str_time = date('Y-m-d H:i:s', time());
    echo $str_time, '<br>';
    
    //将已有格式的时间格式化变回一个时间后再加格式
    //date()格式中的字母大多有特殊含义 要换行需要转印<b\r>
    echo date('Y年m月d日<b\r>H時i分s秒<b\\r>', strtotime($str_time));
    //""  '' 的最大区别是""是给PHP解析字符串用的 尔''是给函数内部使用
    echo date("Y年m月d日<b\\r>H時i分s秒", strtotime($str_time));
