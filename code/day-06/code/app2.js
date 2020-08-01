const express = require('express');
const app = express();

//可以用app.get获得一些值得被Ajax请求的地址
app.get('/time', (request, response) =>{
    //获取当前的时间 + '' 可以把当前的时间转成字符串
    //之所以这么做是因为让send里传入一些数字的话 会被默认为状态码 
    response.send(Date.now() + '');
});
//设置post请求
app.post('/add', (request, response) => {
    let data = '';
    //用on这个方法可以设置data事件 由客户端提交数据时触发  再以2进制的方式处理拼接到一起
    request.on('data', chunk => {
        //用chunk这个二进制的字节数组(流 也就是ストリーム)
        data += chunk.toString('utf8');
    });
    //end这个事件在数据接收完成时触发
    request.on('end', () => {
        console.log(data);
    });
    response.send('ok');
});

//express当中有一个static模块 可以帮助我们处理一些静态文件的请求 
//如果不想把Ajax的js代码写在模板里面就可以用express.static来让app2.js这个文件专门处理服务端的Ajax的请求
//而其他的静态文静可以专门放在静态文件的模块里
app.use(express.static(__dirname + '/public'));

//=> 为js当中的箭头函数
app.listen(2090, () => console.log('server run at http://localhost:2090'));