<?php

$filename=__DIR__.'/test3.txt';
//D:\wamp\wamp\www\test\chapter\test3.txt

$handle=fopen($filename, 'rb+');
//以rb+的形式打开文件，输入的内容
//会覆盖之前的内容
fwrite($handle, '678');
fclose($handle);

//向test1文件追加一句话  test fwrite(a+);
// $filename=__DIR__.'/test1.txt';
// $handle=fopen($filename,'ab+');
// fwrite($handle, PHP_EOL.'test fwrite(a+)');

//向文件追加内容test wind，写完内容后读取文件所有内容
$handle=fopen($filename, 'ab+');
fwrite($handle,PHP_EOL.'test wind');
rewind($handle);
$res=fread($handle,filesize($filename));
fclose($handle);
var_dump($res);

$filename=__DIR__."/test3.txt";
$handle=fopen($filename,'rb+');
ftruncate($handle, 3);//把文件截断到前三个字符





