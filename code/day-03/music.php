<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/img/css/bootstrap.css">
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
                    <td><?php echo uniqid(); ?></td>
                    <td>错过</td>
                    <td>床前的月光</td>
                    <td><img src="" alt=""></td>
                    <td><audio src="" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid(); ?></td>
                    <td>错过</td>
                    <td>床前的月光</td>
                    <td><img src="" alt=""></td>
                    <td><audio src="" controls></audio></td>
                    <td><button class="btn btn-danger btm-sm">删除</button></td>
                </tr>
                <tr>
                    <td><?php echo uniqid(); ?></td>
                    <td>错过</td>
                    <td>床前的月光</td>
                    <td><img src="" alt=""></td>
                    <td><audio src="" controls></audio></td>
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