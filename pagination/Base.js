/**
 * Created by p on 2016/9/12.
 */
var Base = {};
//obj==>为哪一个对象添加事件
//event==>不加on的事件名
//fn ===> 事件触发后调用的回调函数
Base.addEvent = function (obj,event,fn) {
    if(obj.addEventListener){
        obj.addEventListener(event,fn,false);
    }else if(obj.attachEvent){
        //load
        //这个方法需要两个参数，第一个参数是事件名，但是要加"on"
        obj.attachEvent("on"+event,fn);
    }
}
Base.$ = function (id) {
    return document.getElementById(id);
}
Base.disableA = function (id) {
    this.$(id).style.color = '#999';
    this.$(id).style.textDecoration = 'none';
}
Base.restA = function (id) {
    this.$(id).style = null;
}
//ajax请求
Base.ajax = function (params) {
    var xhr = null;
    if (window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }else{
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    params.type = params.type || "get";
    //如果请求是get请求，则要拼接参数到URL后边
    var a = [];
    var param = "";
    if(params.param) {
        for (var i in params.param) {
            if (params.param[i] != undefined) {
                a.push(i + "=" + params.param[i]);
                //id=123，password=456
            }
        }
    }
    param = a.join("&"); //id=123&password=456
    if(params.type == 'get'){
        params.url = params.url +"?"+param+"&t_="+new Date().getTime();
    }
    if(params.aysn == undefined){
        params.aysn = true;
    }
    xhr.open(params.type,params.url,params.aysn);
    if(params.type == 'get'){
        xhr.send(null);
    }else if(params.type == 'post'){
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send(param);
    }
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                if(typeof params.success =='function'){
                    if(params.dataType == 'json'){
                        var data = xhr.responseText;
                        params.success(data);
                    }else if(params.dataType == 'xml'){
                        var data = xhr.responseXML;
                        params.success(data);
                    }
                }
            }else{
                if(typeof params.failure == 'function'){
                    if(params.dataType == 'xml'){
                        var data = xhr.responseXML;
                        params.failure(data);
                    }
                }
            }
        }
    }
}