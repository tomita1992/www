<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php if(isset($_COOKIE['key'])): ?>
        
    <?php else: ?>
    <a href="setcookie.php">×</a>
    <?php endif ?>
</body>
</html>