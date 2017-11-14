<?php
	$users[]=["id"=>1,"username"=>"beiebi","age"=>12,"password"=>"abc123","email"=>"1686310541@qq.com"];
	$users[]=["id"=>2,"username"=>"alice","age"=>22,"password"=>"789","email"=>"alice@qq.com"];
	$users[]=["id"=>3,"username"=>"helen","age"=>32,"password"=>"101112","email"=>"helen@qq.com"];
	$users[]=["id"=>4,"username"=>"jack","age"=>42,"password"=>"787980","email"=>"jack@qq.com"];
	$users[]=["id"=>5,"username"=>"jay","age"=>52,"password"=>"5678","email"=>"jay@qq.com"];
	$users[]=["id"=>6,"username"=>"alin","age"=>62,"password"=>"69225","email"=>"alin@qq.com"];
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>forearchTest</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="0" width="50%">
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>年龄</td>
			<td>密码</td>
			<td>邮箱</td>
		</tr>
		<?php
			foreach ($users as $value) {
		?>
		<tr>
			<td><?php echo $value["id"];?></td>
			<td><?php echo $value["username"];?></td>
			<td><?php echo $value["age"];?></td>
			<td><?php echo $value["password"];?></td>
			<td><?php echo $value["email"];?></td>
		</tr>
		<?php
		 }
		?>		
	</table>
</body>
</html>