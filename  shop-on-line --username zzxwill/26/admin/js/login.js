// JavaScript Document
function check_login(form){
	var user = form.user.value;
	var pwd = form.pwd.value;
	if(user == ""){
		alert('�û���������Ϊ��');
		form.user.focus();
		return false;
	}
	if(pwd == ''){
		alert('���벻����Ϊ��');
		form.pwd.focus();
		return false;
	}
	var url = "check_login.php?user="+user+"&pwd="+pwd;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = checklogin;
	xmlhttp.send(null);
}
function checklogin(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('��¼�ɹ�');
				location=('main.php');
			}else{
				alert('�û������������!');
				alert(msg);
			}
		}
	}
}