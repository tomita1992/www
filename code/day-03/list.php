<?php 
        $title = '红玫瑰';
        $siger = '张碧晨';
        $images = '图片';
        $source = '音乐';

        $origin = json_decode(file_get_contents('./assets/data/data.json'), true);
        
        $origin[] = array(
            'id' => uniqid(),
            'title' => '红玫瑰',
            'siger' => '张碧晨',
            'images' => 'asd/asd',
            'source' => 'asd/asd',
        );

        $json = json_encode($origin);

        file_put_contents('./assets/data/data.json', $json);