// JavaScript Document
function chkname(form){
	if(form.name.value==""){
		name1.innerHTML="<font color=#FF0000>�������û�����</font>";
	}else{
		var user = form.name.value;
		var url = "chkname.php?user="+user;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '2'){
					name1.innerHTML="<font color=#FF0000>�û�����ռ�ã�</font>";
					return false;
				}else if(msg == '1'){
					name1.innerHTML="<font color=green>��ϲ��������ע��!</font>";
					form.c_name.value = "yes";
					
				}else{
					name1.innerHTML="<font color=green>"+msg+"</font>";
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkinput(form){
	if(form.name.value==""){
		form.name.focus();
		return false;
	}
	if(form.c_name.value == "not"){
		form.name.select();
		return false;
	}
	
	if(form.pwd1.value==""){
		form.pwd1.focus();
		return false;
	}
	if(form.pwd2.value==""){
		form.pwd2.focus();
		return false;
	}
	if(form.pwd2.value!=form.pwd1.value){
		form.pwd1.select();
		return false;
	}
	if(form.pwd1.value.length<6){
		form.pwd1.select();
		return false;
	}
	if(form.question.value == ""){
		form.question.focus();
		return false;
	}
	if(form.answer.value == ""){
		form.answer.focus();
		return false;
	}
	if(form.realname.value==""){
		form.realname.focus();
		return false;
	}
	if(form.card.value==""){
		form.card.focus();
		return false;
	}
	if(form.card.value.length != 15 && form.card.value.length !=18){
		form.card.select();
		return false;
	}
	if(form.tel.value==""){
		form.tel.focus();
		return false;
	}
	if(isNaN(form.tel.value)){
		form.tel.select();
		return false;
	}
	if(form.phone.value==""){
		form.phone.focus();
		return false;
	}
	if(isNaN(form.qq.value)){
		alert("QQ����ֻ����������ɣ�");
		form.qq.select();
		return false;
	}
		var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((form.email.value != "") && ((i<0)||(i-j>0)||(j<0))){
		form.email.select();
		return false;
	}
	if(isNaN(form.code.value)){
		form.code.focus();
		return false;
	}
	if(form.code.value.legnth < 6){
		form.code.select();
		return false;
	}
	if(form.address.value==""){
		alert('1');
		form.address.focus();
		return false;
	}
	if(form.yzm.value==""){
		form.yzm.focus();
		return false;
	}
	if(form.yzm.value!=form.yzm2.value){
		alert("Ч�����������");
		form.yzm.focus();
		return false;
	}
}



function chkpwd1(form){
	if(form.pwd1.value==""){
		pwd11.innerHTML="<font color=#FF0000>�����ʽ����</font>";  
	}else if(form.pwd1.value.length<6){
		pwd11.innerHTML="<font color=#FF0000>ע�����볤��Ӧ����6λ��</font>";  
	}else{
		pwd11.innerHTML="<font color=green>������ȷ</font>";  
	}
}
function chkpwd2(form){
	if(form.pwd2.value==""){
		pwd21.innerHTML="<font color=#FF0000>������ȷ�����룡</font>";  
	}else if(form.pwd2.value.length<6){
		pwd21.innerHTML="<font color=#FF0000>ȷ�����볤��Ӧ����6λ��</font>";  
	}else if(form.pwd1.value!=form.pwd2.value){
		pwd21.innerHTML="<font color=#FF0000>ע��������ȷ�����벻ͬ��</font>"; 
	}else{
		pwd21.innerHTML="<font color=green>������ȷ</font>";  
	}
}
function chkquestion(form){
	if(form.question.value==""){
		question1.innerHTML="<font color=#FF0000>����д�ܱ����⣡</font>";    
	}else{
		question1.innerHTML="<font color=green>������ȷ</font>";  
	}
}
function chkanswer(form){
	if(form.answer.value==""){
		answer1.innerHTML="<font color=#FF0000>����д�ܱ��𰸣�</font>";   
	}else{
		answer1.innerHTML="<font color=green>������ȷ</font>";  
	}
}
function chkrealname(form){
	if(form.realname.value==""){
		realname1.innerHTML="<font color=#FF0000>��������ʵ������</font>"; 
	}else{
		realname1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkcard(form){
	if(form.card.value==""){
		card1.innerHTML="<font color=#FF0000>��ѡ���������֤�ţ�</font>"; 
	}else if(form.card.value.length != 15 && form.card.value.length != 18){
		card1.innerHTML="<font color=#FF000000>��������ȷ�����֤��</font>";	
	}
	else{
		card1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chktel(form){
	if(form.tel.value==""){
		tel1.innerHTML="<font color=#FF0000>��������ϵ�绰��</font>"; 
	}else if(isNaN(form.tel.value)){
		tel1.innerHTML="<font color=#FF0000>��ϵ�绰ֻ����������ɣ�</font>"; 
	}else if(form.tel.value.length<8 || form.tel.value.length>11){
		tel1.innerHTML="<font color=#FF0000>��ϵ�绰λ������ȷ��</font>";
	}else{
		tel1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkphone(form){
	if(form.phone.value==""){
		phone1.innerHTML="<font color=#FF0000>������̶��绰��</font>"; 
	}else{
		phone1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkqq(form){
	if(form.qq.value != "" && isNaN(form.qq.value)){
		qq1.innerHTML="<font color=#FF0000>��ϵQQֻ����������ɣ�</font>"; 
	}else{
		qq1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkemail(form){
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((form.email.value != "") && ((i<0)||(i-j>0)||(j<0))){
		email1.innerHTML="<font color=#FF0000>��������ȷ��E-mail��ַ��</font>"; 
	}else{
		email1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkcode(form){
	if(isNaN(form.code.value)){
		code1.innerHTML="<font color=#FF0000>�ʱ�ֻ����������ɣ�</font>"; 
	}else if(form.code.value.length!=6){
		code1.innerHTML="<font color=#FF0000>�ʱ೤��Ϊ6λ��</font>";  
	}else{
		code1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkaddress(form){
	if(form.address.value==""){
		address1.innerHTML="<font color=#FF0000>��������ϵ��ַ��</font>"; 
	}else{
		address1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function chkyzm(form){
	if(form.yzm.value==""){
		yzm1.innerHTML="<font color=#FF0000>������Ч���룡</font>"; 
	}else if(form.yzm.value!=form.yzm2.value){
		yzm1.innerHTML="<font color=#FF0000>Ч�����������!</font>";
	}else{
		yzm1.innerHTML="<font color=green>������ȷ</font>";
	}
}
function yzm(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.write("<img name=codeimg src='yzm.php?num="+num+"'>");
	form.yzm2.value=num;
}
function code(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.yzm2.value=num;
}