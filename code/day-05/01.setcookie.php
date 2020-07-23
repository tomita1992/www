<?php 
    //header函数设置相同的键时 后面的值会覆盖掉前面的值
    header('Foo: 123');
   
    
    setcookie('key', 'value');
    //只传一个参数可以删除
    setcookie('key2');
    
    setcookie('key3', 'value3', time() + 1 * 60 * 60 * 24);
    setcookie('key4', 'value4');
    setcookie('key5', 'value5', time() + 1 * 60 * 60 * 24, '/test');
    setcookie('key6', 'value6', time() + 1 * 60 * 60 * 24, '', '' ,false, true);
    
    