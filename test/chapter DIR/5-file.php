<?php
$filename=__DIR__.'/test3.txt';
$handle=fopen($filename, 'rb+');
//以rb+的形式打开文件，输入的内容
//会覆盖之前的内容
fwrite($handle, '678');
