// JavaScript Document
function changetype(form){
		if(form.grade.value=="2"){
			form.supid.disabled=false;
		}else{
			form.supid.disabled=true;
		}
}
function chktype(form){
	var name = form.names.value;
	var supid = form.supid.value;
	if(form.names.value == ""){
		alert('����д�������');
		form.names.focus();
		return false;
	}
	if(form.grade.value == "1"){
		var url = "chktype.php?name="+name;
	}else{
		var url = "chktype.php?name="+name+"&supid="+supid;
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = check;
	xmlhttp.send(null);
}
function check(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('�����ظ�');
			}else if(msg == "2"){
				alert('���ʧ��!');
			}else{
				alert('��ӳɹ�');
				location='showtype.php';
			}
		}
	}
}