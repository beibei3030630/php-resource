<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>multifileUpload</title>
</head>
<body>
	<form action="doAction4.php" method='post'>
		<input type="file" name='myFile[]'/>
		<input type="file" name='myFile[]'/>
		<input type="file" name='myFile[]'/>
		<br/>
		<input type="submit" value='上传文件'/>
	</form>
</body>
</html>