// JavaScript Document
function abc(){
	var pass=document.getElementById("register_mobile").value;
	if(pass.length<11){
					document.getElementById("dh").innerHTML="<font color='#8ec657'>����Ϊ11</font>";
					}

	else{	document.getElementById("dh").innerHTML="<img src='images/right1.gif'></img>";}
	}
	function def(){
	var apass=document.getElementById("registercompany").value;
	if(apass==""){
					document.getElementById("dz").innerHTML="<font color='#8ec657'>����ȷ</font>";
					}

	else{	document.getElementById("dz").innerHTML="<img src='images/right1.gif'></img>";}

		

	}

function checknames(){
	var pass=document.getElementById("passport");
	document.getElementById("passname").innerHTML="����ĸ��ͷ��4-20λ��ĸ������";
}
function checkname(){
	var pass=document.getElementById("passport");
	if(pass.value==''||pass.value==null){
		document.getElementById("passname").innerHTML="<font color='red'>����Ϊ������</font>";
	}else if(pass.value.length<4){
		document.getElementById("passname").innerHTML="<font color='red'>��¼��̫���ˣ�����4λ</font>";
	}else if(pass.value.length>=4){ document.getElementById("passname").innerHTML="<img src='images/right1.gif'></img>";
		var patrn=/^[a-zA-Z][a-zA-Z0-9]*$/;
		if(!patrn.exec(pass.value)){
			document.getElementById("passname").innerHTML="<font color='red'>��½����������ĸ��ͷ��4-20λ��ĸ������</font>"; 
		}else{
			$.ajax({
				url:'/ajax/checkname?passportid='+pass.value,
				dataType:'text',
				success:function(data){
					var user =eval('('+data+')');
					document.getElementById("passname").innerHTML=user.msg;
				}
			});
		}
	}
}

function checkmails(){
	document.getElementById("mailname").innerHTML="�����볣�õ����䣬�Ա��պ��һ�����";
}

function checkmail(){
	var mail=document.getElementById("mail");
	if(mail.value==''||mail.value==null){
		document.getElementById("mailname").innerHTML="<font color='red'>����Ϊ������</font>";
	}else{
		var m=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
		if(!m.exec(mail.value)){
			document.getElementById("mailname").innerHTML="<font color='red'>��������ȷ�������ַ</font>";
		}else{
			document.getElementById("mailname").innerHTML="<img src='images/right1.gif'></img>";
		}
	}
}

function checkpasswords(){
	document.getElementById("passwname").innerHTML="������6-20λӢ����ĸ�����ֻ���ţ����ִ�Сд";
}

function checkpasswordss(pwd){
	if(pwd==null||pwd==''){
		document.getElementById("passwname").innerHTML="������6-20λӢ����ĸ�����ֻ���ţ����ִ�Сд";
	}else if(pwd.length<6){
		document.getElementById("passwname").innerHTML="����������6λ����ĸ��ͷ�����ֻ����";
	}else{
		document.getElementById("passwname").innerHTML="<img src='images/right1.gif'></img>";
	}
}

function checkpasswords2(){
	document.getElementById("passname2").innerHTML="���ٴ���������";
}

function checkpassword2(pwd2){
	if(pwd2==null||pwd2==''){
		document.getElementById("passname2").innerHTML="���ٴ���������";
	}else if(pwd2.length<6){
		document.getElementById("passname2").innerHTML="<font color='red'>�������벻һ�£�����������</font>";
	}else{
		var pwd=document.getElementById("pwd").value;
		
		if(pwd!=pwd2){
			document.getElementById("passname2").innerHTML="<font color='red'>�������벻һ�£�����������</font>";
		}else{
			document.getElementById("passname2").innerHTML="<img src='images/right1.gif'></img>";
		}
	}
}

function checkuname(){
	document.getElementById("unames").innerHTML="���������Ļ�Ӣ��";
}

