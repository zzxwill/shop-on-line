// JavaScript Document
function mem(form){
	if(form.realname.value==""){
		alert('����д��ʵ����');
		form.realname.focus();
		return false;
	}
	if(form.card.value==""){
		alert('����д���֤��');
		form.card.focus();
		return false;
	}
	if(form.card.value.length != 15 && form.card.value.length !=18){
		alert('����д��ȷ�����֤��');
		form.card.focus();
		return false;
	}
	if(form.tel.value==""){
		alert('����д�ƶ��绰');
		form.tel.focus();
		return false;
	}
	if(isNaN(form.tel.value)){
		alert('������ȷ�ĵ绰����');
		form.tel.focus();
		return false;
	}
	if(form.phone.value==""){
		alert('����д�̶��绰');
		form.phone.focus();
		return false;
	}
	if(isNaN(form.qq.value)){
		alert("QQ����ֻ����������ɣ�");
		form.qq.focus();
		return false;
	}
	var i=form.email.value.indexOf("@");
	var j=form.email.value.indexOf(".");
	if((form.email.value != "") && ((i<0)||(i-j>0)||(j<0))){
		alert('����ȷ��дEmail');
		form.email.focus();
		return false;
	}
	if(isNaN(form.code.value)){
		alert('����д��ȷ���ʱ�');
		form.code.focus();
		return false;
	}
	if(form.code.value.legnth < 6){
		alert('����д��ȷ���ʱ�');
		form.code.focus();
		return false;
	}
	if(form.address.value==""){
		alert('����д��ַ');
		form.address.focus();
		return false;
	}
}
function pwd(form){
	if(form.old.value == ""){
		alert('����д������');
		form.old.focus();
		return false;
	}
	if(form.old.value.length < 6){
		alert('����д��ȷ�ľ�����');
		form.old.focus();
		return false;
	}
	if(form.new1.value == ""){
		alert('����д������');
		form.new1.focus();
		return false;
	}
	if(form.new1.value.length < 6){
		alert('���볤�Ȳ���С��6λ');
		form.new1.focus();
		return false;
	}
	if(form.new1.value != form.new2.value){
		alert('�������벻���');
		form.new2.focus();
		return false;
	}
}