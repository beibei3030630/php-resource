<?php
//通过字符串函数库完成表单常用字段验证
function verfiy(){
	$arr1=range(0,9);
	$arr2=range('a','z');
	$arr3=range('A','Z');
	$newArr=array_merge($arr1,$arr2,$arr3);
	$str='';
	for ($i=1;$i<=4;$i++){
	   $str.=$newArr[mt_rand(0,count($newArr)-1)];
	}
	return $str;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
</head>
<body>
	<h1>慕课网注册页面</h1>
	<form action="1-doAction.php" method="post">
		<table border='1' cellpadding="0" cellspacing="0" bgcolor="#ABCDEF">
			<tr>
				<td align='right'>用户名</td>
				<td><input type="text" name="username" placeholder="请输入用户名">用户名首字母以字母开始，并且长度6-10</td>
			</tr>
			<tr>
				<td align='right'>密码</td>
				<td><input type="text" name="password" placeholder="请输入密码">密码长度6-10</td>
			</tr>
			<tr>
				<td align='right'>确认密码</td>
				<td><input type="text" name="password1" placeholder="请确认密码">两次密码一致</td>
			</tr>
			<tr>
				<td align='right'>邮箱</td>
				<td><input type="text" name="password1" placeholder="请确认合法邮箱">邮箱必须包含@,1686310541@qq.com</td>
			</tr>
			<tr>
				<td align="right">兴趣爱好</td>
				<td>
					<input type="checkbox" name="fav[]" value="php"/>PHP
					<input type="checkbox" name="fav[]" value="java"/>JAVA
					<input type="checkbox" name="fav[]" value="ios"/>IOS
					<input type="checkbox" name="fav[]" value="c"/>C语言
					<br>
					<input type="checkbox" name="fav[]" value="c++"/>C++
					<input type="checkbox" name="fav[]" value="swift"/>Swift
					<input type="checkbox" name="fav[]" value="nodejs"/>NodeJs
					<input type="checkbox" name="fav[]" value="ionic"/>ionic
				</td>
			</tr>
			<tr>
				<td align="right">验证码</td>
				<td><input type="text" name="verify"><?php echo verfiy()?></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value='立即注册'></td>
			</tr>
		</table>
	</form>
</body>
</html>