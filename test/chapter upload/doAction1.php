<?php
header('content-type:text/html;charset=utf-8');
$fileInfo=$_FILES['myFile'];
print_r($fileInfo);
$allowExt=['jpg','jpeg','png','gif'];
$maxSize=2097152;//默认2M

if($fileInfo['error']==0){
	

	if ($fileInfo['size']>$maxSize){
		exit('超过最大上传限制');
	}
	$ext=strtolower(pathinfo($fileInfo['name'],PATHINFO_EXTENSION));
	if (!in_array($ext,$allowExt)){
		exit("非法类型");
	}
	$flag=true;//设定每次都要检查
	if($flag){
		if(!getimagesize($fileInfo['tmp_name'])){
			exit('不是真实的图片类型');
		}
	}
	var_dump(getimagesize($fileInfo['tmp_name']));
	// 判断的是保存在服务器上的临时文件
	// 为什么要使用is_upload_file 为后面move_uploaded_file打基础
	// move_uploaded_file 只可以移动通过post方式传上来的图片，如果不是会报错
	if(!is_uploaded_file($fileInfo['tmp_name'])){
		exit('不是通过http POST方式传上来的');
	}
	$unique=md5(uniqid(microtime(true),true));
	$path="upload/";
	$dest=$path.$unique.'.'.$ext;
	//检测移动的目录是否存在，如不存在就创建一个
	if(!file_exists($path)){
		mkdir($path,0777,true);
		chmod($path,0777);
	}
	if(move_uploaded_file($fileInfo['tmp_name'], $dest)){
		echo "文件 ".$fileInfo['name'].'上传成功';

		}else{
		echo "文件 ".$fileInfo['name'].'上传失败';
	}
}else{
	/*
	匹配文件错误信息 
	 */
	switch ($fileInfo['error']) {
	case 1:
	case 2:
		echo '文件过大';
		break;
	case 3:
		echo '只有部分文件被上传';
		break;
	case  4:
		echo '未选择文件';
		break;
	case 6:
		 echo '未找到指定目录';
		break;
	case 7:
	case 8:
		 echo '系统错误';
		 break;
	}	
}
