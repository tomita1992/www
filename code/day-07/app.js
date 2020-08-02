/**
 * Ajax bilibili 2-03 04 缓存问题
 */

 const express = require('express');
 const bodyParser = require('body-parser');
 const path = require('path');
 const app = express();
 let student = [
     {id: 1, name: '张三'},
     {id: 2, name: '李四'},
     {id: 3, name: '王五'}
 ]
 app.use(bodyParser.json());
 app.use(bodyParser.urlencoded());
 app.use(express.static(__dirname + '/public'));

 //处理post请求
 app.post('/add_student', (req, res) => {
    console.log(req.body);
    student.push(req.body);
    res.send(student);
 });

 //处理get请求
 app.get('/time', (req, res) => {
    console.log(req.query);
    res.send(Date.now().toString());
 });
 
 //通过HTTP响应报文来告诉浏览器不要缓存
 app.get('/time-no-cache', (req, res) => {
    //设置响应头 以下这三个不一定全部都要设定 但是为了对应不同的浏览器 可以全部加上
    res.set('Cache-Control', 'no-cache');
    res.set('Pragma', 'no-cache');
    res.set('Expires', '-1');
    res.send(Date.now().toString());
 });

 app.listen(2090, () => console.log('server run at http://localhost:2090'));