//参数的例子
//一个3行2列的表格
$require=[];
if(isset($_POST['pubTable'])){
	$rows=$_POST['rows'];
	$cols=$_POST['cols'];
	if(!empty($_POST['bgColor'])){
		$bgColor=$_POST['bgColor'];
	}else{
		$bgColor='pink';
	}
	$data=compact('rows','cols','bgColor');
	array_push($require, $data);
}

//print_r($require);
if(is_array($require)&&count($require)>0){
	function table($rows,$cols,$bgColor='pink'){
		$table="<table border='1' cellpadding='0' cellspacing='0' bgColor={$bgColor}>";
			for ($i=1;$i<=$rows; $i++) { 
				$table.="<tr>";
					for ($j=1; $j<=$cols; $j++) { 
						$table.="<td width='55rpx' height='30rpx'></td>";
					}	
				$table.="</tr>";
			}
		$table.="</table>";
		return $table;
	}
	echo @table($require[0]['rows'],$require[0]['cols'],$require[0]['bgColor']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="#" method="post">
		<input type="text" placeholder="输入行" name="rows" required />
		<br/>
		<input type="text" placeholder="输入列" name="cols" required />
		<br/>
		<input type="text" placeholder="输入背景颜色，默认为粉色" name="bgColor"/>
		<br/>
		<input type="submit" name="pubTable">
	</form>
</body>
</html>

