// JavaScript Document
timer = window.setInterval("showDate()",500);
function showDate(){
	var obj,date;
	obj = new Date();
	/*年*/
	date = obj.getYear() + "-";
	/*月：返回值是 0（一月） 到 11（十二月） 之间的一个整数*/
	date += (obj.getMonth()+1) + "-";
	/*日*/
	date += obj.getDate() + " ";
	date += obj.getHours() + ":";
	date += obj.getMinutes() + ":";
	date += obj.getSeconds();
	
	document.getElementById("tm").innerHTML = date;
}
function openwin(){
	open('h_search.php','_blank','width=660',false);
}
function showhsearch(){
	var name= document.getElementById("name").value;
	var model= document.getElementById("model").value;
	var stype= document.getElementById("stype").value;
	if(name == '' && model == '' && stype == ''){
		alert("至少填写一项查询信息");
		return false;
	}
	url = 'searchrst.php?act=high&name='+name+"&model="+model+"&stype="+stype;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				showme.innerHTML = msg;
			}
	}
	xmlhttp.send(null);
}