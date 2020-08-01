/**
 * Ajax bilibili 1-10 通过POST发送请求2
 */
const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const students = [
    {id: 1, name: '张三'},
    {id: 2, name: '李四'},
    {id: 3, name: '王五'}
];

app.use(bodyParser.urlencoded());
//添加一个专门用来解析json格式的中间件
app.use(bodyParser.json());
app.use(express.static(__dirname + '/public'));

app.post('/add_student', (req,res) => {
    console.log(req.body);
    students.push(req.body);
    res.send(students);
});

app.listen(2090, () => console.log('server run at http://localhost:2090'));