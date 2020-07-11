<?php 
    
    //打开文件读取数据 php中.为根目录
    $fp_ride = fopen('./assets/data/music_data.txt', 'r');

    if(!$fp_ride)
    {
        fclose($fp_ride);
    }
    else
    {   
        //定义一个读取最大值为100Byte的常数
        define('BYTE_300', 300);
        $i = 0;
        //读取到最后一行为止
        while(!feof($fp_ride))
        {
            //带入每一行数据
            $data = fgets($fp_ride, BYTE_300);
            //将一行的数据分割成每个部分
            $tmp = explode('|', $data);
            foreach($tmp as $key => $value)
            {
                $music[] = trim($value);
            }
            $i++;
        }
        var_dump($music);
    }
    fclose($fp_ride);
?>