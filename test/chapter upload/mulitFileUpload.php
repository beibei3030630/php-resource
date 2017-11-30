<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chapter upload</title>
</head>
<body>
	<form action="doAction3.php" method="post" enctype="multipart/form-data">
		请选择要上传的文件:
		<input type="file" name="myFile[]"	/><br/>
		请选择要上传的文件:
		<input type="file" name="myFile[]"/><br/>
		请选择要上传的文件:
		<input type="file" name="myFile[]"/><br/>
		请选择要上传的文件:
		<input type="file" name="myFile[]"/><br/>
		<input type="submit" value='上传文件'/>
	</form>
</body>
</html>



