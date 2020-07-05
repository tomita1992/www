<?php 


    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $i = 0;
        if(empty($_POST['funs']))
        {
            echo '请填写兴趣';
        }
        else
        {
            $str = implode(' , ', $_POST['funs']);
            
            
            echo $str;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" id = "contact_form">
        <div class = "contact_row">
            <label>兴趣</label>
            <div class = "contact_call">
                <input type="checkbox" name = "funs[0]"  value = "football">足球
                <input type="checkbox" name = "funs[1]"  value = "basketball">篮球
                <input type="checkbox" name = "funs[2]"  value = "earth">地球
            </div>
        </div>
        <div class = "contact_row">
            <div class = "contact_call">
                <button form = "contact_form">提交</button>
            </div>
        </div>
    </form>
</body>
</html>