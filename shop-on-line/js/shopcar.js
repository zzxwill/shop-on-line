// JavaScript Document
/*  ɾ����¼  */
function del(form){
	if(!window.confirm('�Ƿ�Ҫɾ������??')){
		
	}else{
		var leng = form.chk.length;
		if(leng==undefined){
			if(!form.chk.checked){
					alert('��ѡȡҪɾ������!');
			}else{
				rd = form.chk.value;
				var url = 'delshop.php?rd='+rd;
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
				var url = "delshop.php?rd="+rd;
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
			if(msg != '1'){
				alert('ɾ��ʧ��'+msg);
			}else{
				alert('ɾ���ɹ�');
				location=('?page=shopcar');
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
//�Զ�ˢ���ܽ��
function cvp(key,vpr,shoparr){	
	var n_pre = 'total';
	var num = 'cnum'+key.toString();
	var total = n_pre+key.toString();
	var t_number = document.getElementById(num).value;
	var ttl = t_number * vpr;
	document.getElementById(total).innerHTML = ttl;
	var sm = 0;
	
	for(var i = 0; i < shoparr; i++){
		
		var aaa = document.getElementById(n_pre+i.toString()).innerText;
		sm += parseInt(aaa);
	}
	document.getElementById('sum').innerHTML = '���ƣ�'+sm+' Ԫ';
		
}
//������Ʒ����
function conshop(form){
	var n_pre = 'cnum';
	var lang = form.chk.length;
	if(lang == undefined){
		var fst = form.chk.value;
		var snd = form.cnum0.value;
	}else{
		var fst= new Array();
		var snd = new Array();

		for(var i = 0; i < lang; i++){
			var nm = n_pre+i.toString();
			var stmp = document.getElementById(nm).value; 
			if(stmp  == '' || isNaN(stmp)){
				alert('������Ϊ�ա�����Ϊ����');
				document.getElementById(nm).select();
				return false;
			}
			snd[i] = stmp;
			var ftmp = form.chk[i].value;
			fst[i] = ftmp;
		}
	}
	var url = 'changecar.php?fst='+fst+'&snd='+snd;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = updatecar;
	xmlhttp.send(null);
}
function updatecar(){
	if(xmlhttp.readyState == 4){
		var msg = xmlhttp.responseText;
			if(msg == '1'){
				location='index.php';
			}else{
				alert('����ʧ��'+msg);
			}
	}
}
function formset(form){
var uid = form.uid.value;
var n_pre = 'cnum';									//����
	var lang = form.chk.length;
	if(lang == undefined){
		var fst = form.chk.value;					//��Ʒid
		var snd = form.cnum0.value;					//��������
	}else{
		var fst= new Array();
		var snd = new Array();

		for(var i = 0; i < lang; i++){
			var nm = n_pre+i.toString();
			var stmp = document.getElementById(nm).value; 
			if(stmp  == '' || isNaN(stmp)){
				alert('������Ϊ�ա�����Ϊ����');
				document.getElementById(nm).select();
				return false;
			}
			snd[i] = stmp;
			var ftmp = form.chk[i].value;
			fst[i] = ftmp;
		}
	}
	open('settle.php?uid='+uid+'&fst='+fst+'&snd='+snd,'_blank','width=420 height=220',false);
}