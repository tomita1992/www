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
        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for = "title">歌名</label>
                <!-- class = "form-control中添加 is-valid代表通过边框会变绿色 is-invalid代表不通过边框会变红色" -->
                <input type="text" class = "form-control is-invalid" name = "tiele" id = "tiele" aria-describedby = "titlehelp" placeholder = "勇气">
                <!-- class= invalid-feedback可以让错误信息变成红色显示(当input中的class为is-invalid时才会显示错误信息) "form-text text-muted"为普通文本 -->
                <small id = "titlehelp" class="invalid-feedback">请输入一个歌名</small>
            </div>
            <div class="form-group">
                <label for="singer">歌手</label>
                <input type="text" class = "form-control is-invalid" name = "singer" id = "singer" aria-describedby = "singerhelp" placeholder = "梁静茹">
                <small id = "singerhelp" class="invalid-feedback">请输入歌手名</small>
            </div>
            <div class="form-group">
                <label for = "name">海报</label>
                <input type = "text" class = "form-control is-invalid" name = "name" id = "name" aria-describedby = "namehelp" placeholder = "添加海报链接">
                <small id = "namehelp" class="invalid-feedback">请输入海报链接</small>
            </div>
            <div class = "custom-file">
                <label class = "custom-file-label" for = "customFile">上传音乐文件</label>  
                <input type = "file" class = "custom-file-input is-invalid"  name = "music_file" id = "customFile" aria-describedby = "filehelp">
                <small id = "filehelp" class="invalid-feedback">请上传音乐文件</small>
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