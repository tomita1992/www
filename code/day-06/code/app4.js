/**
 * Ajax bilibili 1-10 通过GET传送参数
 */

 const express = require('express');
 const app = express();
 const bodyParser = require('body-parser');
 const students = [
    {id: 1, name: '张三'},
    {id: 2, name: '李四'},
    {id: 3, name: '王五'}
]
 app.use(bodyParser.urlencoded());
 
 app.get('/student', (req, res) => {
    //query会自动把请求参数里的键值结构的数据转换为一个对象
    //express原生的功能就提供query
    // console.log(res.query.id);
    if(req.query.id)
    {
        //通过Array对象中的find方法可以直接
        const data = students.find(s => s.id == req.query.id);
        console.log(req.query.id);
        res.send(data.name);   
    }
    else
    {
        res.send('请传递参数');
    }
 });

 app.use(express.static(__dirname + '/public'));
 app.listen(2090, () => console.log('server run at http://localhost:2090'));