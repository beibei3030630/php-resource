<?php
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $email=$_POST['email'];
	 $userInfo=compact('username',"password","email");
		print_r($userInfo);
		
		echo "<br/>";
		echo "用户名：" .$userInfo["username"]."<br/>";
		echo "密码：" .$userInfo["password"]."<br/>";
		echo "邮箱：" .$userInfo["email"];


