<?php 
    
    require 'delete.php';
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
        $rows = 0;
        //读取到最后一行为止
        while(!feof($fp_ride))
        {
            //带入每一行数据
            $data = fgets($fp_ride, BYTE_300);
            //将一行的数据分割成每个部分
            $tmp = explode('|', $data);
            foreach($tmp as $kay =>$value)
            {
                $music[$rows][$kay] = trim($value);
            }
            $rows++;
        }
    }
    fclose($fp_ride);

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HTML中/为根目录 -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <style>
        img
        {
            max-width: 80px;
            max-height: 80px;
        }
    </style>
    <title>音乐列表</title>
</head>
<body>
    <div class="container my-3">
        <h1 class = "display-4">音乐列表</h1>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <table class="table table-bordered table-dark table-striped">
                <thead class = "thead-inverse">
                    <tr>
                        <td class="text-center">编号</td>
                        <td class="text-center">歌名</td>
                        <td class="text-center">歌手名</td>
                        <td class="text-center">歌手信息</td>
                        <td class="text-center">海报</td>
                        <td class="text-center">播放</td>
                        <td class="text-center">操作</td>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 0; $i < ($rows-1); $i++): ?>
                    <tr>
                        <td><?php echo ($i+1); ?></td>
                        <td><?php echo $music[$i][0]; ?></td>
                        <td><?php echo $music[$i][1]; ?></td>
                        <td><a href="<?php echo $music[$i][2]; ?>">查看</a></td>
                        <td><img src="<?php echo $music[$i][3]; ?>" alt=""></td>
                        <td><audio src="<?php echo $music[$i][4]; ?>" controls></audio></td>
                        <td><button class="btn btn-danger btm-sm" name = "<?php echo $i; ?>">删除</button></td>
                    </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </form>
        <div class="container mt-5">
            <hr>
            <a href="http://day-03.io/add.php" class="btn btn-secondary btn-lg btn-block">添加</a>
        </div>
    </div>
</body>
</html>