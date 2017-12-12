<?php
header('content-type:text/html;charset=utf-8');
$filename=__DIR__.'/file_get_contents test.txt';
echo file_get_contents($filename);

