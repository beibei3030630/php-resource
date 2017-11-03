<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>多文件上传</title>
</head>
<body>
	<form action="#" method="post" enctype="multipart/form-data">
		<input type="file" name="upload_files[]" value=""><br/>
		<input type="file" name="upload_files[]" value=""><br/>
		<input type="file" name="upload_files[]" value=""><br/>
		<input type="submit" name="name" vlaue="上传">
	</form>
	<?php
		print_r($_FILES);	
	?>
</body>
</html>