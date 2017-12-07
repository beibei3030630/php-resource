<?php
// 文件信息相关api
date_default_timezone_set('PRC');
$filename="./test1.txt";

// echo '文件类型为'.filetype('./test1.txt').'<br/>';
// //文件类型为file
// echo '文件类型为'.filetype('../chapter DIR').'<br/>';
// //文件类型为dir



// echo '文件大小为'.filesize($filename);
// //文件大小为9
echo '文件的创建时间为'.date('Y-m-d H:i:s',filectime($filename));	
echo "<br/>";
echo '文件的修改时间为'.date('Y-m-d H:i:s',filemtime($filename));
echo "<br/>";
echo '文件的最后访问时间为'.date('Y-m-d H:i:s',fileatime($filename));
echo "<br/>";


var_dump(is_writable($filename));
var_dump(is_readable($filename));
var_dump(is_executable($filename));


//检测是否为文件，并且文件存在
var_dump(is_file($filename));


$filename="./test1.txt";
print_r(pathinfo($filename));
// Array
// (
//     [dirname] => . 
//     [basename] => test1.txt
//     [extension] => txt
//     [filename] => test1
// )

echo  pathinfo($filename,PATHINFO_DIRNAME);
//. 返回当前相对路径

echo pathinfo($filename,PATHINFO_BASENAME);
//返回主文件名+扩展名

echo '<br/>';
echo pathinfo($filename,PATHINFO_EXTENSION);
echo '<br/>';
echo pathinfo($filename,PATHINFO_FILENAME);
echo '<br/>';
//返回文件相对路径 不包括主文件名及扩展名

$filename='./test1.txt';

//输出文件的主扩展名
echo basename($filename);
//test1.txt

//去除扩展名
echo basename($filename,'.txt');
//test1


$filename='./test1.txt';
echo dirname($filename);
//.

$filename='./test1.txt';
var_dump(file_exists($filename));
//true;
var_dump(file_exists('test1.txt'));
//true;

