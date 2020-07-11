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
            width: 100px;
            height: 100px;
        }
    </style>
    <title>音乐列表</title>
</head>
<body>
    <div class="container my-3">
        <h1 class = "display-4">音乐列表</h1>
        <hr>
        <table class="table table-bordered table-dark table-striped">
            <thead class = "thead-inverse">
                <tr>
                    <td>编号</td>
                    <td>歌名</td>
                    <td>歌手名</td>
                    <td>歌手信息</td>
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
                    <td><img src="<?php echo isset($music[0][3]) ? $music[0][3] : '' ;?>" alt=""></td>
                    <td><audio src="<?php echo isset($music[0][4]) ? $music[0][4] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[1][0]) ? $music[1][0] : '' ;?></td>
                    <td><?php echo isset($music[1][1]) ? $music[1][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[1][2]) ? $music[1][2] : '' ;?>">查看</a></td>
                    <td><img src="<?php echo isset($music[1][3]) ? $music[1][3] : '' ;?>" alt=""></td>
                    <td><audio src="<?php echo isset($music[1][4]) ? $music[1][4] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[2][0]) ? $music[2][0] : '' ;?></td>
                    <td><?php echo isset($music[2][1]) ? $music[2][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[2][2]) ? $music[2][2] : '' ;?>">查看</a></td>
                    <td><img src="<?php echo isset($music[2][3]) ? $music[2][3] : '' ;?>" alt=""></td>
                    <td><audio src="<?php echo isset($music[2][4]) ? $music[2][4] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[3][0]) ? $music[3][0] : '' ;?></td>
                    <td><?php echo isset($music[3][1]) ? $music[3][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[3][2]) ? $music[3][2] : '' ;?>">查看</a></td>
                    <td><img src="<?php echo isset($music[3][3]) ? $music[3][3] : '' ;?>" alt=""></td>
                    <td><audio src="<?php echo isset($music[3][4]) ? $music[3][4] : ''; ?>" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid();?></td>
                    <td><?php echo isset($music[4][0]) ? $music[4][0] : '' ;?></td>
                    <td><?php echo isset($music[4][1]) ? $music[4][1] : '' ;?></td>
                    <td><a href="<?php echo isset($music[4][2]) ? $music[4][2] : '' ;?>">查看</a></td>
                    <td><img src="<?php echo isset($music[4][3]) ? $music[4][3] : '' ;?>" alt=""></td>
                    <td><audio src="<?php echo isset($music[4][4]) ? $music[4][4] : ''; ?>" controls></audio></td>
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