/*
*     获取指定格式的时间
* */
function myTetDate(date){
    //取得现在的日期与时间
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let scond = date.getSeconds();

    //如果小于10就在前面加上10
    month = month < 10 ? '0' + month : month;
    day = day < 10 ? '0' + day : day;
    hour = hour < 10 ? '0' + hour : hour;
    minute = minute < 10 ? '0' + minute : minute;
    scond = scond < 10 ? '0' + scond : scond;

    //拼接之后返回
    return year + '年' + month + '月' + day + '日 ' + hour + ':' + minute + ':' + scond;
}

/**
 * 根据ID返回DOM对象
 * @param id id属性的值
 * @returns {Element}
 */
function my$(id){
    return document.getElementById(id);
};