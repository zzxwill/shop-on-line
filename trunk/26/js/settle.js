// JavaScript Document
function chkform(form){
	if(form.taker.value == ''){
		alert('�ջ�������Ϊ��');
		form.taker.focus();
		return false;
	}
	if(form.code.value == ''){
		alert('�ʱ�Ϊ��');
		form.code.focus();
		return false;
	}
	if(form.code.value.length < 6 || isNaN(form.code.value)){
		alert('�ʱ���д����');
		form.code.select();
		return false;
	}
	if(form.tel.value == ''){
		alert('�ջ��˵绰Ϊ��');
		form.tel.focus();
		return false;
	}
	if(form.address.value == ''){
		alert('�ջ��˵�ַΪ��');
		form.address.focus();
		return false;
	}
}