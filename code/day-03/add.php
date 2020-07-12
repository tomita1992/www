<?php
    
    //校验歌名是否为空且在20个字以下
    function check_title()
    {
        if(empty($_POST['title']))
        {
            $GLOBALS['message_title'] = '请填写歌名';
            return false; 
        }
        else
        {
            $str = mb_strlen($_POST['title']);
            
            if($str >= 20)
            {
                $GLOBALS['message_title'] = '歌名字符过长';
                return false;
            }
            //保存歌名
            $GLOBALS['title'] = $_POST['title'];
        }
        return true;
    }
    //校验歌手名是否为空且在7个字以下
    function check_singer()
    {
        
        if(empty($_POST['singer']))
        {
            $GLOBALS['message_singer'] = '请填写歌手名';
            return false;
        }
        else
        {
            $str = mb_strlen($_POST['singer']);
            if($str >= 7)
            {
                $GLOBALS['message_singer'] = '歌手名字符过长';
                return false;
            }
            //保存歌手名
            $GLOBALS['singer'] = $_POST['singer'];
        }
        return true;
    }
    //校验海报链接是否为空且在100字符以下
    function check_poster()
    {
        
        if(empty($_POST['poster']))
        {
            $GLOBALS['message_poster'] = '请填写海报链接';
            return false;
        }
        else
        {
            $str = strlen($_POST['poster']);
            if($str >= 100)
            {
                $GLOBALS['message_poster'] = '海报链接字符过长';
                return false;
            }
            //保存海报链接
            $GLOBALS['poster'] = $_POST['poster'];
        }
        return true;
    }
    //校验歌名，歌手名，海报链接的函数    
    function upload()
    {
        $check_title = check_title();
        $check_singer = check_singer();
        $check_poster = check_poster();   
        if($check_title && $check_singer && $check_poster)
        {
            return true;
        }
    }

    //校验图片文件是否上传成功
    function upload_img_file()
    {
        //查看是否上传图片文件
        if(!isset($_FILES['img_file']))
        {
            $GLOBALS['message_img_file'] = '请上传海报文件';
            return false;
        }
        $img = $_FILES['img_file'];
        
        if($img['error'] != UPLOAD_ERR_OK)
        {
            $GLOBALS['message_img_file'] = '上传海报失败';
            return false;
        }
        if($img['size'] > (1 * 1024 * 1024))
        {
            $GLOBALS['message_img_file'] = '图片文件过大';
            return false;
        }
        
        if($img['size'] < (1 * 1024))
        {
            $GLOBALS['message_img_file'] = '图片文件过小';
            return false;
        }
        $allowed_types = array('image/jpeg', 'image/png');
        if(!(in_array($img['type'], $allowed_types)))
        {
            $GLOBALS['message_img_file'] = '请上传正确的文件类型';
            return false;
        }
        //保存上传时的临时路径
        $source = $img['tmp_name'];
        //保存服务器存储路径
        $GLOBALS['target'] = './assets/img/' . uniqid(). '-' . $img['name'];
        
        $moved = move_uploaded_file($source, $GLOBALS['target']);
        
        if(!isset($moved))
        {
            $GLOBALS['message_img_file'] = '上传海报文件失败';
            return false;
        }
        else
        {
            return true;
        }
    }


    //校验音乐文件是否上传成功的函数
    function upload_music_file()
    {
        //查看是否上传音乐文件
        if(!(isset($_FILES['music_file'])))
        {
            $GLOBALS['message_file'] = '请上传音乐文件';
            return false;
        }
        
        //保存上传的音乐文件
        $music_file = $_FILES['music_file'];
        
        //查看上传音乐文件的错误码
        if($music_file['error'] != UPLOAD_ERR_OK)
        {
            $GLOBALS['message_file'] = '上传音乐文件失败';
            return false;
        }
        //一般不会用直接算好的数值 这样比较容易识别
        if($music_file['size'] > (11 * 1024 * 1024))
        {
            $GLOBALS['message_file'] = '音乐文件过大';
            return false;
        }
        
        if($music_file['size'] < (1 * 1024 * 1024))
        {
            $GLOBALS['message_file'] = '音乐文件过小';
            return false;
        }

        $music_types = array('audio/mpeg', 'audio/x-ms-wma');
        if(!(in_array($music_file['type'], $music_types)))
        {
            $GLOBALS['message_file'] = '请上传正确的文件类型';
            return false;
        }
        //保存上传文件的临时路径
        $source = $music_file['tmp_name'];
        //保存文件存放的路径
        $GLOBALS['path'] = './assets/music/' . uniqid(). '-' . $music_file['name'];
        //移动上传文件到正式的保存目录
        $moved = move_uploaded_file($source, $GLOBALS['path']);

        //查看文件是否移动成功
        if(!(isset($moved)))
        {
            $GLOBALS['message_file'] = '上传音乐文件失败';
            return false; 
        }
        else
        {
            return true;
        }
    }

    //保存上传数据的函数
    function uploaded_write()
    {
        //打开文件
        $fp_write = fopen('./assets/data/music_data.txt', 'a+');
        if(!$fp_write)
        {
            fclose($fp_write);
            return false;
        }
        $data = $GLOBALS['title'] . ' | ' . $GLOBALS['singer'] . ' | ' . $GLOBALS['poster'] . ' | ' . $GLOBALS['target'] . ' | ' . $GLOBALS['path'] . "\n";
        
        //写入文件
        fputs($fp_write, $data);
        fclose($fp_write);
        
        $GLOBALS['uploaded'] = true;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //校验歌名，歌手名，歌手信息链接
        if(upload())
        {   
            //校验海报文件,音乐文件
            if(upload_img_file() && upload_music_file())
            {   
                //写入数据
                uploaded_write();
            }   
        }
        if(isset($GLOBALS['uploaded']))
        {
            header('Location: music.php');
        }
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
    <div class="container mt-5">
        <h1 class = "display-4">添加音乐</h1>
        <hr>
        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" enctype="multipart/form-data" autocomplete="off">
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
                
                <?php if($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
                    <input type="text" class = "form-control" name = "singer" id = "singer" aria-describedby = "singerhelp" placeholder = "请输入7字以下的歌手名">
                <?php elseif($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                    <input type="text" class = "<?php echo empty($message_singer)? 'form-control is-valid' : 'form-control is-invalid' ;?>" name = "singer" value = "<?php echo isset($singer)? $singer : '' ; ?>" id = "singer" aria-describedby = "singerhelp" placeholder = "请输入7字以下的歌手名">
                <?php endif ?> 
                
                <small id = "singerhelp" class="invalid-feedback"><?php echo isset($message_singer) ? $message_singer : ''; ?></small>
            </div>
            
            <div class="form-group mb-5">
                <label for = "name">歌手信息</label>
                <?php if($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
                    <input type="text" class = "form-control" name = "poster" id = "poster" aria-describedby = "posterhelp" placeholder = "请添歌手信息链接">
                <?php elseif($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                    <input type="text" class = "<?php echo empty($message_poster)? 'form-control is-valid' : 'form-control is-invalid' ?>" name = "poster" value = "<?php echo isset($poster)? $poster : '' ; ?>" id = "poster" aria-describedby = "poster" placeholder = "请输入100字以下链接">
                <?php endif ?> 
                <small id = "posterhelp" class="invalid-feedback"><?php echo isset($message_poster) ? $message_poster : ''; ?></small>
            </div>
            
            <div class="form-group mb-5">
                <div class = "custom-file">
                    <label class = "custom-file-label" for = "custom_img_File">请上传海报图片</label>  
                    <input type = "file" class = "custom-file-input is-invalid" accept="image/*" name = "img_file" id = "custom_img_File" aria-describedby = "img_filehelp">
                    <small id = "img_filehelp" class="invalid-feedback"><?php echo isset($message_img_file) ? $message_img_file : ''; ?></small>
                </div>
            </div>
            
            <div class="form-group mb-5">
                <div class = "custom-file">
                    <label class = "custom-file-label" for = "custom_music_File">请上传音乐文件</label>  
                    <input type = "file" class = "custom-file-input is-invalid" accept="audio/*" name = "music_file" id = "custom_music_File" aria-describedby = "music_filehelp">
                    <small id = "music_filehelp" class="invalid-feedback"><?php echo isset($message_file) ? $message_file : ''; ?></small>
                </div>
            </div>
            
            <!-- class = "btn btn-block btn-primary"可以让按钮横向布满整个要素 -->
            <div class = "form-group">
                <label for="save_file"></label>  
                <button type="subimt" class = "btn btn-block btn-primary" id = "save_file">保存</button>
            </div>
        </form>
        <?php if(isset($uploaded)): ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">上传成功!</h4>
            <p>请在音乐列表中查看</p>
        </div>
        <?php else : ?>
            <?php echo ''; ?>
        <?php endif ?>
        <div class="container mt-5">
            <hr>
            <a href="http://day-03.io/music.php" class="btn btn-secondary btn-lg">返回音乐列表</a>
        </div>
    </div>
</body>
</html>