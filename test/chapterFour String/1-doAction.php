<?php
header('content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$email=$_POST['email'];
$verify=$_POST['verify'];
$verify1=$_POST['verify1'];
$fav=$_POST['fav'];
//提取检测不通过 公共方法
$redirectUrl='<a href="1-reg.php">重新注册</a>';


//检测用户名首字符是否为字母
$char=substr($username,0,1);
//字母ASCII码值 65-90(A-z)或者97-122(a-z);
$ascii=ord($char);
if(!(($ascii>=65&&$ascii<=90)||($ascii>=97&&$ascii<=122))){
 exit("必须以字母开头{$redirectUrl}");
}
//检测用户名长度是否符合要求 6-10
$userLen=strlen($username);
if(!($userLen>=6&&$userLen<=10)){
	exit("长度必须为6-10位{$redirectUrl}");
}

//检测密码，密码不能为空，长度必须为6-10位
$pwdLen=strlen($password);
if($pwdLen==0){
	exit("密码不能为空<br/>{$redirectUrl}");
}
if(!($pwdLen>=6&&$pwdLen<=10)){
	exit("密码长度不对<br/>{$redirectUrl}");
}

//检测两次密码是否一致
if(strcmp($password,$password1)!==0){
		exit("两次密码不一致<br/>{$redirectUrl}");
}
//等同于
// if($password!==$password1){
// 	exit("两次密码不一致<br/>{$redirectUrl}");
// }
// 加密密码
$password=md5(sha1(md5(sha1($password))));


//检测邮箱是否包含@符号，且@符号不可以在第一位
if(strpos($email,'@')==false){
	exit("非法邮箱{$redirectUrl}");
}
//把传递过来的兴趣爱好处理一下
if(!empty($fav)){
	$fav=join(',',$fav);
}

//检测验证码是否相同
//验证码为随机颜色，有html标签，需要把html标签过滤掉，再进行比较
if(trim(strtolower($verify))!==strtolower(strip_tags($verify1))){
	exit("验证码输入有误，请重新填写{$redirectUrl}");
}
$table=<<<TABLE
	<table border='1' cellspacing='0' cellpading='0' width='70%' bgcolor='#abcdef'>
		<tr>
			<td>用户名</td>
			<td>密码</td>
			<td>邮箱</td>
			<td>兴趣爱好</td>
		</tr>
		<tr>
			<td>{$username}</td>
			<td>{$password}</td>
			<td>{$email}</td>
			<td>{$fav}</td>
		</tr>
	</table>
TABLE;
//通过所有验证 
echo "恭喜你，注册成功";
echo $table;