<?php
date_default_timezone_set("PRC");
  $filename="msg.txt";
  //初始化数组
  $msgs=[];
  //检测文件是否存在
  if(file_exists($filename)){
  	//读取文件中的内容
  	$string=file_get_contents($filename);
  	if(strlen($string)>0){
  		$msgs=unserialize($string);
  	}
  }
  //检测用户是否点击了提交按钮
  if(isset($_POST['pubMsg'])){
  	$username=$_POST['username'];
  	$title=$_POST['title'];
  	//获得当前文件的时间戳
  	$time=time();
  	$content=$_POST['content'];
  	//将其组成关联数组
  	$data=compact('username','title','time','content');
  	array_push($msgs, $data);
  	//序列化之后$msgs为字符串
  	$msgs=serialize($msgs);
  	//每次提交之后，页面刷新。$msgs又为数组，返回之前设定好的表格
  	if(file_put_contents($filename, $msgs)){
  		echo "<script>alert('发布留言成功');location.href='14-messageBoard.php';</script>";
  	}else{
  		echo "<script>alert('发布留言失败，请稍后重试');location.href='14-messageBoard.php';</script>";
  	}
  }
  // print_r($msgs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>messageBoardTest</title>
</head>
<body>
	<h1>留言板</h1>
	<?php if(is_array($msgs)&&count($msgs)>0):?>
		<table border="1" cellspacing="0" cellpadding="0" width="90%">
		      <tr>
		      <td>编号</td>		
		      <td>用户名</td>		
		      <td>标题</td>		
		      <td>时间</td>		
		      <td>内容</td>		
		      </tr>
		    <?php $i=1; foreach ($msgs as $val):?>
			 <tr>
		      <td><?php echo $i++?></td>		
		      <td><?php echo $val['username']?></td>		
		      <td><?php echo $val['title']?></td>
		      <!--如果不设置时间戳，所有时间都为最后一次提交的时间-->		
		      <td><?php echo date("Y/m/d H:i:s",$val['time'])?></td>		
		      <td><?php echo $val['content']?></td>		
		      </tr> 
		     <?php endforeach;?>     
		</table>
	<?php endif;?>
	<h3>请留言</h3>
	<form action="#" method="post">
		<label for="用户名">用户名</label><input type="text" name="username" required>
		<br/>
		<br/>
		<label for="标题">标题</label><input type="text" name="title" style="margin-left:16px" required>
		<br/>
		<br/>
		<label >请输入内容</label>
		<br/>
		<textarea name="content" id="" cols="30" rows="10" required></textarea>
		<br/><br/>
		<input type="submit" value="提交" name="pubMsg">
	</form>
</body>
</html>