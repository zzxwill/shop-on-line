// JavaScript Document
// JavaScript Document
function chkcommo(form){
	  if(form.name.value==""){
	     alert("��������Ʒ����!");
		 form.name.focus();
		 return false;
	   }
	  if(form.area.value==""){
	     alert("��������Ʒ����!");
		 form.area.focus();
		 return false;
	   }
	  if(form.model.value==""){
	     alert("��������Ʒ�ͺ�!");
		 form.model.focus();
		 return false;
	   }
	  if(form.stocks.value=="")
	   {
	     alert("��������Ʒ����!");
		 form.stocks.focus();
		 return false;
	   }
	   if(form.m_price.value=="")
	   {
	     alert("��������Ʒ�г��۸�!");
		 form.m_price.focus();
		 return false;
	   }
	   if(form.info.value=="")
	   {
	     alert("��������Ʒ���!");
		 form.info.focus();
		 return false;
	   }
	}
function cvp(form){
	var price = form.m_price.value;
	var fd = form.fold.value;
	var total = price * fd / 10;
	v_price.innerHTML = total+' Ԫ';
}