// JavaScript Document
function changestate(key,state){
	if(state == 0){
		state = 1;
	}else{
		state = 0;	
	}
	var url = 'freezechk.php?key='+key+'&state='+state;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			var msg = xmlhttp.responseText;
			if(msg == 0 || msg == 1){
				top.opener.location.reload();
				alert('���ĳɹ�');
				window.close();
			}else{
				alert(msg);
			}
		}
	}
	xmlhttp.send(null);
}
function dele(key){
	if(!window.confirm('�Ƿ�Ҫɾ������??')){
	}else{
		var url = 'delmem.php?rd='+key;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == "0"){
					alert('ɾ��ʧ��');
				}else{
					alert('ɾ���ɹ�');
					location=('member.php');
				}
			}
		}
		xmlhttp.send(null);
	}
}
