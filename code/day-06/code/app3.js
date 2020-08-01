/**
 *  Ajax bilibili 1-08
 */

 //express为中间房间机制 为串联结构 可以理解为流水线
const express = require('express');
const app = express();
//req.body为bodyParser模块所提供的方法 是一个中间房间 可以理解为一个一个的小车间
const bodyParser = require('body-parser');
const port = 2090;
//bodyParser.urlencoded 专门用来解析key=value&key=value格式请求体的中间件
app.use(bodyParser.urlencoded());

app.post('/add', (req, res) => {
    console.log(req.body);
    res.send('ok');
});
app.use(express.static(__dirname + '/public'));
app.listen(port, () => console.log(`server run at http://localhost:${port}`));