function checkuser(user){
	if(user==''){
		document.getElementById("unames").innerHTML="<font color='red'>����Ϊ������</font>";
	}else{
		var yd=/^[A-Za-z\u4E00-\u9fa5]*$/;

		if(!yd.exec(user)){
			document.getElementById("unames").innerHTML="���������Ļ�Ӣ��";
		}else{
			document.getElementById("unames").innerHTML="<img src='images/right1.gif'></img>";
		}
	}
}

function chkpwd(obj){

	var t=obj.value;
	var id=getResult(t);
	
	//�����Ӧ����Ϣ��ʾ
	var msg=new Array(4);;
	msg[0]="������̡�";
	msg[1]="����ǿ�Ȳ";
	msg[2]="����ǿ�����á�";
	msg[3]="����ǿ�ȸߡ�";

	var sty=new Array(4);
	sty[0]=-45;
	sty[1]=-30;;
	sty[2]=-15;
	sty[3]=0;

	var col = new Array(4);
	col[0] = "gray";
	col[1] = "#50AEDD";
	col[2] = "#FF8213";
	col[3] = "green";

	//������ʾЧ��
	var sWidth=300;
	var sHeight=15;
	var Bobj=document.getElementById("chkResult");
	Bobj.style.fontSize="12px";
	Bobj.style.color=col[id];
	Bobj.style.width=sWidth + "px";;
	Bobj.style.height=sHeight + "px";
	Bobj.style.lineHeight=sHeight + "px";
/*	Bobj.style.background="url no-repeat left " + sty[id] + "px";*/
	Bobj.innerHTML="�����ʾ��" + msg[id];
}

//�����⺯��,����0/1/2/3�ֱ������Ч/��/һ��/ǿ
function getResult(s){
	if(s.length < 4){
		return 0;
	}
	var ls = 0;
	if (s.match(/[a-z]/ig)){
		ls++;
	}
	if(s.match(/[0-9]/ig)){
		ls++;
	}
	if(s.match(/(.[^a-z0-9])/ig)){
		ls++;
	}
	if(s.length < 6 && ls > 0){
		ls--;
	}
	return ls;
}

function check(){

	var name=document.getElementById("passport").value;
	var mail=document.getElementById("mail").value;
	var pwd=document.getElementById("pwd").value;
	var pwd2=document.getElementById("pwd2").value;
	var captcha=document.getElementById("captcha").value;
	var username=document.getElementById("username").value;
	var m=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
	var patrn=/^[a-zA-Z][a-zA-Z0-9]*$/;
	var user=/^[A-Za-z\u4E00-\u9fa5]*$/;
	
	if(name==''){
		document.getElementById("passname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>����Ϊ������</font>";
		return false;
	}else if(name.length<4){
		document.getElementById("passname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>��¼��̫���ˣ�����4λ</font>";
		return false;
	}else if(!patrn.exec(name)){
		document.getElementById("passname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>����ĸ��ͷ��4-20λ��ĸ������</font>";
		return false;
	}else if(mail==''){
		document.getElementById("mailname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>����Ϊ������</font>";
		return false;
	}else if(!m.exec(mail)){
		document.getElementById("mailname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>��������ȷ�������ַ</font>";
		return false;
	}else if(pwd==''){
		document.getElementById("passwname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>����Ϊ������</font>";
		return false;
	}else if(pwd.length<6){
		document.getElementById("passwname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>������6-20λӢ����ĸ�����ֻ���ţ����ִ�Сд</font>";
		return false;
	}else if(pwd2==''){
		document.getElementById("passname2").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>����Ϊ������</font>";
		return false;
	}else if(pwd2.length<6){
		document.getElementById("passname2").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>�������벻һ�£�����������</font>";
		return false;
	}else if(pwd!=pwd2){
		document.getElementById("passname2").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>�������벻һ�£�����������</font>";
		return false;
	}else if(username==''){
		document.getElementById("unames").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>����Ϊ������</font>";
		return false;
	}else if(!user.exec(username)){
		document.getElementById("unames").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>���������Ļ�Ӣ��</font>";
		return false;
	}else if(captcha==''){
		document.getElementById("resets").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>��������֤��</font>";
		return false;
	}else{
		return true;
	}
	
}
