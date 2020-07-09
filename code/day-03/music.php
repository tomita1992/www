<?php 
    
    //打开文件读取数据 php中.为根目录
    $file = fopen('./assets/data/music_data', 'r');

    if(!$file)
    {
        echo '读取数据错误';
    }
    else
    {   
        //定义一个读取最大值为100Byte的常数
        define('BYTE_100', 100);
        //读取到最后一行为止
        while(!feof($file))
        {
            //带入每一行数据
            $data = fgets($file, BYTE_100);
            //将一行的数据分割成每个部分
            $music[] = explode('|', $data);
        }
    }
    fclose($file);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <!-- HTML中/为根目录 -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>音乐列表</title>
</head>
<body>
    <div class="container my-5">
        <h1 class = "display-4">音乐列表</h1>
        <hr>
        <table class="table table-bordered table-dark table-striped">
            <thead class = "thead-inverse">
                <tr>
                    <td>编号</td>
                    <td>歌名</td>
                    <td>歌手</td>
                    <td>海报</td>
                    <td>播放</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[0][0]) ? $music[0][0] : '' ;?></td>
                    <td><?php echo isset($music[0][1]) ? $music[0][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[0][2]) ? $music[0][2] : '' ;?>">查看</a></td>
                    <td><audio src="<?php echo isset($music[0][3]) ? $music[0][3] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[1][0]) ? $music[1][0] : '' ;?></td>
                    <td><?php echo isset($music[1][1]) ? $music[1][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[1][2]) ? $music[1][2] : '' ;?>">查看</a></td>
                    <td><audio src="<?php echo isset($music[1][3]) ? $music[1][3] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[2][0]) ? $music[2][0] : '' ;?></td>
                    <td><?php echo isset($music[2][1]) ? $music[2][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[2][2]) ? $music[2][2] : '' ;?>">查看</a></td>
                    <td><audio src="<?php echo isset($music[2][3]) ? $music[2][3] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
            </tbody>
        </table>
        <div class="container mt-5">
            <hr>
            <a href="http://day-03.io/add.php" class="btn btn-secondary btn-lg btn-block">添加</a>
        </div>
    </div>
</body>
</html>