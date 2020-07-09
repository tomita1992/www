<?php
    
    //校验歌名是否为空且在20个字以下
    function check_title()
    {
        if(empty($_POST['title']))
        {
            $GLOBALS['message_title'] = '请填写歌名';
            return;
            if((mb_strlen($_POST['title']) <= 20))
            {
                $GLOBALS['message_title'] = '歌名字符过长';
                return;
            }
        }
        //保存歌名
        $GLOBALS['title'] = $_POST['title'];
    }
    //校验歌手名是否为空且在7个字以下
    function check_singer()
    {
        
        if(empty($_POST['singer']))
        {
            $GLOBALS['message_singer'] = '请填写歌手名';
            return;
            if((mb_strlen($_POST['singer']) <= 7))
            {
                $GLOBALS['message_singer'] = '歌手名字符过长';
                return;
            }
        }
        //保存歌手名
        $GLOBALS['singer'] = $_POST['singer'];
    }
    //校验海报链接是否为空且在100字符以下
    function check_poster()
    {
        
        if(empty($_POST['poster']))
        {
            $GLOBALS['message_poster'] = '请填写海报链接';
            return;
            if((strlen($_POST['poster']) <= 100))
            {
                $GLOBALS['message_poster'] = '海报链接字符过长';
                return;
            }
        }
        //保存海报链接
        $GLOBALS['poster'] = $_POST['poster'];
    }
    //校验歌名，歌手名，海报链接的函数    
    function upload()
    {
       check_title();
       check_singer();
       check_poster();   
    }
    //校验文件是否上传成功的函数
    function upload_file()
    {
        //查看是否上传文件
        if(!isset($_FILES['music_file']))
        {
            $GLOBALS['message_file'] = '请上传音乐文件';
            return;
        }
        
        //保存上传的文件
        $music_file = $_FILES['music_file'];
        
        //查看上传文件的错误码
        if($music_file['error'] != UPLOAD_ERR_OK)
        {
            $GLOBALS['message_file'] = '上传音乐文件失败';
            return;
        }
        //保存上传文件的临时路径
        $source = $music_file['tmp_name'];
        //保存文件存放的路径
        $GLOBALE['target'] = './assets/data/' . $music_file['name'];
        //移动上传文件到正式的保存目录
        
        //查看文件是否移动成功
        if(!isset($GLOBALE['target']))
        {
            $GLOBALS['message_file'] = '上传音乐文件失败';
            return; 
        }
        
        $GLOBALS['message_file'] = '保存成功';
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        upload();
        upload_file();
    }
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>添加音乐</title>
</head>
<body>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
        </div>
      </div>
    </div>
    <div class="container mt-5">
        <h1 class = "display-4">添加音乐</h1>
        <hr>
        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST" enctype="multipart/form-data;">
            <div class="form-group">
                <label for = "title">歌名</label>
                
                <!-- class = "form-control中添加 is-valid代表通过边框会变绿色 is-invalid代表不通过边框会变红色" -->
                <?php if($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
                    <input type="text" class = "form-control" name = "title" id = "title" aria-describedby = "titlehelp" placeholder = "请输入20字以下的歌名">
                <?php elseif($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                    <input type="text" class = "<?php echo empty($message_title) ? 'form-control is-valid' : 'form-control is-invalid' ; ?>" name = "title"  value = "<?php echo isset($title) ? $title : '' ; ?>" id = "title" aria-describedby = "titlehelp" placeholder = "请输入20字以下的歌名">
                <?php endif ?>
                
                <!-- class= invalid-feedback可以让错误信息变成红色显示(当input中的class为is-invalid时才会显示错误信息) "form-text text-muted"为普通文本 -->
                <small id = "titlehelp" class="invalid-feedback"><?php echo isset($message_title) ? $message_title : ''; ?></small>
            </div>
           
            <div class="form-group">
                <label for="singer">歌手</label>
                <input type="text" class = "form-control is-invalid" name = "singer" id = "singer" aria-describedby = "singerhelp" placeholder = "请输入7字以下的歌手名">
                <small id = "singerhelp" class="invalid-feedback"><?php echo isset($message_singer) ? $message_singer : ''; ?></small>
            </div>
            <div class="form-group">
                <label for = "name">海报</label>
                <input type = "text" class = "form-control is-invalid" name = "poster" id = "name" aria-describedby = "namehelp" placeholder = "请添加海报链接">
                <small id = "namehelp" class="invalid-feedback"><?php echo isset($message_poster) ? $message_poster : ''; ?></small>
            </div>
            <div class = "custom-file">
                <label class = "custom-file-label" for = "customFile">请上传音乐文件</label>  
                <input type = "file" class = "custom-file-input is-invalid"  name = "music_file" id = "customFile" aria-describedby = "filehelp">
                <small id = "filehelp" class="invalid-feedback"><?php echo isset($message_file) ? $message_file : ''; ?></small>
            </div>
            <!-- class = "btn btn-block btn-primary"可以让按钮横向布满整个要素 -->
            <div class = "form-group">
                <label for="save_file"></label>  
                <button class = "btn btn-block btn-primary" id = "save_file">保存</button>
            </div>
        </form>
        <div class="container mt-5">
            <hr>
            <a href="http://day-03.io/music.php" class="btn btn-secondary btn-lg">返回音乐列表</a>
        </div>
    </div>
</body>
</html>