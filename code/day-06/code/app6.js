/**
 * Ajax bilibili 1-11 同步与异步
 */

 const express = require('express');
 const app = express();

 app.use(express.static(__dirname + '/public'));

app.get('/async', (req, res) => {
    //可以用setTimeout设置响应的延长时间
    setTimeout(() => {
        res.send(Date.now() + '')
    },3000);
});

 app.listen(2090, () => console.log('server run at http://localhost:2090'));