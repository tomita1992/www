<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- require 特点是如果文件不存在就会报一个致命的错误 当前文件就不会再执行 -->
    <!-- include 的特点是如果文件不存在只会出一个警告 其他的页面还是可以正常执行 -->
    <?php include 'aside1.php'; ?>
    <main>
        这是主要区域
    </main>
</body>
</html>