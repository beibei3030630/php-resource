<?php
header('content-type:text/html;charset=utf-8');
include_once('commonFunc.php');
//print_r($_FILES);
// Array
// (
//     [myFile1] => Array
//         (
//             [name] => QQ图片20171129135720.jpg
//             [type] => image/jpeg
//             [tmp_name] => D:\wamp\wamp\tmp\php587A.tmp
//             [error] => 0
//             [size] => 57085
//         )

//     [myFile2] => Array
//         (
//             [name] => QQ截图20171130094252.jpg
//             [type] => image/jpeg
//             [tmp_name] => D:\wamp\wamp\tmp\php587B.tmp
//             [error] => 0
//             [size] => 76248
//         )
//         
//  抽出数组的每一项，组成文件的信息
// 	Array(
//     [myFile] => Array
//         (
//             [name] => Array
//                 (
//                     [0] => telicon.jpg
//                     [1] => banner3.jpg
//                     [2] => banner2.jpg
//                     [3] => logo.png
//                 )

//             [type] => Array
//                 (
//                     [0] => image/jpeg
//                     [1] => image/jpeg
//                     [2] => image/jpeg
//                     [3] => image/png
//                 )

//             [tmp_name] => Array
//                 (
//                     [0] => D:\wamp\wamp\tmp\phpF509.tmp
//                     [1] => D:\wamp\wamp\tmp\phpF50A.tmp
//                     [2] => D:\wamp\wamp\tmp\phpF51B.tmp
//                     [3] => D:\wamp\wamp\tmp\phpF51C.tmp
//                 )

//             [error] => Array
//                 (
//                     [0] => 0
//                     [1] => 0
//                     [2] => 0
//                     [3] => 0
//                 )

//             [size] => Array
//                 (
//                     [0] => 1074
//                     [1] => 33615
//                     [2] => 38698
//                     [3] => 119300
//                 )

//         )

// )

//得到单个单文件信息已经多个单文件信息
function getFiles(){
	$files=[];
	$i=0;
	//第一次循环的都是上传的名称
	foreach ($_FILES as  $file) {
		if(is_string($file['name'])){
			$files[$i]=$file;
			$i++;
			//把单个文件信息放入数组
		}elseif(is_array($file['name'])){
			//符合要求的都为多个单文件。
			foreach ($file['name'] as $key => $val) {
				//组成索引+关联数组的形式。组成文件信息
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

function getFilesInfo($fileInfo,$allowExt=['jpg','jpeg','png','gif'],$flag=true,$path='./upload',$maxSize=2097152){
	$res=[];
	if($fileInfo['error']===UPLOAD_ERR_OK){
		if($fileInfo['size']>$maxSize){
			$res['msg']=$fileInfo['name'].'文件过大';
		}
		$ext=getExt($fileInfo['name']);
		if(!in_array($ext, $allowExt)){
			$res['msg']=$fileInfo['name'].'非法文件类型';
		}
		if($flag){
			if(!getimagesize($fileInfo['tmp_name'])){
				$res['msg']=$fileInfo['name'].'不是真实图片类型';
			}
		}
		if(!is_uploaded_file($fileInfo['tmp_name'])){
			$res['msg']=$fileInfo['name'].'不是通过HTTP post方法上传';
		}
		//如果有错误 直接返回错误信息，不运行以下代码
		if($res) return $res;
		$uniqueName=getUniqueName();
		if(!file_exists($path)){
			mkdir($path,0777,true);
			chmod($path,0777);
		}
		$dest=$path.'/'.$uniqueName.'.'.$ext;
		if(!move_uploaded_file($fileInfo['tmp_name'], $dest)){
			$res['msg']='文件'.$fileInfo['name'].'上传失败';
		}
		$res['msg']='文件'.$fileInfo['name'].'上传成功';
		$res['dest']=$dest;
		return $res;
	}else{
		switch ($fileInfo['error']) {
					case 1:
					case 2:
						$res['msg']= '文件过大';
						break;
					case 3:
						$res['msg']= '只有部分文件被上传';
						break;
					case  4:
						$res['msg']= '未选择文件';
						break;
					case 6:
						 $res['msg']= '未找到指定目录';
						break;
					case 7:
					case 8:
						 $res['msg']= '系统错误';
						 break;
					}
			return $res;		
	}
	
}