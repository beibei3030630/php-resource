<?php
	header('content')
	date_default_timezone_set('PRC');
	$filename="msg.txt";
	$msgs=[];
	if(file_exists($filename)){
		$string=file_get_contents($filename);
		if(strlen($string)>0){
			$msgs=unserialize($string);
			}
		}
	if(isset($_POST['pubMsg'])){
		$username=$_POST['username'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$time=time();
		$data=compact('username','title','content','time');
		array_push($msgs,$data);
		$msgs=serialize($msgs);
		if(file_put_contents($filename, $msgs)){
			echo "<script>alert('发布留言成功');location.href='messageBoard.php'</script>";
		}else{
			echo "<script>alert('发布留言失败');location.href='messageBoard.php'</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>messageBoard</title>
</head>
<body>
	<h1>留言板</h1>
	<?php  if(is_array($msgs)&&count($msgs)>0):?>
	<table border="1" cellspacing="0" cellpadding="0" width="50%">
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>标题</td>
			<td>时间</td>
			<td>内容</td>
		</tr>
		<?php $i=1;foreach($msgs as $v):?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $v['username'];?></td>
				<td><?php echo $v['title'];?></td>
				<td><?php echo date("Y/m/d H:i:s",$v['time']);?></td>
				<td><?php echo $v['content'];?></td>
			</tr>
		<?php endforeach;?>
	</table>
	<?php endif;?>
	<h3>请留言</h3>
	<form action="#" method="post">
		<label for="用户名">用户名</label><input type="text" name="username" required />
		<br><br>
		<label for="标题">标题</label><input type="text" name="title" required />
		<br><br>
		<label for="请输入内容">请输入内容</label><br>
		<textarea name="content" cols="30" rows="10" required></textarea>
		<br>
		<input type="submit" value="提交" name="pubMsg"/>
	</form>
</body>
</html>