<?php 
    if(!isset($_GET['id']))
    {
        exit("<h1>必须指定参数</h1>");    
    }

    $id = $_GET['id'];
    
    $json = file_get_contents('./assets/data/data.json');
    $data = json_decode($json, true);
        
        //读取每一条数据
        foreach($data as $value)
        {
            //查看是否与要删除的ID相匹配
            if($value['id'] != $id)
            {
                //只要不匹配就返回重新读取
                continue;
            }
            //查看要删除的那条在原有数组中的哪一行
            $index = array_search($value, $data);
            //从原有数据中删除那一行 1代表删除一行
            array_splice($data, $index, 1);
            //再重新保存回文件当中
            $json = json_encode($data);   
            file_put_contents('./assets/data/data.json', $json);
            //跳转回原页面
            header('location: list.php');
            break;  
        }
?>