// JavaScript Document
/*  ɾ����¼  */
function deletemem(form){
	if(!window.confirm('�Ƿ�Ҫɾ������??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('��ѡȡҪɾ������!');
			}else{
				rd = form.chk.value;
				var url = 'delmem.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delnow;
				xmlhttp.send(null);
			}
		}else{ 
			var rd=new Array();
			var j = 0;
			for( var i = 0; i < leng; i++)
			{
				if(form.chk[i].checked){
					rd[j++] = form.chk[i].value;
				}
			}
			if(rd == ''){
				alert('��ѡȡҪɾ������!');
			}else{
				var url = "delmem.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delnow;
				xmlhttp.send(null);
			}
		}
	}
	return false;
}
function delnow(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "0"){
				alert('ɾ��ʧ��');
			}else{
				alert('ɾ���ɹ�');
				location=('member.php');
			}
		}
	}
}
//ȫ��ѡ��/ȡ��
function alldel(form){
	var leng = form.chk.length;
	if(leng==undefined){
	   if(!form.chk.checked)
	   		form.chk.checked=true;
	 }else{  
       for( var i = 0; i < leng; i++)
	    {
			if(!form.chk[i].checked)
	      		form.chk[i].checked = true;
	    }
	 } 
	return false;
}
// ��ѡ
function overdel(form){
	 var leng = form.chk.length;
	 if(leng==undefined){
	   if(!form.chk.checked)
	   		form.chk.checked=true;
		else
			form.chk.checked=false;
	 }else{  
       for( var i = 0; i < leng; i++)
	    {
			if(!form.chk[i].checked)
	      		form.chk[i].checked = true;
			else
				form.chk[i].checked = false;
	    }
	 } 
	return false;
}
//�޸�
function showme(key){
	window.open('showmem.php?key='+key,'_blank','',false);
}
function changestate(key,state){
	if(state == 0){
		state = 1;
	}else{
		state = 0; 
	}
	var url = 'freezechk.php?key='+key+'&state='+state;
	xmlhttp.open("GET",url,false);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				location.reload();
			}else{
				alert(msg);
				return false;
			}
		}
	}
	xmlhttp.send(null);
}