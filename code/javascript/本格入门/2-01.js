{
    let str = 'hello, world';
    let ary = ['Jacascript', ['jQuery', 'prototype.js'], 'Ajax', 'ASP.NET'];
    let obj = {x:'Jacascript', y:'Ajax', j:'ASP.NET'};
    
    let [a1, a2, all = '没有'] = ary;
    window.alert(`${a1}\n${a2}\n${all}`);
    
    let book = {title:'java', publish:'技术评论社', price: 200, other:{keywd:'avc', logo:'asdf'}};
    let {price, title:name, other,other:{keywd:key, logo:lo}} = book;
    console.log(name,other);
    window.alert(`${key}\n${lo}`);

}
