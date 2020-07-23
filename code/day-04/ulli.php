<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', 'cui02093920', 'demo');
    
    if(!$connect)
    {
        echo '<h1>数据库连接失败</h1>';
    }
    
    $db_all = mysqli_query($connect, 'select * from categories;');
    $db_con = mysqli_query($connect, 'select parent_id, name, id from categories;');

    if(!$db_all)
    {
        echo '<h1>读取数据失败</h1>';
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分类</title>
</head>
<body>
    <?php while($value = mysqli_fetch_assoc($db_all)): ?>
        <ul>
            <li><?php echo $value['name']; ?>
                <ul>
                    <?php while($con = mysqli_fetch_assoc($db_con)): ?>
                        <?php if($value['id'] == $con['parent_id']): ?>
                            <li><?php echo $con['name']; ?></li>
                            
                        <?php else: ?>
                            <ul></ul>
                        <?php endif ?>
                    <?php endwhile ?>
                </ul>
            </li>
        </ul>
    <?php endwhile ?>   
</body>
</html>