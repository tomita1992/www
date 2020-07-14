<?php 

      function file_check()
      {
        if(!isset($_FILES['images']))
        {
          $GLOBALS['message_file'] = '请正确使用表单';
          return;
        }

        $imeags = $_FILES['images'];
        for($i = 0; $i < count($imeags['name']); $i++)
        {
          if($imeags['error'][$i] != UPLOAD_ERR_OK)
          {
            $GLOBALS['message_file'] = '上传文件失败';
            return;
          }
          
          if(strpos($imeags['type'][$i], 'image/') != 0)
          {
            $GLOBALS['message_file'] = '上传文件失败';
            return;
          }
          if($imeags['size'][$i] > (5 * 1024 * 1024))
          {
            $GLOBALS['message_file'] = '文件过大';
            return;
          }
          if($imeags['size'][$i] < (1 * 1024))
          {
            $GLOBALS['message_file'] = '文件过小'; 
            return;
          }
          
          $old_path = $imeags['tmp_name'][$i];
          $new_path = './data/' . uniqid() . $imeags['name'][$i];
          $check_move = move_uploaded_file($old_path, $new_path);
          if(!$check_move)
          {
            $GLOBALS['message_file'] = '上传文件失败';
            return;
          }
        }
        $GLOBALS['message_file'] = '上传文件成功';
      }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      file_check();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
          </div>
        </div>
      </div>

  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="container py-5"> 
      <label for="images"></label>
      <input type="file" id="images" name="images[]" multiple accept="image/*">
      <button type="submit">提交</button>
    </div><hr>
    <?php if(isset($message_file)): ?>
      <tr>
          <td></td>
          <td><?php echo $message_file; ?></td>
      </tr>
    <?php endif ?>
  </form>
</body>
</html>