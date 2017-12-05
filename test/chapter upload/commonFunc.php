<?php
// 上传文件函数，可选类型，大小，路径以及是否要检测用户上传是否为真实图片
function getFile($fileInfo,$maxSize=2097152,$allowExt=['jpg','jpeg','png','gif'],$flag=true,$path='upload/'){
		$res='';
		if($fileInfo['error']==0){
		// $maxSize=2097152;
		if($fileInfo['size']>$maxSize){
			exit ('文件过大，上传失败');
		}
		// $allowExt=['jpg','jpeg','png','gif'];
		$ext=strtolower(pathinfo($fileInfo['name'],PATHINFO_EXTENSION));
		// 可传入类型是可选参数，检测下是否为数组
		if(!is_array($allowExt)){
			exit("系统错误");
		}
		if(!in_array($ext, $allowExt)){
			exit('非法类型');
		}
		// $flag=true;
		if($flag){
			if(!getimagesize($fileInfo['tmp_name'])){
				exit("不是真实图片");
			}
		}
		// $path='upload/';
		if(!file_exists($path)){
			mkdir($path,0777,true);
			chmod($path, 0777);
		}
		$unique=md5(uniqid(microtime(true),true));
		$dest=$path.$unique.'.'.$ext;
		if(!is_uploaded_file($fileInfo['tmp_name'])){
			exit('不是通过HTTP POST方式上传');
		}
		if(move_uploaded_file($fileInfo['tmp_name'], $dest)){
			$res='文件'.$unique.'.'.$ext.'上传成功';
		}else{
			$res="文件上传失败";
		}
	}else{
		//以下筛选错误是php.ini里的配置筛选出来的错误 
		switch ($fileInfo['error']) {
			case 1:
			case 2:
				$res= '文件过大';
				break;
			case 3:
				$res= '只有部分文件被上传';
				break;
			case  4:
				$res= '未选择文件';
				break;
			case 6:
				 $res= '未找到指定目录';
				break;
			case 7:
			case 8:
				 $res= '系统错误';
				 break;
			}	
	}
	return $res;
}
// 得到文件的扩展名
function getExt($fileName){
	$fileExt=pathinfo($fileName,PATHINFO_EXTENSION);
	return $fileExt;
}
//得到唯一的文件名
function getUniqueName(){
	return md5(uniqid(microtime(true),true));
	
}
