// JavaScript Document
/*	�޸Ĳ���	*/
function showdiv(key,name){
	if(document.getElementById('moddiv').style.display == 'none'){
		document.getElementById('showname').innerHTML = '�޸Ĺ���Ա'+name+'������';
		document.getElementById('modid').value= key;
		document.getElementById('moddiv').style.display = '';
		if(document.getElementById('adddiv').style.display == ''){
			document.getElementById('adddiv').style.display = 'none';
		}
		   
	}else{
		document.getElementById('showname').innerHTML = '�޸Ĺ���Ա'+name+'������';
		document.getElementById('modid').value= key;
	}
}
function modiadmin(){
	var key = document.getElementById('modid').value;
	var old = document.getElementById('old').value;
	var new1 = document.getElementById('new1').value;
	var new2 = document.getElementById('new2').value;
	if(old== '' || new1=='' || new2==''){
		alert('���벻����Ϊ��');
		old.focus();
		return false;
	}
	if(new1 != new2){
		alert('�������벻���');
		new1.focus();
		return false;
	}
	
	var url = "modiadmin.php?id="+key+"&old="+old+"&new="+new1;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('�����޸ĳɹ�');
				location = 'admin.php';
			}else{
				alert('�����޸�ʧ��');
				return false;
			}
		}
	}
	xmlhttp.send(null);
}
/*		ɾ������	*/
function deladmin(key){
	if(!confirm("ȷ��Ҫɾ������Ա��")){
		return false;
	}else{
		var url = 'deladmin.php?id='+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == "1"){
					alert('ɾ���ɹ�');
					location='admin.php';
				}else if(msg == '2'){
					alert('Ŀǰֻ��1�������ʺţ�������ɾ��');
					return false;
				}else{
					alert('ɾ��ʧ��');
					return false;
				}
			}
		}
		xmlhttp.send(null);
	}
}
/*	��Ӳ���	*/
function showadd(){
	if(document.getElementById('adddiv').style.display == 'none'){
		document.getElementById('showname').innerHTML = '';
		document.getElementById('moddiv').style.display = 'none';
		document.getElementById('adddiv').style.display = '';
	}else{
		document.getElementById('adddiv').style.display = 'none';
	}
}
function addadmin(form){
	var names = form.names.value;
	var pwd1 = form.pwd1.value;
	var pwd2 = form.pwd2.value;
	if(names == ''){
		alert('�˺Ų�����Ϊ��!');
		form.names.focus();
		return false;
	}
	if(pwd1 == ''){
		alert('���벻����Ϊ��!');
		form.pwd1.focus();
		return false;
	}
	
	if(pwd1 != pwd2){
		alert('�������벻���');
		form.pwd1.focus();
		return false;
	}
	var url = "addadmin.php?name="+names+"&pwd="+pwd1;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == "1"){
				alert('����Ա��ӳɹ�');
				location='admin.php';
			}else{
				alert(msg);
				return false;
			}
		}
	}
	xmlhttp.send(null);
}