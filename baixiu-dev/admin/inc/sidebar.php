<div class="aside">
    <div class="profile">
      <img class="avatar" src="/static/uploads/avatar.jpg">
      <h3 class="name">布头儿</h3>
    </div>
    <ul class="nav">
    
      <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php')? 'class="active"' : ''; ?>>
      <a href="/admin/index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
      </li>
        <?php if(basename($_SERVER['PHP_SELF']) == 'posts.php' || basename($_SERVER['PHP_SELF']) == 'post-add.php' || basename($_SERVER['PHP_SELF']) == 'categories.php'): ?>
          <li class="active">
          <a href="#menu-posts" data-toggle="collapse">
        <?php else: ?>
          <li>
          <a href="#menu-posts" class="collapsed" data-toggle="collapse">
        <?php endif ?>  
              <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
            </a>
            <?php if(basename($_SERVER['PHP_SELF']) == 'posts.php' || basename($_SERVER['PHP_SELF']) == 'post-add.php' || basename($_SERVER['PHP_SELF']) == 'categories.php'): ?>
              <ul id="menu-posts" class="collapse in">
            <?php else: ?>
              <ul id="menu-posts" class="collapse">
            <?php endif ?>  
              <li <?php echo (basename($_SERVER['PHP_SELF']) == 'posts.php')? 'class="active"' : ''; ?>><a href="/admin/posts.php">所有文章</a></li>
              <li <?php echo (basename($_SERVER['PHP_SELF']) == 'post-add.php')? 'class="active"' : ''; ?>><a href="/admin/post-add.php">写文章</a></li>
              <li <?php echo (basename($_SERVER['PHP_SELF']) == 'categories.php')? 'class="active"' : ''; ?>><a href="/admin/categories.php">分类目录</a></li>
            </ul>
          </li>
      <li <?php echo (basename($_SERVER['PHP_SELF']) == 'comments.php')? 'class="active"' : ''; ?>>
        <a href="/admin/comments.php"><i class="fa fa-comments"></i>评论</a>
      </li>
      <li <?php echo (basename($_SERVER['PHP_SELF']) == 'users.php')? 'class="active"' : ''; ?>>
        <a href="/admin/users.php"><i class="fa fa-users"></i>用户</a>
      </li>
        <?php if(basename($_SERVER['PHP_SELF']) == 'nav-menus.php' || basename($_SERVER['PHP_SELF']) == 'slides.php' || basename($_SERVER['PHP_SELF']) == 'settings.php'): ?>
          <li class="active">
          <a href="#menu-settings" data-toggle="collapse">
        <?php else: ?>
          <li>
          <a href="#menu-settings" class="collapsed" data-toggle="collapse">
        <?php endif ?>  
          <i class="fa fa-cogs"></i>设置<i class="fa fa-angle-right"></i>
        </a>
        <?php if(basename($_SERVER['PHP_SELF']) == 'nav-menus.php' || basename($_SERVER['PHP_SELF']) == 'slides.php' || basename($_SERVER['PHP_SELF']) == 'settings.php'): ?>
          <ul id="menu-settings" class="collapse in">
        <?php else: ?>
          <ul id="menu-settings" class="collapse">
        <?php endif ?>  
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'nav-menus.php')? 'class="active"' : ''; ?>><a href="/admin/nav-menus.php">导航菜单</a></li>
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'slides.php')? 'class="active"' : ''; ?>><a href="/admin/slides.php">图片轮播</a></li>
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'settings.php')? 'class="active"' : ''; ?>><a href="/admin/settings.php">网站设置</a></li>
        </ul>
      </li>
    </ul>
  </div>