// JavaScript Document
/* public.php  */
function chkaddpub(form){
	var title = form.title.value;
	var content = form.content.value;
	if(title == ''){
		alert('����Ϊ��');
		form.title.focus();
		return false;
	}
	if(content == ''){
		alert('����Ϊ��');
		form.content.focus();
		return false;
	}
	var url = 'addpub.php?title='+title+'&content='+content;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == '1'){
				alert('��ӳɹ�');
				location='showpub.php';
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}
/* showpub.php 
 * ɾ��ȷ��
 */
function delepub(form){
	if(!window.confirm('�Ƿ�Ҫɾ������??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('��ѡȡҪɾ������!');
			}else{
				rd = form.chk.value;
				var url = 'delpub.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delpub;
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
				var url = "delpub.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delpub;
				xmlhttp.send(null);
			}
		}
	}
	return false;
}
function delpub(){
	if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "0"){
				alert('ɾ��ʧ��');
			}else{
				alert('ɾ���ɹ�');
				location=('showpub.php');
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
function modi(key){
	//window.open('modifycommo.php?key='+key,'_blank','width=750,heigh=500',false);
}

