<?php
header('content-type:text/html;charset=utf-8');
include_once('commonFunc.php');
$fileInfo=$_FILES['myFile'];
echo getFile($fileInfo);