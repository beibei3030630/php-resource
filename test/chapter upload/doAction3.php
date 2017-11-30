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

//     [myFile3] => Array
//         (
//             [name] => telicon.jpg
//             [type] => image/jpeg
//             [tmp_name] => D:\wamp\wamp\tmp\php588C.tmp
//             [error] => 0
//             [size] => 1074
//         )

//     [myFile4] => Array
//         (
//             [name] => telicon.jpg
//             [type] => image/jpeg
//             [tmp_name] => D:\wamp\wamp\tmp\php589C.tmp
//             [error] => 0
//             [size] => 1074
//         )

// )
foreach($_FILES as $fileInfo){
	$files[]=getFile($fileInfo);
}
print_r($files);