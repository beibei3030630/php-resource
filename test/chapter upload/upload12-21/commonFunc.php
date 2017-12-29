<?php

function getFileInfo( $file, int $maxSize=2097152, array $allowExt=['jpg','jpeg','rar','zip','png','gif'], string $path='./uploads'){
	$res=[];
	$filename=$file['name'];
	if($file['error']==0){
		if($maxSize<$file['size']){
		  $res['msg']=$filename.'文件过大';
		  return $res;
		}
		$ext=strtolower(PATHINFO($filename,PATHINFO_EXTENSION));
		if(!in_array($ext, $allowExt)){
			$res['msg']=$filename.'文件类型错误';
			 return $res;
		}
		if(!@getimagesize($file['tmp_name'])){
			$res['msg']=$filename.'不是真实的图片类型';
			 return $res;
		}
		if(!is_uploaded_file($file['tmp_name'])){
			$res['msg']=$filename.'不是通过HTTP POST方法上传';
			 return $res;
		}
		$unique=md5(uniqid(microtime(true),true));
		if(!is_dir($path)){
			mkdir($path,0777,true);
		}
		$dest=$path.DIRECTORY_SEPARATOR.$unique.'.'.$ext;
		if(move_uploaded_file($file['tmp_name'], $dest)){
			$res['msg']=$filename.'上传成功'; 
		}else{
			$res['msg']=$filename.'上传失败';
		}
		$res['dest']=$dest;
	}else{
	switch ($file['error']) {
		case 1:
		case 2:
		$res['msg']=$filename.'上传文件过大';
		break;
		case 3:
		$res['msg']=$filename.'文件只有部分别上传';
		break;
		case 4:
		$res['msg']=$filename.'未选择文件';
		break;
		case 6:
		$res['msg']=$filename.'路径错误';
		break;
		case 7:
		case 8:
		$res['msg']=$filename.'系统错误';
	}
  }
  return $res;
}

function getFilesInfo(){
	$files=[];
	$i=0;
	foreach ($_FILES as $file) {
		if(is_string($file['name'])){
			$files[$i]=$file;
			$i++;
		}elseif(is_array($file['name'])){
			foreach ($file['name'] as $key => $v) {
				$files[$i]['name']=$file['name'][$key];
				$files[$i]['type']=$file['type'][$key];
				$files[$i]['tmp_name']=$file['tmp_name'][$key];
				$files[$i]['error']=$file['error'][$key];
				$files[$i]['size']=$file['size'][$key];
				$i++;
			}
	    }
	}
	return $files;
}