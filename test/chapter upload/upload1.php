<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chapter upload</title>
</head>
<body>
	<form action="doAction1.php" method="post" enctype="multipart/form-data">
		请选择要上传的文件:
		<!-- 通过表单隐藏域限制上传文件的最大值 -->
		<!-- <input type="hidden" name='MAX_FILE_SIZE' value='2097152'/> -->
		<!-- 通过accept属性限制上传文件的类型 -->
		<input type="file" name="myFile"/><br/>
		<!-- type='file' 定义输入字段和 "浏览"按钮，供文件上传。-->
		<input type="submit" value='上传文件'/>
		<!-- type='submit' 定义提交按钮。提交按钮会把表单数据发送到服务器。 -->
	</form>
</body>
</html>


