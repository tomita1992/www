//载入一个HTTP模块
const http = require('http');
//创建一个对象 req(request), res(respones)为回调函数
const server = http.createServer((req, res) =>{
    //接收请求 返回响应的处理
    //每一个请求都会触发一个函数
    //以路由的方式将不同的URL指向对应的函数
    //node在处理请求时只能有一个线程来对应 后面的请求必须要等前面的处理结束后才能进行
    
    //获取客户端请求的地址
    if(req.url === '/1')
    {
        //只有1对应死循环
        for(;;)
        {
            console.log('大哥又卡住了');
        }
    }
    //返回一个响应
    res.write('hello');
    //结束响应
    res.end();

});

//监听一个端口 err为一个回调函数叫错误对象
server.listen(8080, (err) => {
    //查看有没有错误
    if(err)
    {
        console.log('error');
        return;
    }
    else
    {
        console.log('server is ready');
        return;
    }
});