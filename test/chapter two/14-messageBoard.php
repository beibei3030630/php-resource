<?php
	header('content-type:text/html;charset=utf-8');
	date_default_timezone_set('PRC');
	$filename="msg.txt";
	$msg=[];
	if(file_exists($filename)){
		$string=file_get_contents($filename);
		if(strlen($string)>0){
   			 $msg=unserialize($string);
       }
	}
	if(isset($_POST['pubMsg'])){
		$username=$_POST['username'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$time=time();
		$data=compact('username','title','content',"time");
		if(is_array($msg)){
			array_push($msg,$data);
		}else{
			echo "报错";	
		}
		
		$msgData=serialize($msg);
		file_put_contents($filename, $msgData);
	}
	print_r($msg);	

?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h1>
				留言板<br />
			</h1>
			<div class="hero-unit">
				<h3>
					Hello, world!
				</h3>
				<p>
					这是一个可视化布局模板, 你可以点击模板里的文字进行修改, 也可以通过点击弹出的编辑框进行富文本修改. 拖动区块能实现排序.
				</p>
				<p>
					<a rel="nofollow" class="btn btn-primary btn-large" href="#">参看更多 »</a>
				</p>
			</div>
			<?php if(is_array($msg)&&count($msg)>0):?>
			<table class="table">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							用户名
						</th>
						<th>
							标题
						</th>
						<th>
							内容
						</th>
						 <th>
							时间
						</th>						
					</tr>
				</thead>
				<tbody>
				   <?php $i=1;foreach($msg as $val):?>
					<tr>
						<td>
							<?php echo $i++;?>
						</td>
						<td>
							<?php echo $val['username'];?>
						</td>
						<td>
							<?php echo $val['title'];?>
						</td>
						<td>
							<?php echo $val["content"];?>
						</td>
						<td>
							<?php echo date("m/d/Y H:i:s",$val['time']); ?>
						</td>
					</tr>
				  <?php endforeach;?>	
				</tbody>
			</table>
		<?php endif;?>
			<form action="#" method="post">
				<fieldset>
					 <legend>请留言</legend>	
           <label>用户名</label><input type="text" name="username" required />
           <label>标题</label><input type="text" name="title" required />
           <label>内容</label><textarea name="content" rows="5" cols="30" required></textarea>
           <hr>
           <input type="submit" class="btn btn-primary btn-lg" name="pubMsg" value="发布留言"/>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
</html>