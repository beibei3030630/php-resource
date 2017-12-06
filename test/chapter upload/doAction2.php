<?php
//error_reporting(E_ALL&~E_NOTICE);
header('content-type:text/html;charset=utf-8');
include_once('commonFunc.php');
$fileInfo=$_FILES['myFile'];
echo getFile($fileInfo);	