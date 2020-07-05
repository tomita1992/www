<?php 

    //表单处理三部曲
    //1.接收并校验
    //2.持久化        在数据库或者文件上持久保存
    //3.响应          服务端的反馈
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        
      
        if(empty($_POST['user_id']))
        {
            //要么没有提交用户名 或者 用户名为空
            $message = '请输入用户名';
        }
        else
        {
            if(empty($_POST['password']))
            {
                //要么没有提交密码 或者 用户名为空
                $message = '请输入密码';
            }
            else
            {
                if(empty($_POST['confirm']))
                {
                    //要么没有提交密码 或者 用户名为空
                    $message = '请输入确认密码';
                }
                else
                {
                    if($_POST['password'] != $_POST['confirm'] )
                    {
                        //判断密码是否一致
                        $message = '密码不一致';
                    }
                    else
                    {
                        if(!(isset($_POST['agree']) && $_POST['agree'] == 'true'))
                        {
                            $message = '必须同意用户协议';
                        }
                        else
                        {
                            if(empty($_POST['funs']))
                            {
                                $message = '请填写兴趣';
                            }
                            else
                            {
                                $myfile = fopen('mydata.txt', 'a+');
                                $i = 0;
                            
                                foreach($_POST as $key => $value)
                                {
                                    if($key == 'funs')
                                    {
                                        $cmp[$i] = implode(' , ', $_POST['funs']).' | ';
                                        $i++;
                                    }
                                    else
                                    {
                                        $cmp[$i] = $value.' | ';
                                        $i++;
                                    }
                                }    
                                $str = $cmp[0].$cmp[1].$cmp[3].$cmp[4].$cmp[5].$cmp[6]."\n";
                                fputs($myfile, $str);    
                                fclose($myfile);
                            }                                                     
                        }
                    }
                }
            }    
        }    
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户注册</title>
</head>
<body>
    <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
        <table border = "1">
            <tr>
                <td><label for = "user_id"></label>用户名</td>
                <td><input type = "text" name = "user_id" id = "user_id"></td>
            </tr>
            <tr>
                <td><label for = "password">密码</label></td>
                <td><input type = "password" name = "password" id = "password"></td>    
            </tr>
            <tr>
                <td><label for = "confirm"></label>确认密码</td>
                <td><input type = "password" name = "confirm" id = "confirm"></td>
            </tr>
            <tr>
                <td><label for = "email"></label>邮箱</td>
                <td><input type = "email" name = "email" id = "email"></td>
            </tr>
            <tr>
                <td><label for = "gender"></label>性别</td>
                <td><input type = "radio" name = "gender" value = "male" id = "gender" checked>男性
                <input type = "radio" name = "gender" value = "female">女性</td>
            </tr>
            <tr>
                <td><label for = "fun"></label>兴趣</td>
                <td><input type = "checkbox" name = "funs[]" value = "football" id = "fun">足球
                <input type = "checkbox" name = "funs[]" value = "basketball">篮球
                <input type = "checkbox" name = "funs[]" value = "earth">地球</td>
            </tr>
            <tr>
                <td><label for = "job"></label>工作</td>
                <td>
                    <select name = "job" id = "job">
                        <option value = "临时工">临时工</option>
                        <option value = "正式员工">正式员工</option>
                        <option value = "老总">老总</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for = "consult"></label></td>
                <td><input type = "checkbox" name = "agree" value = "true" id = "consult">同意协议</td>
            </tr>
            <?php if(isset($message)): ?>
                <tr>
                <td></td>
                <td><?php echo $message; ?></td>
            </tr>
            <?php endif ?>
            <tr>
                <td></td>
                <td><button>提交</button></td>
            </tr>
        
        </table>



    </form>
</body>
</html>