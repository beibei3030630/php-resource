<?php

function getFileInfo( $file, int $maxSize=2097152, array $allowExt=['jpg','jpeg','rar','zip','png','gif'], string $path='./uploads'){
	$res='';
	if($file['error']==0){
		if($maxSize<$file['size']){
			exit($res='文件过大');
		}
		$ext=strtolower(PATHINFO($file['name'],PATHINFO_EXTENSION));
		if(!in_array($ext, $allowExt)){
			exit($res='文件类型错误');
		}
		if(!@getimagesize($file['tmp_name'])){
			exit($res='不是真实的图片类型');
		}
		if(!is_uploaded_file($file['tmp_name'])){
			exit($res='不是通过HTTP上传的文件');
		}
		$unique=md5(uniqid(microtime(true),true));
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		$dest=$path.DIRECTORY_SEPARATOR.$unique.'.'.$ext;
		if(move_uploaded_file($file['tmp_name'], $dest)){
			$res= '上传成功';
		}else{
			$res= '上传失败';
		}
	}else{
	switch ($file['error']) {
		case 1:
		case 2:
		$res='上传文件过大';
		break;
		case 3:
		$res='文件只有部分别上传';
		break;
		case 4:
		$res='未选择文件';
		break;
		case 6:
		$res='路径错误';
		break;
		case 7:
		case 8:
		$res='系统错误';
	}
  }
  return $res;
}

function getFilesInfo(){
	
}