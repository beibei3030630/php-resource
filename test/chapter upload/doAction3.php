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

// function getFiles(){
// 	$i=0;
// 	$files=[];
// 	foreach($_FILES as $file) { 
// 		if(is_string($file['name'])){
// 			$files[$i]=$file;
// 			$i++;
// 		}elseif(is_array($file['name'])){
// 			foreach ($file['name'] as $key => $value) {
// 				$files[$i]['name']=$file['name'][$key];
// 				$files[$i]['tmp_name']=$file['tmp_name'][$key];
// 				$files[$i]['size']=$file['size'][$key];
// 				$files[$i]['error']=$file['error'][$key];
// 				$files[$i]['type']=$file['type'][$key];
// 				$i++;
// 				}
// 			}
// 	}
// 	return $files;
// }
// print_r(getFiles());
function getFiles(){
	$i=0;
	foreach($_FILES as $val) {	
		foreach ($val as $v){
			$files[$i]=$v;
			$i++;
		}
	}
	return $files;
}
print_r(getFiles());
