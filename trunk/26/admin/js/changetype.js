// JavaScript Document
function modifytype(key){
	var nm = 'moditype'+key;
	var names = document.getElementById(nm).value;
	if(names == ""){
		alert('����д�������');
		document.getElementById(nm).focus();
		return false;
	}
	var url = "changetype.php?action=m&names="+names+"&key="+key;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = check;
	xmlhttp.send(null);
}
function delbigtype(key){
	if(confirm("��Ҫɾ������һ���࣬ȷ��Ҫɾ����")){
		var url = "changetype.php?action=bd&key="+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = check;
		xmlhttp.send(null);
	}else{
		return false;
	}
}
function delsmalltype(key){
	if(confirm("ȷ��Ҫɾ��ѡ�е���Ŀ��һ��ɾ�������ָܻ���")){
		var url = "changetype.php?action=sd&key="+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = check;
		xmlhttp.send(null);
	}else{
		return false;
	}
}
function check(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('�����ظ�');
			}else if(msg == "2"){
				alert('����ʧ��!');
			}else if(msg == '3'){
				alert('�����ɹ�');
				location='showtype.php';
			}else if(msg == '4'){
				alert('�ô��������࣬����ɾ��');
			}else if(msg == '0'){
				alert('δ֪����!'+'\n�������:'+msg);
			}
		}
	}
}