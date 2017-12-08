<?php
//文件内容操作之读取 打开文件
header('content-type:image/jpeg');

$handle=fopen('./test3.txt','r');

//读取内容
// $res=fread($handle,3);
// echo($res).'<br/>';
// $res=fread($handle,3);
// echo($res).'<br/>';
// $res=fread($handle,3);
// echo($res).'<br/>';

//读取图片
// $handle=fopen('./test3.txt','rb');
// $res=fread($handle,3);
// echo $res;

$filename='./test3.txt';
$handle=fopen($filename,'rb+');
$res=fread($handle,3);//指针移动到了第3位
echo ftell($handle)."<br/>";
$res=fread($handle,4);//指针移动到了第7位
echo ftell($handle);

//fseek()重置指针
$handle=fopen($filename, 'r');
fseek($handle,0);
echo ftell($handle);//0

//关闭文件
fclose($handle);
var_dump(ftell($handle));
