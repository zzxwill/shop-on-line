// JavaScript Document
function addlinks(form){
	var name = form.names.value;
	var url = form.url.value;
	if(name == ''){
		alert('�������վ����');
		form.names.focus();
		return false;
	}
	if(url == ''){
		alert('�������վ��URL');
		form.url.focus();
		return false;
	}
}
/*	ɾ��	*/
function dellinks(form){
	if(!window.confirm('�Ƿ�Ҫɾ������??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('��ѡȡҪɾ������!');
					return false;
			}else{
				var url = 'dellinks.php?rd='+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = delcomm;
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
				return false;
			}else{
				var url = "dellinks.php?rd="+rd;
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange = dellink;
				xmlhttp.send(null);
			}
		}
	}
}
function dellink(){
	if(xmlhttp.readyState == 4){
		if(xmlhttp.status == 200){
			var msg = xmlhttp.responseText;
			if(msg == "0"){
				alert('ɾ��ʧ��');
			}else{
				alert('ɾ���ɹ�');
				location=('showlinks.php');
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
function modlink(key){
	var nm = 'wnames'+key;
	var ur = 'wurl'+key;
	var names = document.getElementById(nm).value;
	var wurl = document.getElementById(ur).value;
	if(names == ""){
		alert('����д��վ����');
		document.getElementById(nm).focus();
		return false;
	}
	if(wurl == ""){
		alert('����дURL');
		document.getElementById(ur).focus();
		return false;
	}
	
	var url = "modlinks.php?id="+key+"&names="+names+"&wurl="+wurl;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg=="1"){
				alert('�޸ĳɹ�');
				location='showlinks.php';
			}else{
				alert(msg);
				return false;
			}
		}
	}
	xmlhttp.send(null);
}

