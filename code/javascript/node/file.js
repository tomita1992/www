//载入操作文件的模块
const fs = require('fs');
//删除一个文件
fs.unlink('/www/mycode/code/javascript/node/hello.txt', (err) => {
    if(err)
    {   
        throw err;
    }
    console.log('hello.txt 已经删除');
});