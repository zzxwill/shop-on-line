// JavaScript Document
function openshowcommo(key){
	open('showcommo.php?id='+key,'_blank','width=560 height=300',false);
}
function buycommo(key){
	var url = "chklogin.php?key="+key;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '2'){
					alert('�����ȵ�¼');
					return false;
				}else if(msg == '3'){
					alert('����Ʒ�����');
					return false;
				}else{
					location='index.php?page=shopcar';
					return false;
				}
			}
	}
	xmlhttp.send(null);
}

function subbuycommo(key){
	var url = "chklogin.php?key="+key;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '2'){
					alert('�����ȵ�¼');
					return false;
				}else if(msg == '3'){
					alert('����Ʒ�����');
					window.close();
					return false;
				}else{
					top.opener.location='index.php?page=shopcar';
					window.close();
				}
			}
	}
	xmlhttp.send(null);
}