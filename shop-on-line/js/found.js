// JavaScript Document
function chkname(form){
	var user = form.user.value;
	if(user == ''){
		alert('�������û���');
		form.user.focus();
		return false;
	}else{
		var url = "foundpwd.php?user="+user;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '0'){
					alert('û�и��û��������²���!');
					form.user.select();
					return false;
				}else{
					document.getElementById('first').style.display = 'none';
					document.getElementById('second').style.display = '';
					document.getElementById('question').innerHTML = msg;
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkanswer(form) {
	var user = document.getElementById('user').value;
	var answer = form.answer.value;
	if(answer == ''){
		alert('��������ʾ����');
		form.answer.focus();
		return false;
	}else{
		var url = "foundpwd.php?user="+user+"&answer="+answer;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '0'){
					alert('����ش����');
					form.answer.select();
					return false;
				}else{
					document.getElementById('second').style.display = 'none';
					document.getElementById('third').style.display = '';
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkpwd(form){
	var user = document.getElementById('user').value;
	var pwd1 = form.pwd1.value;
	var pwd2 = form.pwd2.value;
	if(pwd1 == ''){
		alert('����������');
		form.pwd1.focus();
		return false;
	}
	if(pwd1.length < 6){
		alert('�����������');
		form.pwd1.focus();
		return false;
	}
	if(pwd1 != pwd2){
		alert('�������벻���');
		form.pwd2.select();
		return false;
	}
	var url = "foundpwd.php?user="+user+"&password="+pwd1;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('�����޸ĳɹ��������µ�¼');
				window.close();
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}