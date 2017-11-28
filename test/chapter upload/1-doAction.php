<?php
header('content-type:text/html;charset=utf-8');
$fileInfo=$_FILES['myFile'];
//文件上传信息变量
print_r($fileInfo);
// Array
// (
//     [name] => 扫描0009.jpg
//     [type] => image/jpeg
//     [tmp_name] => D:\wamp\wamp\tmp\php6BAD.tmp
//     [error] => 0
//     [size] => 1042038
// )
$filename=$fileInfo['name'];
$type=$fileInfo['type'];
$tmp_name=$fileInfo['tmp_name'];
$size=$fileInfo['size'];
$error=$fileInfo['error'];


 // print_r(move_uploaded_file($tmp_name,"../uploads/".$filename));
 // print_r(move_uploaded_file($tmp_name,"uploads/".$filename));
 copy($tmp_name,"../uploads/".$filename);
