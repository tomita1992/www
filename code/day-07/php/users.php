<?php 
    header('Content-Type: application/json');
    $users = array(
        array(
            'id' => '1',
            'name' => '齐德龙',
            'age' => 29
        ),
        array(
            'id' => '2',
            'name' => '齐东强',
            'age' => 26
        ),
        array(
            'id' => '3',
            'name' => '齐天大圣',
            'age' => 25
        )
    );

    if(empty($_GET['id']))
    {
        //没有找到就返回全部
        //HTTP中约定的内容就是字符串 而返回给客户端时需要一个有结构的数据 一般为JSON格式 JSON也是字符串的一种
        $json = json_encode($users);
        echo $json;
    }
    else
    {
        //如果设置了id只获取一条
        foreach($users as $item)
        {
            if($item['id'] != $_GET['id'])
            {
                continue;
            }
            // $json = json_encode($item);
            echo $item['age'];
        }
    }