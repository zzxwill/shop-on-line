// JavaScript Document
function queryrst(form) {
	var name = form.name.value;
	var formid = form.formid.value;
	if(name == '' && formid == ''){
		alert('�û��򶩵���������һ������Ϊ��');
		form.name.focus();
		return false;
	}
	var url = "query.php?vendee="+name+"&formid="+formid;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = showfm;
	xmlhttp.send(null);
}
function showfm(){
	if(xmlhttp.readyState == 4){
		var msg = xmlhttp.responseText;
		if(msg == '0'){
				exam.innerHTML = '';
				alert('û�в�ѯ���');
		}else{
				exam.innerHTML =  msg;
		}
	}
}