var btn = document.getElementById("btn");
var box = document.getElementById("box");
var txt1 = document.getElementById("txt1");
var txt2 = document.getElementById("txt2");
			
btn.onclick = function () {  
var divItem = document.createElement("div");
divItem.className = "item comment-list";
//box.appendChild(divItem);//追加節點
box.insertBefore(divItem, box.firstChild);//插入節點
var div1 = document.createElement("div");
div1.className = "c1 reply-btn";
var div2 = document.createElement("div");
divItem.appendChild(div1);
divItem.appendChild(div2);
//設置第一個div的內容
var span1 = document.createElement("span");
div1.appendChild(span1);
span1.innerHTML = txt1.value + " : ";
var span2 = document.createElement("span");
div1.appendChild(span2);
span2.innerHTML = txt2.value;

var a = document.createElement("a");
a.className="btn-reply text-uppercase";
a.innerHTML = "刪除";
div1.appendChild(a);
//a的刪除事件
a.onclick = function () {
    this.parentNode.parentNode.remove();
}
			
var date = new Date();
//var str = date.toLocaleString();
var m = date.getMonth() + 1;
var d = date.getDate();
var h = date.getHours();
var m2 = date.getMinutes();
m = fun1(m);
d = fun1(d);
h = fun1(h);
m2 = fun1(m2);
var str = m + "月" + d + "日  " + h + ":" + m2;
div2.innerHTML = str;
}
//封装一个日期格式化的函数
function fun1(x) 
{
    if (x < 10) 
    {
        return "0" + x;
	}
	return x;
}			
var span2 = document.getElementById("span2");
txt2.onkeyup = function () {
    var str = this.value;
	console.log(str.length);
    span2.innerHTML = 10 - str.length;
}