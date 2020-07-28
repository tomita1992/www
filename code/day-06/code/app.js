//处理Ajax请求的文件

//载入一个express模块
const express = require('express');
//生成一个对象
const app = express();
//处理从localhost:2090/time的请求并返回当前的时间
app.get('/time', (req, res) => {
    //返回一个当前时间
    res.send(Date.now() + '');
});
//static可以处理静态页面的请求
app.use(express.static(__dirname + '/public'))

//监听2090端口如果成功就显示一句话
app.listen(2090, () => {
    console.log('server run at http://localhost:2090');
});