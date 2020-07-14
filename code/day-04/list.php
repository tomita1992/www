<?php 
    $json = file_get_contents('./assets/data/data.json');
    $data = json_decode($json, true);

    //读取文件时有可能失败 所以一定要做校验
    if(!$data)
    {
      exit('<h1>数据文件异常</h1>');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>音乐列表</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>
<body>
  <div class="container py-5">
    <h1 class="display-4">音乐列表</h1>
    <hr>
    <div class="mb-3">
      <a href="add.html" class="btn btn-secondary btn-sm">添加</a>
    </div>
    <table class="table table-bordered table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">标题</th>
          <th class="text-center">歌手</th>
          <th class="text-center">海报</th>
          <th class="text-center">音乐</th>
          <th class="text-center">操作</th>
        </tr>
      </thead>
      <tbody class="text-center">
      <?php foreach($data as $value): ?>
        <tr>
          <td><?php echo $value['title'] ?></td>
          <td><?php echo $value['siger'] ?></td>
          <td>
            <?php foreach($value['imeags'] as $imeags): ?>
              <img src="<?php echo $imeags; ?>">
            <?php endforeach ?>
          </td>
          <td><audio src="<?php echo $value['source']; ?>" controls></audio></td>
          <td><a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger btn-sm" >删除</a></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>
