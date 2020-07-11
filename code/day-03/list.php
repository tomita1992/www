<?php 
    $contents = file_get_contents('./assets/data/data.json');
    $data = json_decode($contents);

    
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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
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
                    <?php foreach($data as $item): ?>
                        <tr>
                        <td><?php echo 1; ?></td>
                        <td><?php echo $item->title; ?></td>
                        <td><?php echo $item->artist; ?></td>
                        <td><img src="<?php echo $item->images[0]; ?>"></td>
                        <td><audio src="<?php echo $item->source; ?>" controls></audio></td>
                        <td><button class="btn btn-danger btm-sm" name = "1">删除</button></td>
                    </tr>
                    <?php endforeach ?>
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