// JavaScript Document
function lg(form){
	if(form.name.value==""){
		alert('�������û���');
		form.name.focus();
		return false;
	}
	if(form.password.value == "" || form.password.value.length < 6){
		alert('��������ȷ����');
		form.password.focus();
		return false;
	}
	if(form.check.value == ""){
		alert('��������֤��');
		form.check.focus();
		return false;
	}
	if(form.check.value != form.check2.value){
		form.check.select();
		code(form);
		return false;
	}
	var user = form.name.value;
	var password = form.password.value;
	var url = "chkname.php?user="+user+"&password="+password;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('�û������������!!');
				form.password.select();
				form.check.value = '';
				code(form);
				return false;
			}if(msg == "3"){
				alert("���û������ᣬ����ϵ����Ա");
				return false;
			}else{
				alert('��ӭ����');
				location.reload();
			}
		}
	}
	xmlhttp.send(null);
	return false;
}
//��ʾ��֤��
function yzm(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.write("<img name=codeimg width=50 heigh=20 src='yzm.php?num="+num+"'>");
	form.check2.value=num;
}
//ˢ����֤��
function code(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.check2.value=num;
}
//ע��
function reg(){
window.open("register.php", "_blank", "width=500,height=450",false);	
}
//�һ�����
function found() {
window.open("found.php","_blank","width=220 height=130",false);	
}