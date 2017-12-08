<?php
header('content-type:image/jpeg');
$filename='./1.jpeg';
$handle=fopen($filename,'rb+');
$res=fread($handle, filesize($filename));
fclose($handle);
echo $res;


