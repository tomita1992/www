/**
 * Ajax bilibili 2-06 07 留言板案例
 */
const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const app = express();

//js中可以用require载入JSON的内容 JSON文件中的数据会自动导出 不需要module.exports 不写扩展名也可以 默认的扩展名为json 与 js
const message = require('./db.json');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded());
app.use(express.static(path.join(__dirname, 'message')));
//在Web开发当中会把api或者程序的功能还有静态文件服务这些都放在一个Web应用下面的话会专门建一个类似文件夹一样的路径
//所有的接口以/api为开头
app.get('/api/message', (req, res) => {
    res.send(message);
});

//post请求处理添加数据时的处理
app.post('/api/reply', (req, res) => {
    const date = new Date();
    //接收客户端传来的数据
    const item = {
        name: req.body.name,
        content: req.body.content,
        created: date.toLocaleString()
    };
    message.push(item);
    console.log(item);
    res.send(item);
});

app.listen(2090, () => console.log('服务器已启动'));