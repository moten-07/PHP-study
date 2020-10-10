// JavaScript Document
function abc(){
	var pass=document.getElementById("register_mobile").value;
	if(pass.length<11){
					document.getElementById("dh").innerHTML="<font color='#8ec657'>长度为11</font>";
					}

	else{	document.getElementById("dh").innerHTML="<img src='images/right1.gif'></img>";}
	}
	function def(){
	var apass=document.getElementById("registercompany").value;
	if(apass==""){
					document.getElementById("dz").innerHTML="<font color='#8ec657'>不正确</font>";
					}

	else{	document.getElementById("dz").innerHTML="<img src='images/right1.gif'></img>";}

		

	}

function checknames(){
	var pass=document.getElementById("passport");
	document.getElementById("passname").innerHTML="以字母开头，4-20位字母或数字";
}
function checkname(){
	var pass=document.getElementById("passport");
	if(pass.value==''||pass.value==null){
		document.getElementById("passname").innerHTML="<font color='red'>此项为必填项</font>";
	}else if(pass.value.length<4){
		document.getElementById("passname").innerHTML="<font color='red'>登录名太短了，至少4位</font>";
	}else if(pass.value.length>=4){ document.getElementById("passname").innerHTML="<img src='images/right1.gif'></img>";
		var patrn=/^[a-zA-Z][a-zA-Z0-9]*$/;
		if(!patrn.exec(pass.value)){
			document.getElementById("passname").innerHTML="<font color='red'>登陆名错误，以字母开头，4-20位字母或数字</font>"; 
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
	document.getElementById("mailname").innerHTML="请输入常用的邮箱，以便日后找回密码";
}

function checkmail(){
	var mail=document.getElementById("mail");
	if(mail.value==''||mail.value==null){
		document.getElementById("mailname").innerHTML="<font color='red'>此项为必填项</font>";
	}else{
		var m=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
		if(!m.exec(mail.value)){
			document.getElementById("mailname").innerHTML="<font color='red'>请输入正确的邮箱地址</font>";
		}else{
			document.getElementById("mailname").innerHTML="<img src='images/right1.gif'></img>";
		}
	}
}

function checkpasswords(){
	document.getElementById("passwname").innerHTML="请输入6-20位英文字母、数字或符号，区分大小写";
}

function checkpasswordss(pwd){
	if(pwd==null||pwd==''){
		document.getElementById("passwname").innerHTML="请输入6-20位英文字母、数字或符号，区分大小写";
	}else if(pwd.length<6){
		document.getElementById("passwname").innerHTML="请输入至少6位以字母开头，数字或符号";
	}else{
		document.getElementById("passwname").innerHTML="<img src='images/right1.gif'></img>";
	}
}

function checkpasswords2(){
	document.getElementById("passname2").innerHTML="请再次输入密码";
}

function checkpassword2(pwd2){
	if(pwd2==null||pwd2==''){
		document.getElementById("passname2").innerHTML="请再次输入密码";
	}else if(pwd2.length<6){
		document.getElementById("passname2").innerHTML="<font color='red'>密码输入不一致，请重新输入</font>";
	}else{
		var pwd=document.getElementById("pwd").value;
		
		if(pwd!=pwd2){
			document.getElementById("passname2").innerHTML="<font color='red'>密码输入不一致，请重新输入</font>";
		}else{
			document.getElementById("passname2").innerHTML="<img src='images/right1.gif'></img>";
		}
	}
}

function checkuname(){
	document.getElementById("unames").innerHTML="请输入中文或英文";
}

function checkuser(user){
	if(user==''){
		document.getElementById("unames").innerHTML="<font color='red'>此项为必填项</font>";
	}else{
		var yd=/^[A-Za-z\u4E00-\u9fa5]*$/;

		if(!yd.exec(user)){
			document.getElementById("unames").innerHTML="请输入中文或英文";
		}else{
			document.getElementById("unames").innerHTML="<img src='images/right1.gif'></img>";
		}
	}
}

function chkpwd(obj){

	var t=obj.value;
	var id=getResult(t);
	
	//定义对应的消息提示
	var msg=new Array(4);;
	msg[0]="密码过短。";
	msg[1]="密码强度差。";
	msg[2]="密码强度良好。";
	msg[3]="密码强度高。";

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

	//设置显示效果
	var sWidth=300;
	var sHeight=15;
	var Bobj=document.getElementById("chkResult");
	Bobj.style.fontSize="12px";
	Bobj.style.color=col[id];
	Bobj.style.width=sWidth + "px";;
	Bobj.style.height=sHeight + "px";
	Bobj.style.lineHeight=sHeight + "px";
/*	Bobj.style.background="url no-repeat left " + sty[id] + "px";*/
	Bobj.innerHTML="检测提示：" + msg[id];
}

//定义检测函数,返回0/1/2/3分别代表无效/差/一般/强
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
		document.getElementById("passname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>此项为必填项</font>";
		return false;
	}else if(name.length<4){
		document.getElementById("passname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>登录名太短了，至少4位</font>";
		return false;
	}else if(!patrn.exec(name)){
		document.getElementById("passname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>以字母开头，4-20位字母或数字</font>";
		return false;
	}else if(mail==''){
		document.getElementById("mailname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>此项为必填项</font>";
		return false;
	}else if(!m.exec(mail)){
		document.getElementById("mailname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>请输入正确的邮箱地址</font>";
		return false;
	}else if(pwd==''){
		document.getElementById("passwname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>此项为必填项</font>";
		return false;
	}else if(pwd.length<6){
		document.getElementById("passwname").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>请输入6-20位英文字母、数字或符号，区分大小写</font>";
		return false;
	}else if(pwd2==''){
		document.getElementById("passname2").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>此项为必填项</font>";
		return false;
	}else if(pwd2.length<6){
		document.getElementById("passname2").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>密码输入不一致，请重新输入</font>";
		return false;
	}else if(pwd!=pwd2){
		document.getElementById("passname2").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>密码输入不一致，请重新输入</font>";
		return false;
	}else if(username==''){
		document.getElementById("unames").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>此项为必填项</font>";
		return false;
	}else if(!user.exec(username)){
		document.getElementById("unames").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>请输入中文或英文</font>";
		return false;
	}else if(captcha==''){
		document.getElementById("resets").innerHTML="<img src='images/wrong1.gif'></img><font color='red'>请输入验证码</font>";
		return false;
	}else{
		return true;
	}
	
}
